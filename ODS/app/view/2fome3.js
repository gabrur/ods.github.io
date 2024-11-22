var ctx = document.getElementById('graficoods2').getContext('2d');
            var graficoods21 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Com segurança alimentar',
                        'Com insegurança alimentar leve',
                        'Com insegurança alimentar moderada',
                        'Com insegurança alimentar grave'
                    ],
                    datasets: [
                        {
                            label: 'Domicílios particulares - 2013',
                            data: [77.4, 14.8, 4.6, 3.2],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Domicílios particulares - 2018',
                            data: [63.3, 24.0, 8.1, 4.6],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Domicílios particulares - 2023',
                            data: [72.4, 18.2, 5.3, 4.1],
                            backgroundColor: 'rgba(153, 102, 255, 1)', 
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
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
                            max: 100.0,
                            ticks: {
                            stepSize: 20.0
                            }   
                        }
                    }
                }
            });