var ctx = document.getElementById('graficoods3').getContext('2d');
var graficoods3 = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'], 

    datasets: [{
        label: 'Proporção de nascimentos assistidos por profissional de saúde qualificado - Brasil',
        data: [98.0, 98.40, 98.20, 98.60, 98.70, 98.80, 98.40, 98.40, 98.20, 98.70], 
        borderColor: 'rgb(46, 153, 46, 1)', /* 1 */
        fill: false
    },

    {
        label: 'Proporção de nascimentos assistidos por profissional de saúde qualificado - Norte',
        data: [94.40, 95.40, 95.10, 95.20, 96.00, 96.90, 96.30, 96.70, 96.70, 97.10], 
        borderColor: 'rgb(54, 162, 235, 1)', /* 2 */
        fill: false
    },

    {
        label: 'Proporção de nascimentos assistidos por profissional de saúde qualificado - Nordeste',
        data: [97.70, 97.90, 97.50, 98.00, 97.90, 98.10, 97.10, 97.10, 96.50, 97.90], 
        borderColor: 'rgb(153, 102, 255, 1)', /* 3 */
        fill: false
    },

    {
        label: 'Proporção de nascimentos assistidos por profissional de saúde qualificado - Sudeste',
        data: [98.70, 99.10, 98.90, 99.40, 99.50, 99.50, 99.40, 99.40, 99.50, 99.50], 
        borderColor: 'rgb(255, 99, 132, 1)', /* 4 */
        fill: false
    },

    {
        label: 'Proporção de nascimentos assistidos por profissional de saúde qualificado - Sul',
        data: [98.60, 99.30 , 99.60, 99.60, 99.60, 99.50, 99.30, 99.50, 99.10 ,99.40], 
        borderColor: 'rgb(139, 69, 19, 1)', /* 5 */
        fill: false
    },

    {
        label: 'Proporção de nascimentos assistidos por profissional de saúde qualificado - Centro-Oeste',
        data: [99.00, 98.90, 98.10, 98.80, 99.20, 99.20, 99.10, 99.00, 99.10, 99.30],
        borderColor: 'rgb(255, 165, 0, 1)', /* 6 */
        fill: false
    }]
},
options: {
    scales: {
        y: {
            beginAtZero: true,
            min: 90.0,
            max: 100.0,
            ticks: {
                stepSize: 1.0
            }
        },
    },
    plugins: {
        
    }
}
});