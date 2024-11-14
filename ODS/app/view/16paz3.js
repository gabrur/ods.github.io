var ctx = document.getElementById('graficoods16').getContext('2d');
var graficoods161 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Norte','Nordeste','Sudeste','Sul','Centro-Oeste'
        ],
        datasets: [
            {
                label: 'Proporção da população de 15 anos ou mais de idade que se sente segura quando caminha na área onde vive durante a noite - 2021',
                data: [39.6,45.6,46.9,61.9,49.6],
                backgroundColor: 'rgb(54, 162, 235, 1)', 
                borderColor: 'rgb(54, 162, 200, 1)',
                borderWidth: 1,
                barThickness: 160, 
                maxBarThickness: 180 
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