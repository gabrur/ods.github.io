var ctx = document.getElementById('graficoods15').getContext('2d');
var graficoods151 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Amazônia','Cerrado','Caatinga','Mata Atlântica','Pampa','Pantanal'
        ],
        datasets: [
            {
                label: 'Proporção de sítios importantes para a biodiversidade terrestre e de água doce cobertos por áreas protegidas - 2023',
                data: [59.3,35.9,71.9,56.7,4.5,2.9],
                backgroundColor: 'rgb(46, 153, 46, 1)', 
                borderColor: 'rgba(75, 192, 192, 1)',
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
            },
            y: {
                beginAtZero: true,
                min: 0.0,
                max: 100.0,
                ticks: {
                stepSize: 10.0
                }   
            }
        }
    }
});





var ctx = document.getElementById('graficoods15.2').getContext('2d');
var graficoods152 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Amazônia','Cerrado','Caatinga','Mata Atlântica','Pampa','Pantanal'
        ],
        datasets: [
            {
                label: 'Soma da área de Unidades de Conservação que têm intersecção com as áreas-chave para a biodiversidade (KBAs) - 2023',
                data: [433199.0,43091.0,32022.0,35552.0,820.0,459.0],
                backgroundColor: 'rgb(54, 162, 235, 1)', 
                borderColor: 'rgb(54, 162, 200, 1)',
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
            },
            y: {
                beginAtZero: true,
                min: 0.0,
                max: 400000.0,
                ticks: {
                stepSize: 50000.0
                }   
            }
        }
    }
});




var ctx = document.getElementById('graficoods15.3').getContext('2d');
var graficoods153 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Amazônia','Cerrado','Caatinga','Mata Atlântica','Pampa','Pantanal'
        ],
        datasets: [
            {
                label: 'Soma da área total das áreas-chave para a biodiversidade (KBAs) - 2023',
                data: [730464.0,120135.0,44515.0,62704.0,18041.0,15955.0],
                backgroundColor: 'rgb(153, 102, 255, 1)', 
                borderColor: 'rgb(153, 102, 255, 1)',
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
            },
            y: {
                beginAtZero: true,
                min: 0.0,
                max: 700000.0,
                ticks: {
                stepSize: 100000.0
                }   
            }
        }
    }
});