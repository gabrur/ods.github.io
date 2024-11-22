var ctx = document.getElementById('graficoods10').getContext('2d');
            var graficoods101 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        '2012','2013','2014','2015', '2016', '2017', '2018', '2019', '2020','2021','2022'
                    ],
                    datasets: [
                        {
                            label: 'Percentual de pessoas vivendo com abaixo de 50% do rendimento mediano mensal real domiciliar per capita - Brasil',
                            data: [22.8,22.5,22.2,22.6,23.1,23.4,23.8,24.4,21.6,23.2,21.7],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 44, 
                            maxBarThickness: 100
                        },
                        {
                            label: 'Percentual de pessoas vivendo com abaixo de 50% do rendimento mediano mensal real domiciliar per capita - Brasil',
                            data: [23.4,23.3,22.8,22.9,23.7,23.9,24.3,24.9,22.7,24.8,22.8],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 44, 
                            maxBarThickness: 100
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                        },
                        y: {
                            beginAtZero: true,
                            min: 0.0,
                            max: 50.0,
                            ticks: {
                            stepSize: 5.0
                            },
                        }
                    }
                }
            });


/*--------------------------------------------------2------------------------------------------------------------*/

var ctx = document.getElementById('graficoods10.2').getContext('2d');
            var graficoods102 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Até 9 anos','10 a 19 anos','20 a 29 anos','30 a 39 anos','40 a 49 anos','50 a 59 anos','60 a 69 anos','70 a 79 anos','80 anos ou mais'
                    ],
                    datasets: [
                        {
                            label: 'Percentual de pessoas vivendo com abaixo de 50% do rendimento mediano mensal real domiciliar per capita - 2022 - Brasil',
                            data: [37.2,34.9,21.4,20.8,19.0,15.7,9.5,5.1,5.5],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 110, 
                            maxBarThickness: 140
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                        },
                        y: {
                            beginAtZero: true,
                            min: 0.0,
                            max: 50.0,
                            ticks: {
                            stepSize: 5.0
                            },
                        }
                    }
                }
            });
