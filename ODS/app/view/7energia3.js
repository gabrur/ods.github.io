var ctx = document.getElementById('graficoods7').getContext('2d');
            var graficoods71 = new Chart(ctx, {
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
                            label: 'Percentual da moradores em domicílios com energia elétrica - 2022',
                            data: [99.7,97.8,99.0,99.5,99.0,99.8,99.6,99.7,99.5,99.6,99.9,99.8,99.7,99.8,99.6,99.5,99.9,100.0,99.9,100.0,99.9,99.9,100.0,99.9,99.8,100.0,110.0],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 28, 
                            maxBarThickness: 40
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
                            }
                        }
                    }
                }
            });