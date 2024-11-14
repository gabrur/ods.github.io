var ctx = document.getElementById('graficoods8').getContext('2d');
var graficoods81 = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015', '2016', '2017', '2018', '2019', '2020','2021','2022','2023'],
    datasets: [{

        label: 'Taxa de crescimento real do PIB per capita',
        data: [2.70,0.00,1.70,-0.10,4.50,2.00,2.80,5.00,4.00,-1.10,6.50,3.10,1.00,2.10,-0.30,-4.40,-4.10,0.50,1.00,0.40,-4.00,4.00,2.30,2.20], 
        borderColor: 'rgba(75, 192, 192, 1)',
        fill: false
    }]
},
options: {
    scales: {
        y: {
            beginAtZero: true,
            min: -10.0,
            max: 10.0,
            ticks: {
            stepSize: 2.0
            }
        },
        x: {
        }
    },
    plugins: {
        
    }
}
});