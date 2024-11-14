var ctx = document.getElementById('graficoods11').getContext('2d');
            var graficoods111 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Rondônia','Acre','Amazonas','Roraima','Pará','Amapá','Tocantins','Maranhão','Piauí',
                        'Ceará','Rio Grande do Norte','Paraíba','Pernambuco','Alagoas','Sergipe','Bahia','Minas Gerais',
                        'Espírito Santo','Rio de Janeiro','São Paulo','Paraná','Santa Catarina','Rio Grande do Sul',
                        'Mato Grosso do Sul','Mato Grosso','Goiás','Distrito Federal','Brasil' 
                    ],
                    datasets: [
                        {
                            label: 'UF - 2010',
                            data: [86.3,77.3,72.0,59.0,85.2,88.5,71.1,77.1,68.5,59.3,54.7,49.6,54.0,71.7,48.4,51.0,23.4,31.1,41.1,23.7,35.6,29.5,31.1,63.3,66.4,56.5,23.9],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 30, 
                            maxBarThickness: 40
                        },
                        {
                            label: 'Média Nacional - 2010',
                            data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,41.4],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 30, 
                            maxBarThickness: 40
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
                            max: 90.0,
                            ticks: {
                            stepSize: 10.0
                            },
                        }
                    }
                }
            });