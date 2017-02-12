

function drawRadar(array) {

	var canvas = document.getElementById("radarChart");
	var ctx = canvas.getContext("2d");


var results = [];
for(var i =0 ; i <array[1].length ; i++){
 results[i] = array[1][i];
 document.getElementById("test").innerHTML = i;
}




	var data = {
	    labels: [ "MC", "TC", "SPE", "HW", "Bs", "Ks", "Ac", "DIL"],
	    datasets: [
	        {
	            label: "Detailed scores about this student",
	            backgroundColor: "rgba(179,181,198,0.2)",
	            borderColor: "rgba(179,181,198,1)",
	            pointBackgroundColor: "rgba(179,181,198,1)",
	            pointBorderColor: "#fff",
	            pointHoverBackgroundColor: "#fff",
	            pointHoverBorderColor: "rgba(179,181,198,1)",
	            data: [ results[0], results[1], results[2],results[3],results[4],results[5],results[6],results[7]]
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
	})};