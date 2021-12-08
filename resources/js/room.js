var Chart = require('chart.js');

Chart.defaults.global.defaultFontColor = 'rgba(255, 255, 255, 1)';
Chart.defaults.borderColor = 'rgba(255, 255, 255, 1)';
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['09h00', '09h30', '10h00', '10h30', '11h00', '11h30', '12h00', '12h30', '13h00', '13h30', '14h00', '14h30', '15h00', '15h30', '16h00', '16h30'],
        datasets: [{
            label: 'Nombre de visiteurs',
            barPercentage: 1,
            categoryPercentage: 0.5,
            data: entries,
            backgroundColor: 'rgba(255, 255, 255, 0.8)',
            borderColor: 'rgba(255, 255, 255, 1)',
            borderWidth: 2,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                },
                gridLines: {
                    zeroLineColor: 'rgba(255, 255, 255, 1)',
                    color: 'rgba(255, 255, 255, 0.2)'
                }
            }],
            xAxes: [{
                gridLines: {
                    zeroLineColor: 'rgba(255, 255, 255, 1)'
                }
            }]
        },
        responsive:false
    }
});