var ctx = document.getElementById('graficoods6').getContext('2d');
            var graficoods61 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Rondônia','Acre','Amazonas','Roraima','Pará','Amapá','Tocantins','Maranhão','Piauí',
                        'Ceará','Rio Grande do Norte','Paraíba','Pernambuco','Alagoas','Sergipe','Bahia','Minas Gerais',
                        'Espírito Santo','Rio de Janeiro','São Paulo','Paraná','Santa Catarina','Rio Grande do Sul',
                        'Mato Grosso do Sul','Mato Grosso','Goiás','Distrito Federal' 
                    ],
                    datasets: [
                        {
                            label: 'Percentual da população que utiliza serviços de água potável gerenciados de forma segura - 2022',
                            data: [98.8,89.7,91.4,96.4,91.4,96.7,97.8,93.2,94.6,94.6,94.9,88.0,91.1,91.1,93.1,95.4,99.5,99.4,99.0,99.6,99.3,99.6,98.9,99.3,99.2,99.4,99.3],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 24, 
                            maxBarThickness: 30
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
                            }
                        },
                        y: {
                            beginAtZero: true,
                            min: 70.0,
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

/*-------------------------------------------------------------2------------------------------------------------------*/


            var ctx = document.getElementById('graficoods6.2').getContext('2d');
            var graficoods62 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Total','0 a 14 anos','15 a 29 anos','30 a 59 anos ','60 anos ou mais'
                    ],
                    datasets: [
                        {
                            label: 'Percentual da população que utiliza serviços de água potável gerenciados de forma segura - 2022',
                            data: [97.2,96.2,96.8,97.6,97.9],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 190, 
                            maxBarThickness: 200
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
                            }
                        },
                        y: {
                            beginAtZero: true,
                            min: 90.0,
                            max: 100.0,
                            ticks: {
                            stepSize: 1.0
                            },
                            title: {
                                display: true,
                                text: 'Percentual (%)'
                            }
                        }
                    }
                }
            });