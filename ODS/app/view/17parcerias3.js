var ctx = document.getElementById('graficoods17').getContext('2d');
var graficoods171 = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2010','2011','2012','2013','2014','2015', '2016', '2017', '2018', '2019', '2020','2021','2022','2023'],
    datasets: [{

        label: 'Receitas do governo em porcentagem do PIB',
        data: [25.9,26.0,26.4,25.4,24.0,25.8,26.2,24.4,25.3,25.6,22.6,25.6,26.9,25.6], 
        borderColor: 'rgba(75, 192, 192, 1)',
        fill: false
    }]
},
options: {
    scales: {
        y: {
            beginAtZero: true,
            min: 0.0,
            max: 100.0,
            ticks: {
            stepSize: 10.0
            }
        },
        x: {
        }
    },
    plugins: {
        
    }
}
});