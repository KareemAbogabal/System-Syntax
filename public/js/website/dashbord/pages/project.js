const canvas = document.getElementById('projectChart');
const ctx = canvas.getContext('2d');

const gradient = ctx.createLinearGradient(0, 0, 0, 360);
gradient.addColorStop(0, 'rgba(143, 91, 255, 0.55)');
gradient.addColorStop(0.5, 'rgba(181, 140, 255, 0.18)');
gradient.addColorStop(1, 'rgba(143, 91, 255, 0)');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
    datasets: [{
      label: 'Progress',
      data: [12, 24, 38, 55, 66, 79, 87],
      fill: true,
      backgroundColor: gradient,
      borderColor: '#b58cff',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointBorderColor: '#8f5bff',
      pointHoverBackgroundColor: '#ffffff',
      pointHoverBorderColor: '#b58cff',
      pointRadius: 4,
      pointHoverRadius: 6,
      tension: 0.38
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    animation: {
      duration: 1300,
      easing: 'easeOutQuart'
    },
    plugins: {
      legend: {
        display: false
      },
      tooltip: {
        backgroundColor: 'rgba(5, 4, 24, 0.95)',
        titleColor: '#fff',
        bodyColor: '#eee8ff',
        borderColor: 'rgba(181, 140, 255, 0.35)',
        borderWidth: 1,
        displayColors: false,
        padding: 14,
        callbacks: {
          label: (ctx) => ` Progress: ${ctx.parsed.y}%`
        }
      }
    },
    interaction: {
      mode: 'index',
      intersect: false
    },
    scales: {
      x: {
        grid: {
          display: false
        },
        ticks: {
          color: '#d8d0f2'
        },
        border: {
          color: 'rgba(255,255,255,0.08)'
        }
      },
      y: {
        min: 0,
        max: 100,
        ticks: {
          stepSize: 20,
          color: '#d8d0f2',
          callback: (v) => v + '%'
        },
        grid: {
          color: 'rgba(255,255,255,0.08)'
        },
        border: {
          color: 'rgba(255,255,255,0.08)'
        }
      }
    }
  }
});