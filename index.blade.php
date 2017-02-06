@extends('template') <!-- use template from previous slide -->
@section('main') <!-- define a section called main -->
  <!-- html head meta title link script body div table thead tbody th tr td ol ul li footer h3/4/6 img a b p br hr strong
 -->
<!DOCTYPE html>

<body>

<div class="table">
	<table class="overall">
		<thead>
			<div class="row">
  <div class="col-xs-12">
    <table id="ranktable" class="table table-condensed table-hover">
			<tr class="head asc">
				<th id="R">R</th>
				<th id="Flag">Flag</th>
				<th class="hidden-xs hidden-xm" id="Name">Name</th>
				<th class="hidden-xs hidden-xm"id="MC">MC</th>
				<th class="hidden-xs hidden-xm"id="TC">TC</th>
				<th class="hidden-xs hidden-xm"id="SPE">SPE</th>
				<th class="hidden-xs hidden-xm"id="HW">HW</th>
				<th class="hidden-xs hidden-xm"id="Bs">Bs</th>
				<th class="hidden-xs hidden-xm"id="KS">KS</th>
				<th class="hidden-xs hidden-xm"id="Ac">Ac</th>
				<th class="hidden-xs hidden-xm"id="DIL">DIL</th>
				<th class="hidden-xs hidden-xm"id="Sum">Sum</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/1" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Zhang Wenxuan</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">2</td>
				<td class="hidden-xs hidden-xm">4.5</td>
				<td class="hidden-xs hidden-xm">4.5</td>
			</tr>
			<tr>
				<td>2</td>
				<td><img class="flag" src="img/Malaysia.png">&nbsp;MYS</td>
				<td class="name"><a href="detail/2" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Bie Kai Hei</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">2</td>
				<td class="hidden-xs hidden-xm">4.5</td>
				<td class="hidden-xs hidden-xm">4.5</td>
			</tr>
			<tr>
				<td>3</td>
				<td><img class="flag" src="img/India.png">&nbsp;IDN</td>
				<td class="name"><a href="detail/3" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Agata Minninggakan</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr>
				<td>4</td>
				<td><img class="flag" src="img/Singapore.png">&nbsp;SGP</td>
				<td class="name"><a href="index.html/students/4" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Qing Tuan Ng</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr>
				<td>5</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="index.html/students/5" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Zhang Yaohua</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr>
				<td>6</td>
				<td><img class="flag" src="img/India.png">&nbsp;IND</td>
				<td class="name"><a href="index.html/students/6" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Govind Venualan</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr>
				<td>7</td>
				<td><img class="flag" src="img/Singapore.png">&nbsp;SGP</td>
				<td class="name"><a href="index.html/students/7" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Tay Li Jia</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr>
				<td>8</td>
				<td><img class="flag" src="img/Vietnam.png">&nbsp;VNM</td>
				<td class="name"><a href="index.html/students/8" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Dinh Vit Tang</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr>
				<td>9</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="index.html/students/9" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
			<tr class="last">
				<td>10</td>
				<td><img class="flag" src="img/Singapore.png">&nbsp;SGP</td>
				<td class="name"><a href="index.html/students/0" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Lay Min Xian</a></td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1</td>
				<td class="hidden-xs hidden-xm">0</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">1.5</td>
				<td class="hidden-xs hidden-xm">4</td>
				<td class="hidden-xs hidden-xm">4</td>
			</tr>
		</tbody>
	</table>
</div>


</body>

@stop