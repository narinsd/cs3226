// <!DOCTYPE html>
// <html>
// <head>
// 	<meta charset="utf-8">
// 	<title>fff</title>
// 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
// 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
// 	<script type="text/javascript" src="radar.js"></script>
// </head>
// <body>
// <canvas id="radarChart" width="400px" height="150px"></canvas>
// </body>
// </html>

$(document).ready(function () {
	drawRadar();
})

function drawRadar() {

	var canvas = document.getElementById("radarChart");
	var ctx = canvas.getContext("2d");

	var data = {
	    labels: ["Sum", "MC", "TC", "SPE", "HW", "Bs", "Ks", "Ac", "DIL"],
	    datasets: [
	        {
	            label: "Detailed scores about this student",
	            backgroundColor: "rgba(179,181,198,0.2)",
	            borderColor: "rgba(179,181,198,1)",
	            pointBackgroundColor: "rgba(179,181,198,1)",
	            pointBorderColor: "#fff",
	            pointHoverBackgroundColor: "#fff",
	            pointHoverBorderColor: "rgba(179,181,198,1)",
	            data: [65, 59, 90, 81, 56, 55, 40]
	            // Here is just sample data, please insert the data 
	        }
	    ]
	};

	new Chart(ctx, {
	    type: "radar",
	    data: data,
	    options: {
	            scale: {
	                reverse: false,
	                ticks: {
	                    beginAtZero: true
	                }
	            }
	    }
	});
}

