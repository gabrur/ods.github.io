var ctx = document.getElementById('graficoods1').getContext('2d');
            var graficoods11 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Brasil', 'Norte', 'Nordeste', 'Sudeste', 'Sul', 'Centro-Oeste'],
                    datasets: [
                        {
                            label: 'Proporção da população abaixo da linha de pobreza internacional - 2012',
                            data: [6.6, 11.2, 14.2, 3.0, 2.1, 2.3],
                            backgroundColor: 'rgba(54, 162, 235, 1)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população abaixo da linha de pobreza internacional - 2021',
                            data: [9.0, 13.9, 17.6, 5.4, 3.2, 3.8],
                            backgroundColor: 'rgba(75, 192, 192, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população abaixo da linha de pobreza internacional - 2022',
                            data: [5.9, 8.0, 11.8, 3.3, 2.5, 2.8],
                            backgroundColor: 'rgba(201, 203, 207, 1)', 
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 20,
                        }
                    }
                }
            });

               /*-----------------------------------2------------------------------------------*/

            var ctx = document.getElementById('graficoods1.2').getContext('2d');
            var graficoods12 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Brasil', 'Norte', 'Nordeste', 'Sudeste', 'Sul', 'Centro-Oeste'],
                    datasets: [
                        {
                            label: 'Proporção da população ocupada de 14 anos ou mais de idade abaixo da linha de pobreza internacional - 2012',
                            data: [2.7, 6.3, 7.7, 0.6, 0.5, 0.5],
                            backgroundColor: 'rgba(54, 162, 235, 1)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população ocupada de 14 anos ou mais de idade abaixo da linha de pobreza internacional - 2021',
                            data: [2.3, 6.0, 6.0, 0.8, 0.4, 0.6],
                            backgroundColor: 'rgba(75, 192, 192, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população ocupada de 14 anos ou mais de idade abaixo da linha de pobreza internacional - 2022',
                            data: [1.3, 3.0, 3.3, 0.5, 0.3, 0.3],
                            backgroundColor: 'rgba(201, 203, 207, 1)', 
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    plugins: {
                    },
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 20,
                        }
                    }
                }
            });


            /*-------------------------------------3----------------------------------------*/

            var ctx = document.getElementById('graficoods1.3').getContext('2d');
            var graficoods13 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Urbana', 'Rural'],
                    datasets: [
                        {
                            label: 'Proporção da população abaixo da linha de pobreza internacional - 2012',
                            data: [4.4, 18.8],
                            backgroundColor: 'rgba(54, 162, 235, 1)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população abaixo da linha de pobreza internacional - 2021',
                            data: [7.2, 19.6],
                            backgroundColor: 'rgba(75, 192, 192, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população abaixo da linha de pobreza internacional - 2022',
                            data: [4.6, 13.8],
                            backgroundColor: 'rgba(201, 203, 207, 1)', 
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    plugins: {
                    },
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 20,
                            title: {
                                display: true,
                                text: 'Percentual (%)'
                            }
                        }
                    }
                }
            });


            /*----------------------------------4-------------------------------------------*/


            var ctx = document.getElementById('graficoods1.4').getContext('2d');
            var graficoods14 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Urbana', 'Rural'],
                    datasets: [
                        {
                            label: 'Proporção da população ocupada de 14 anos ou mais de idade abaixo da linha de pobreza internacional - 2012',
                            data: [1.3, 12.1],
                            backgroundColor: 'rgba(54, 162, 235, 1)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população ocupada de 14 anos ou mais de idade abaixo da linha de pobreza internacional - 2021',
                            data: [1.4, 8.4],
                            backgroundColor: 'rgba(75, 192, 192, 1)', 
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Proporção da população ocupada de 14 anos ou mais de idade abaixo da linha de pobreza internacional - 2022',
                            data: [0.8, 5.4],
                            backgroundColor: 'rgba(201, 203, 207, 1)', 
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    plugins: {
                    },
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 20
                        }
                    }
                }
            });

