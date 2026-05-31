import { makeBranchDoughnutChart, makeLineSingleChart, makeCashFlowChart, makeBarChart, makeCharLine } from "../../charts.js";

const yearLabels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

const revenueValues = [
  3200, 3600, 3900, 4100, 4300, 4500, 4700, 4900, 5200, 5400, 5600, 5900,
];

const costValues = [
  2100, 2200, 2350, 2400, 2500, 2550, 2600, 2680, 2750, 2820, 2900, 3050,
];
const lossValues = [120, 180, 110, 220, 150, 190, 170, 140, 210, 160, 230, 180];

const money = new Intl.NumberFormat("en-US", {
  style: "currency",
  currency: "USD",
  maximumFractionDigits: 0,
});

const percent = new Intl.NumberFormat("en-US", { maximumFractionDigits: 1 });

function sum(arr) {
  return arr.reduce((a, b) => a + b, 0);
}

let baseCurrency = "USD";
let fxCache = {};
const FX_CACHE_KEY = "fxCache_v1";
const FX_TTL = 1000 * 60 * 10; // 10 minutes
const RETRY_ATTEMPTS = 2;
const RETRY_DELAY_MS = 500;

function debounce(fn, wait = 300) {
  let t;
  return (...args) => {
    clearTimeout(t);
    t = setTimeout(() => fn.apply(this, args), wait);
  };
}

function loadCacheFromStorage() {
  try {
    const raw = localStorage.getItem(FX_CACHE_KEY);
    if (!raw) return;
    const parsed = JSON.parse(raw);
    const now = Date.now();
    Object.keys(parsed).forEach((k) => {
      const entry = parsed[k];
      if (entry && entry.ts && now - entry.ts < FX_TTL) fxCache[k] = entry;
    });
  } catch (err) {
    console.warn("Failed to read FX cache from localStorage", err);
  }
}

function saveCacheToStorage() {
  try {
    localStorage.setItem(FX_CACHE_KEY, JSON.stringify(fxCache));
  } catch (err) {
    console.warn("Failed to save FX cache", err);
  }
}

async function fetchWithRetry(
  url,
  options = {},
  attempts = RETRY_ATTEMPTS,
  delay = RETRY_DELAY_MS,
) {
  for (let i = 0; i <= attempts; i++) {
    try {
      const res = await fetch(url, options);
      return res;
    } catch (err) {
      if (i === attempts) throw err;
      await new Promise((r) => setTimeout(r, delay));
    }
  }
}

const STATIC_FX_RATES = {
  USD: { USD: 1, EUR: 0.92, GBP: 0.79, EGP: 49, SAR: 3.75, AED: 3.67 },
  EUR: { USD: 1.09, EUR: 1, GBP: 0.86, EGP: 53.4, SAR: 4.07, AED: 3.98 },
  GBP: { USD: 1.27, EUR: 1.16, GBP: 1, EGP: 62.0, SAR: 4.74, AED: 4.64 },
  EGP: {
    USD: 0.0204,
    EUR: 0.0187,
    GBP: 0.0161,
    EGP: 1,
    SAR: 0.0765,
    AED: 0.0748,
  },
  SAR: { USD: 0.267, EUR: 0.245, GBP: 0.211, EGP: 13.07, SAR: 1, AED: 0.98 },
  AED: { USD: 0.272, EUR: 0.251, GBP: 0.215, EGP: 13.37, SAR: 1.02, AED: 1 },
};

loadCacheFromStorage();

async function ensureRates(base) {
  const now = Date.now();
  if (fxCache[base] && now - fxCache[base].ts < FX_TTL && fxCache[base].rates) {
    console.debug("Using cached FX rates for", base);
    return fxCache[base].rates;
  }

  const symbols = ["USD", "EUR", "GBP", "EGP", "SAR", "AED"].join(",");
  const url = `https://api.exchangerate.host/latest?base=${encodeURIComponent(base)}&symbols=${symbols}`;
  try {
    const res = await fetchWithRetry(url);
    if (!res.ok) throw new Error(`Network response not ok: ${res.status}`);
    const data = await res.json();
    if (!data || !data.rates) throw new Error("Invalid API data");
    fxCache[base] = { rates: data.rates, ts: now };
    saveCacheToStorage();
    return data.rates;
  } catch (err) {
    console.error("ensureRates failed:", err);
    if (STATIC_FX_RATES[base]) {
      console.warn("Falling back to static FX rates for", base);
      return STATIC_FX_RATES[base];
    }
    return null;
  }
}

async function convertWithApi(amount, from, to) {
  const url = `https://api.exchangerate.host/convert?from=${encodeURIComponent(from)}&to=${encodeURIComponent(to)}&amount=${encodeURIComponent(amount)}`;
  try {
    const res = await fetchWithRetry(url);
    if (!res.ok) throw new Error(`Network response not ok: ${res.status}`);
    const data = await res.json();
    if (!data || data.success === false) throw new Error("API error");
    return data.result;
  } catch (err) {
    console.error("convertWithApi failed:", err);
    // fallback to static rates if possible
    if (
      STATIC_FX_RATES[from] &&
      typeof STATIC_FX_RATES[from][to] !== "undefined"
    ) {
      return amount * STATIC_FX_RATES[from][to];
    }
    if (
      STATIC_FX_RATES["USD"] &&
      STATIC_FX_RATES["USD"][to] &&
      STATIC_FX_RATES["USD"][from]
    ) {
      return (
        amount * (STATIC_FX_RATES["USD"][to] / STATIC_FX_RATES["USD"][from])
      );
    }
    throw err;
  }
}

async function updateConverter() {
  const amount = Number(document.getElementById("amount").value || 0);
  const toCurrency = document.getElementById("currencyTo").value;
  const from = baseCurrency;

  if (!amount) {
    document.getElementById("convertResult").textContent =
      `0 ${from} = 0 ${toCurrency}`;
    return;
  }

  document.getElementById("convertResult").textContent = "Loading exchange rate";
  try {
    const rates = await ensureRates(from);
    let converted;
    if (rates && typeof rates[toCurrency] !== "undefined") {
      converted = amount * rates[toCurrency];
    } else {
      converted = await convertWithApi(amount, from, toCurrency);
    }
    const formattedAmount = new Intl.NumberFormat("en-US", {
      maximumFractionDigits: 2,
    }).format(amount);
    const formattedConverted = new Intl.NumberFormat("en-US", {
      maximumFractionDigits: 2,
    }).format(converted);
    document.getElementById("convertResult").textContent =
      `${formattedAmount} ${from} = ${formattedConverted} ${toCurrency}`;
  } catch (err) {
    console.error(err);
    document.getElementById("convertResult").textContent = "Failed to fetch exchange rate. Open Console for details.";
  };
};

document.getElementById("amount").addEventListener("input", debounce(updateConverter, 300));

document.getElementById("currencyTo").addEventListener("change", updateConverter);

document.getElementById("swapBtn").addEventListener("click", () => {
  const select = document.getElementById("currencyTo");
  const to = select.value;
  if (baseCurrency === "USD") {
    baseCurrency = to;
    select.value = "USD";
  } else {
    baseCurrency = "USD";
    select.value = to;
  }
  updateConverter();
});

document.getElementById("refreshBtn").addEventListener("click", () => {
  // makeTable();
  updateConverter();
});

makeLineSingleChart(document.getElementById("revenueChart"));
makeBranchDoughnutChart(document.getElementById("mixChart"));
makeCashFlowChart(document.getElementById("cashFlowChart"));
makeCharLine(document.getElementById("pulseChart"));
// makeTable();
updateConverter();
