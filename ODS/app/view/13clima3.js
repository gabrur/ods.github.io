var ctx = document.getElementById('graficoods13').getContext('2d');
var graficoods131 = new Chart(ctx, {
type: 'line',
data: {
    labels: ['1990','1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015', '2016', '2017', '2018', '2019', '2020'], 

    datasets: [{
        label: 'Total (GT CO2 eq)',
        data: [1513051.0,1350780.0,1473045.0,1524658.0,1520309.0,2658961.0,1933596.0,1628555.0,1906803.0,1876171.0,1953938.0,1920289.0,2145126.0,3250045.0,3480996.0,2450349.0,2090271.0,1748067.0,1884052.0,1231880.0,1228189.0,1330959.0,1214649.0,1465502.0,1354189.0,1461634.0,1473392.0,1363035.0,1368709.0,1602462.0,1675760.0], 
        borderColor: 'rgb(46, 153, 46, 1)', /* 1 */
        fill: false
    },

    {
        label: 'Processos industriais e uso de produtos (IPPU) (GT CO2 eq)',
        data: [56921.0,61998.0,60243.0,63208.0,63215.0,68016.0,67390.0,70452.0,75024.0,74377.0,78418.0,74913.0,79568.0,80372.0,84361.0,84020.0,84674.0,88748.0,87050.0,77207.0,87101.0,93877.0,95207.0,96795.0,94491.0,95421.0,93701.0,98161.0,96575.0,101463.0,101936.0], 
        borderColor: 'rgb(54, 162, 235, 1)', /* 2 */
        fill: false
    },

    {
        label: 'Energia (GT CO2 eq)',
        data: [192810.0,196376.0,201530.0,206003.0,214844.0,230983.0,248211.0,264336.0,271850.0,281510.0,288155.0,296284.0,294964.0,287747.0,303661.0,313395.0,318098.0,331373.0,350867.0,338929.0,373557.0,387916.0,420906.0,452351.0,478881.0,454439.0,424732.0,429503.0,406793.0,408343.0,389484.0,], 
        borderColor: 'rgb(153, 102, 255, 1)', /* 3 */
        fill: false
    },

    {
        label: 'Agropecuária (GT CO2 eq)',
        data: [329613.0,338738.0,343988.0,349262.0,356891.0,359471.0,338817.0,346371.0,352108.0,356624.0,370335.0,384276.0,395420.0,422506.0,439101.0,438197.0,438427.0,429053.0,436990.0,442011.0,458343.0,463081.0,462078.0,467437.0,472846.0,476279.0,487170.0,464502.0,464178.0,468371.0,477671.0], 
        borderColor: 'rgb(255, 99, 132, 1)', /* 4 */
        fill: false
    },

    {
        label: 'Uso da Terra, Mudança do Uso da Terra e Florestas (LULUCF) (GT CO2 eq)',
        data: [907513.0,725880.0,838587.0,875358.0,852933.0,1966234.0,1243209.0,910238.0,1169334.0,1123254.0,1174452.0,1119687.0,1328443.0,2410838.0,2604350.0,1563262.0,1195766.0,845416.0,954649.0,317652.0,252164.0,328590.0,178554.0,387359.0,246064.0,372693.0,404497.0,306444.0,334502.0,556818.0,637039.0], 
        borderColor: 'rgb(139, 69, 19, 1)', /* 5 */
        fill: false
    },

    {
        label: 'Resíduos (GT CO2 eq)',
        data: [26194.0,27788.0,28697.0,30827.0,32426.0,34257.0,35969.0,37158.0,38487.0,40406.0,42578.0,45129.0,46731.0,48582.0,49523.0,51475.0,53306.0,53477.0,54496.0,56081.0,57024.0,57495.0,57904.0,61560.0,61907.0,62802.0,63292.0,64425.0,66661.0,67467.0,69630.0],
        borderColor: 'rgb(255, 165, 0, 1)', /* 6 */
        fill: false
    }]
},
options: {
    scales: {
        y: {
            beginAtZero: true,
            min: 0.0,
            max: 4000000.0,
            ticks: {
                stepSize: 500000.0
            }
        },
    },
    plugins: {
        
    }
}
});