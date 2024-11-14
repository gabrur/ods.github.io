var ctx = document.getElementById('graficoods12').getContext('2d');
var graficoods121 = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021'], 

    datasets: [{
        label: 'Taxa de massa recuperada estimada de resíduos sólidos recicláveis secos e orgânicos - Brasil',
        data: [2,1.8,2,1.9,2,2,2.32], 
        borderColor: 'rgb(46, 153, 46, 1)', /* 1 */
        fill: false
    },

    {
        label: 'Taxa de massa recuperada estimada de resíduos sólidos recicláveis secos e orgânicos - Norte',
        data: [1.8,0.6,0.7,0.8,1,0.6,1.75], 
        borderColor: 'rgb(54, 162, 235, 1)', /* 2 */
        fill: false
    },

    {
        label: 'Taxa de massa recuperada estimada de resíduos sólidos recicláveis secos e orgânicos - Nordeste',
        data: [0.7,0.7,0.8,1,0.8,0.7,0.9], 
        borderColor: 'rgb(153, 102, 255, 1)', /* 3 */
        fill: false
    },

    {
        label: 'Taxa de massa recuperada estimada de resíduos sólidos recicláveis secos e orgânicos - Sudeste',
        data: [1.7,1.5,2.3,1.7,1.7,1.9,1.83], 
        borderColor: 'rgb(255, 99, 132, 1)', /* 4 */
        fill: false
    },

    {
        label: 'Taxa de massa recuperada estimada de resíduos sólidos recicláveis secos e orgânicos - Sul',
        data: [5.9,4.8,4.4,4.5,4.3,6,5.07], 
        borderColor: 'rgb(139, 69, 19, 1)', /* 5 */
        fill: false
    },

    {
        label: 'Taxa de massa recuperada estimada de resíduos sólidos recicláveis secos e orgânicos - Centro-Oeste',
        data: [3.2,4.3,2.6,2.7,5.6,2.9,6.88],
        borderColor: 'rgb(255, 165, 0, 1)', /* 6 */
        fill: false
    }]
},
options: {
    scales: {
        y: {
            beginAtZero: true,
            min: 0.0,
            max: 8.0,
            ticks: {
                stepSize: 1.0
            }
        },
    },
    plugins: {
        
    }
}
});