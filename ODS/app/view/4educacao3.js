var ctx = document.getElementById('graficoods4').getContext('2d');
            var graficoods41 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Brasil','Norte','Nordeste','Sudeste','Sul','Centro-Oeste','Rondônia','Acre','Amazonas','Roraima',
                        'Pará','Amapá','Tocantins','Maranhão','Piauí','Ceará','Rio Grande do Norte','Paraíba','Pernambuco',
                        'Alagoas','Sergipe','Bahia','Minas Gerais','Espírito Santo','Rio de Janeiro','São Paulo','Paraná',
                        'Santa Catarina','Rio Grande do Sul','Mato Grosso do Sul','Mato Grosso','Goiás','Distrito Federal' 
                    ],
                    datasets: [
                        {
                            label: 'Percentual de pessoas de 5 anos de idade que frequentam a escola (%) - Homens - 2023',
                            data: [96.9,91.5,97.3,98.3,96.4,97.2,93.6,86.6,89.9,87.0,94.2,70.2,98.7,98.1,99.2,100.0,100.0,94.7,93.6,96.5,97.6,97.6,98.9,95.8,95.7,99.1,98.3,97.9,93.2,97.9,95.9,97.0,98.1],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 13, 
                            maxBarThickness: 20
                        },
                        {
                            label: 'Percentual de pessoas de 5 anos de idade que frequentam a escola (%) - Mulheres - 2023',
                            data: [97.3,93.4,97.9,97.8,97.4,97.1,94.8,90.1,87.8,88.5,96.2,90.9,99.2,98.9,100.0,98.5,98.1,97.3,94.7,94.1,95.8,100.0,96.5,99.1,97.1,98.6,97.9,99.4,95.6,96.9,94.4,98.7,96.2],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 13, 
                            maxBarThickness: 20
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
                            min: 60.0,
                            max: 100.0,
                            ticks: {
                            stepSize: 5.0
                            },
                        }
                    }
                }
            });

            /*-----------------------------------------------2---------------------------------------------*/

            var ctx = document.getElementById('graficoods4.2').getContext('2d');
            var graficoods42 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        '2016','2017','2018','2019','2022','2023'
                    ],
                    datasets: [
                        {
                            label: 'Percentual de pessoas de 5 anos de idade que frequentam a escola (%) - Homens - 2023',
                            data: [93.9,95.7,96.5,96.5,95.9,96.9],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 80, 
                            maxBarThickness: 150, 
                        },
                        {
                            label: 'Percentual de pessoas de 5 anos de idade que frequentam a escola (%) - Mulheres - 2023',
                            data: [94.8,96.8,96.3,97.5,96.0,97.3],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 80, 
                            maxBarThickness: 150, 
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: {
                                maxRotation: 45,
                                minRotation: 45
                            },
                        },
                        y: {
                            beginAtZero: true,
                            min: 60.0,
                            max: 100.0,
                            ticks: {
                            stepSize: 5.0
                            },
                            title: {
                                display: true,
                                text: 'Percentual (%)'
                            }
                        }
                    }
                }
            });