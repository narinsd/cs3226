@extends('template') <!-- use template from previous slide -->
@section('main') <!-- define a section called main -->

<p>This page will show the details of student with this {{$array[0]}} </p> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../js/radar.js"></script>



<table class="container">
<tr>
	<td class="information">
		<h4 class="Zhang"><b>Zhang Wenxuan</b> in CS3233 S2 AY 2016/17</h4>
		<p class="Zhang">Kattis account: <a class="name" href=""><b>zhangwenxuan</b></a></p>
		<p class="Zhang"><b>SPE</b>(ed) component: <b>0 + 0 = 0</b><br>
			<b>DIL</b>(igence) component: <b>1.5 + 0 + 1 + 2 = 4.5</b><br>
			<b>Sum = SPE + DIL = 0 + 4.5 = 4.5</b>
		</p>
	</td>
	<td class="img">
		<img src="../img/China.png">
		<img src="../img/kattis.png">
	</td>
</tr>
</table>
<div class="score">
	<p class="score">Detailed scores: </p>
	<table class="detailedScore">
		<tr class="detailedScore">
			<th>Component</th>
			<th>ID</th>
			<th>01</th>
			<th>CheckID</th>
			<th>MC</th>
			<th>TC</th>
			<th>SPE</th>
			<th>HW</th>
			<th>Bs</th>
			<th>Ks</th>
			<th>Ac</th>
			<th>DIL</th>
			<th>Sum</th>
			<th>11</th>
		</tr>
		<tr class="detailedScore">
			<td>Mini Contests</td>
			<td>{{$array[1][0]}}</td>
			<td>0.0</td>
			<td >{{$array[1][0]}}</td>
			<td >{{$array[1][1]}}</td>
			<td >{{$array[1][2]}}</td>
			<td >{{$array[1][3]}}</td>
			<td >{{$array[1][4]}}</td>
			<td >{{$array[1][5]}}</td>
			<td >{{$array[1][6]}}</td>
			<td >{{$array[1][7]}}</td>
			<td >{{$array[1][8]}}</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="detailedScore">
			<td>Team Contests</td>
			<td>{{$array[1][1]}}</td>
			<td>0.0</td>
			<td >{{$array[1][0]}}</td>
			<td >{{$array[1][1]}}</td>
			<td >{{$array[1][2]}}</td>
			<td >{{$array[1][3]}}</td>
			<td >{{$array[1][4]}}</td>
			<td >{{$array[1][5]}}</td>
			<td >{{$array[1][6]}}</td>
			<td >{{$array[1][7]}}</td>
			<td >{{$array[1][8]}}</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="detailedScore">
			<td>Homework</td>
			<td>{{$array[1][2]}}</td>
			<td>0.0</td>
			<td >{{$array[1][0]}}</td>
			<td >{{$array[1][1]}}</td>
			<td >{{$array[1][2]}}</td>
			<td >{{$array[1][3]}}</td>
			<td >{{$array[1][4]}}</td>
			<td >{{$array[1][5]}}</td>
			<td >{{$array[1][6]}}</td>
			<td >{{$array[1][7]}}</td>
			<td >{{$array[1][8]}}</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="detailedScore">
			<td>Problem Bs</td>
			<td>{{$array[1][3]}}</td>
			<td>0.0</td>
			<td >{{$array[1][0]}}</td>
			<td >{{$array[1][1]}}</td>
			<td >{{$array[1][2]}}</td>
			<td >{{$array[1][3]}}</td>
			<td >{{$array[1][4]}}</td>
			<td >{{$array[1][5]}}</td>
			<td >{{$array[1][6]}}</td>
			<td >{{$array[1][7]}}</td>
			<td >{{$array[1][8]}}</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="detailedScore">
			<td>Kattis Sets</td>
			<td>{{$array[1][4]}}</td>
			<td>0.0</td>
			<td >{{$array[1][0]}}</td>
			<td >{{$array[1][1]}}</td>
			<td >{{$array[1][2]}}</td>
			<td >{{$array[1][3]}}</td>
			<td >{{$array[1][4]}}</td>
			<td >{{$array[1][5]}}</td>
			<td >{{$array[1][6]}}</td>
			<td >{{$array[1][7]}}</td>
			<td >{{$array[1][8]}}</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Achievements</td>
			<td>{{$array[1][5]}}</td>
			<td>0.0</td>
			<td >{{$array[1][0]}}</td>
			<td >{{$array[1][1]}}</td>
			<td >{{$array[1][2]}}</td>
			<td >{{$array[1][3]}}</td>
			<td >{{$array[1][4]}}</td>
			<td >{{$array[1][5]}}</td>
			<td >{{$array[1][6]}}</td>
			<td >{{$array[1][7]}}</td>
			<td >{{$array[1][8]}}</td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<p class="score detail">Achievement details:</p>
	<ol>
		<li>Let it begins</li>
		<li>Quick starter</li>
	</ol>
	<p class="score">Specific (public) comments about this student:</p>
</div>

<canvas id="radarChart" width="400px" height="150px"></canvas>
<p id="test"></p>

<form action='../edit'>
<button type="submit" class="btn btn-primary" href='edit'>Edit</button>
</form>

<button type="submit" class="btn btn-primary" onclick="doFunction();">Delete</button>

</form>

<script>
$(document).ready(function () {
	var array = <?php echo json_encode($array); ?>;
	drawRadar( array  );
})

function doFunction(){
	var r = window.confirm("Are you sure you want to delete student?");
	if (r == true) {
    window.location.href = "../../edit";
} else {
    
}
}


</script>



@stop
