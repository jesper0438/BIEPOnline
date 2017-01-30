var pdata = [
 {
     value: 500,
     color:"#F7464A",
     highlight: "#FF5A5E",
     label: "Leerlingen"
 },
 {
     value: 50,
    color: "#46BFBD",
     highlight: "#5AD3D1",
     label: "Boeken"
 },
 {
     value: 100,
     color: "#FDB45C",
     highlight: "#FFC870",
     label: "Uitgeleend"
 }
]
var charts = document.getElementById("charts").getContext("2d");
new Chart(charts).Pie(pdata, { responsive: true});

var lineChartDatat = {
    labels : ["Januari","Februari","Maart","April","Mei","Juni","Juli"],
    datasets : [
        {
            label: "Eerste dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(6, 197, 172, 1)",
            data : [65,59,80,81,56,55,40]
        },
        {
            label: "Tweede dataset",
             fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(244, 204, 11, 1)",
            data : [28,48,40,19,86,27,90]
        }
    ]

}


    var clinet = document.getElementById("clinet").getContext("2d");
    new Chart(clinet).Line(lineChartDatat, {
        responsive: true
    });
