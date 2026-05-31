let QRCode = document.getElementById("qrCode");
let img = QRCode.getAttribute("data-img");

const qr = new QRCodeStyling({
  width: 280,
  height: 280,
  type: "svg",
  data: "8989080",
  image: img,
  dotsOptions: {
    color: "#846db6",
    type: "classy-rounded"
  },
  cornersSquareOptions: {
    type: "extra-rounded",
    color: "#4f21da"
  },
  cornersDotOptions: {
    type: "dot",
    color: "#c4b2f1"
  },
  backgroundOptions: {
    color: "transparent"
  },
  imageOptions: {
    crossOrigin: "anonymous",
    margin: 12,
    imageSize: 0.34,
    hideBackgroundDots: true
  }
});

qr.append(QRCode);