var ctx = document.getElementById('graficoods14').getContext('2d');
var graficoods141 = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015', '2016', '2017', '2018', '2019', '2020','2021','2022','2023'],
    datasets: [{

        label: 'Proporção da área das unidades de conservação marinhas em relação à área marinha brasileira (%)',
        data: [0.90,1.00,1.00,1.10,1.10,1.10,1.10,1.10,1.40,1.50,1.50,1.50,1.50,1.50,1.50,1.50,1.60,1.60,26.30,26.30,26.30,26.30,26.30,26.30], 
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