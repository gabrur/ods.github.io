var ctx = document.getElementById('graficoods9').getContext('2d');
            var graficoods91 = new Chart(ctx, {
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
                            label: 'Valor adicionado da indústria de transformação em proporção do PIB-2010',
                            data: [7.2,3.8,25.9,1.4,5.4,2.0,3.1,3.2,4.6,9.8,6.8,8.2,8.6,7.4,5.6,11.0,14.9,9.3,7.0,15.9,15.0,18.9,17.1,8.2,10.3,12.7,1.3],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 18, 
                            maxBarThickness: 30
                        },
                        {
                            label: 'Valor adicionado da indústria de transformação em proporção do PIB-2021',
                            data: [7.7,3.8,23.6,1.0,3.6,1.5,2.4,3.9,4.2,6.5,4.9,7.0,8.3,5.2,3.6,7.8,12.7,6.8,5.6,12.9,13.5,15.7,13.4,9.3,6.8,12.7,1.2],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 18, 
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
                            min: 0.0,
                            max: 30.0,
                            ticks: {
                            stepSize: 5.0
                            },
                        }
                    }
                }
            });


/*--------------------------------------------------2------------------------------------------------------------*/

var ctx = document.getElementById('graficoods9.2').getContext('2d');
            var graficoods92 = new Chart(ctx, {
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
                            label: 'Valor adicionado da indústria de transformação per capita - 2010',
                            data: [1108.0,429.0,4534.0,206.0,585.0,246.0,370.0,228.0,328.0,922.0,776.0,731.0,948.0,640.0,714.0,1216.0,2664.0,2269.0,1972.0,4993.0,3240.0,4658.0,3849.0,1583.0,1913.0,2263.0,738.0],
                            backgroundColor: 'rgb(46, 153, 46, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            barThickness: 18, 
                            maxBarThickness: 30
                        },
                        {
                            label: 'Valor adicionado da indústria de transformação per capita - 2021',
                            data: [1174.0,408.0,4076.0,149.0,395.0,167.0,343.0,308.0,364.0,629.0,545.0,666.0,942.0,474.0,407.0,868.0,2114.0,1538.0,1479.0,3514.0,2819.0,3821.0,3141.0,1981.0,1595.0,2151.0,662.0],
                            backgroundColor: 'rgba(54, 162, 235, 1)', 
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            barThickness: 18, 
                            maxBarThickness: 30
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
                            max: 5000.0,
                            ticks: {
                            stepSize: 500.0
                            },
                        }
                    }
                }
            });