const ctx1 = document.getElementById("chart");
const ctx2 = document.getElementById('project-details');

new Chart(ctx1, {
  type: "doughnut",
  data: {
    labels: ["Gas Fees", "Staking Rewards"],
    datasets: [{
      data: [40, 35],
      backgroundColor: ["#49f2c2", "#2f9f7a"],
      borderWidth: 0,
      cutout: "70%"
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    }
  }
});

new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['UX UI', 'Front End', 'Back End', 'Designer', 'Analysis'],
    datasets: [{
      label: 'Sales',
      data: [12, 19, 8, 15, 10],
      backgroundColor: [
        'rgba(255, 99, 132, 0.7)',
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)'
      ],
      borderWidth: 1,
      borderRadius: 8
    }]
  },
  options: {
    indexAxis: 'y',
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        beginAtZero: true,
        ticks: {
          color: '#fbf9ff'
        },
        grid: {
          color: 'rgba(255,255,255,0.08)'
        }
      },
      y: {
        ticks: {
          color: '#fbf9ff'
        },
        grid: {
          display: false
        }
      }
    },
    plugins: {
      legend: {
        labels: {
          color: '#fbf9ff'
        }
      }
    }
  }
});