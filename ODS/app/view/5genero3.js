var ctx = document.getElementById('graficoods5').getContext('2d');
var graficoods51 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Urbana','Rural'
        ],
        datasets: [
            {
                label: 'Homens - Percentual de pessoas de 10 anos ou mais de idade que tinham telefone móvel celular para uso pessoal - 2022 - Brasil',
                data: [87.8, 67.7],
                backgroundColor: 'rgb(46, 153, 46, 1)', 
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                barThickness: 140, 
                maxBarThickness: 150 
            },
            {
                label: 'Mulheres - Percentual de pessoas de 10 anos ou mais de idade que tinham telefone móvel celular para uso pessoal - 2022 - Brasil',
                data: [89.8,    75.0],
                backgroundColor: 'rgba(54, 162, 235, 1)', 
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                barThickness: 140, 
                maxBarThickness: 150
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
                min: 40.0,
                max: 100.0,
                ticks: {
                stepSize: 10.0
                },
                title: {
                    display: true,
                    text: 'Percentual (%)'
                }
            }
        }
    }
});
/*-----------------------------------------------2---------------------------------------------*/


 var ctx = document.getElementById('graficoods5.2').getContext('2d');
    var graficoods52 = new Chart(ctx, {
        type: 'bar',
            data: {
                labels: [
                    'Branca', 'Preta ou parda'
                ],
                datasets: [
                    {
                        label: 'Homens - Percentual de pessoas de 10 anos ou mais de idade que tinham telefone móvel celular para uso pessoal - 2022 - Brasil',
                        data: [88.5,82.4],
                        backgroundColor: 'rgb(46, 153, 46, 1)', 
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        barThickness: 140, 
                        maxBarThickness: 150
                    },
                    {
                        label: 'Mulheres - Percentual de pessoas de 10 anos ou mais de idade que tinham telefone móvel celular para uso pessoal - 2022 - Brasil',
                        data: [90.3,86.2],
                        backgroundColor: 'rgba(54, 162, 235, 1)', 
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        barThickness: 140, 
                        maxBarThickness: 150 
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
                            min: 40.0,
                            max: 100.0,
                            ticks: {
                            stepSize: 10.0
                            },
                            title: {
                                display: true,
                                text: 'Percentual (%)'
                            }
                        }
                    }
                }
            });

/*-----------------------------------------------3---------------------------------------------*/

var ctx = document.getElementById('graficoods5.3').getContext('2d');
    var graficoods53 = new Chart(ctx, {
        type: 'bar',
            data: {
                labels: [
                    '10 a 29 anos', '30 a 49 anos','50 a 59 anos','60 anos ou mais'
                ],
                datasets: [
                    {
                        label: 'Homens - Percentual de pessoas de 10 anos ou mais de idade que tinham telefone móvel celular para uso pessoal - 2022 - Brasil',
                        data: [82.7,92.4,87.1,72.0],
                        backgroundColor: 'rgb(46, 153, 46, 1)', 
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        barThickness: 120, 
                        maxBarThickness: 130
                    },
                    {
                        label: 'Mulheres - Percentual de pessoas de 10 anos ou mais de idade que tinham telefone móvel celular para uso pessoal - 2022 - Brasil',
                        data: [85.9,95.6,91.9,75.1],
                        backgroundColor: 'rgba(54, 162, 235, 1)', 
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        barThickness: 120, 
                        maxBarThickness: 130 
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
                            min: 40.0,
                            max: 100.0,
                            ticks: {
                            stepSize: 10.0
                            },
                            title: {
                                display: true,
                                text: 'Percentual (%)'
                            }
                        }
                    }
                }
            });