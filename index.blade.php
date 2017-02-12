@extends('template') <!-- use template from previous slide -->
@section('main') <!-- define a section called main -->
  <!-- html head meta title link script body div table thead tbody th tr td ol ul li footer h3/4/6 img a b p br hr strong
 -->
<!DOCTYPE html>

<body>


<div class="col-xs-12 table">
	<table class="overall table table-condensed table-hover">
		<thead>
			<tr class="head asc">
				<th id="R">R</th>
				<th id="Flag">Flag</th>
				<th id="Name">Name</th>
				<th class="hidden-xs hidden-sm" id="MC">MC</th>
				<th class="hidden-xs hidden-sm"id="TC">TC</th>
				<th id="SPE">SPE</th>
				<th class="hidden-xs hidden-sm" id="HW">HW</th>
				<th class="hidden-xs hidden-sm" id="Bs">Bs</th>
				<th class="hidden-xs hidden-sm" id="KS">KS</th>
				<th class="hidden-xs hidden-sm" id="Ac">Ac</th>
				<th id="DIL">DIL</th>
				<th id="Sum">Sum</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/1" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Zhang Wenxuan</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm ">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm ">1.5</td>
				<td class="hidden-xs hidden-sm ">0</td>
				<td class="hidden-xs hidden-sm ">1</td>
				<td class="hidden-xs hidden-sm ">2</td>
				<td >9.0</td>
				<td >9.0</td>
			</tr>
			<tr>
				<td>2</td>
				<td><img class="flag" src="img/Malaysia.png">&nbsp;MYS</td>
				<td class="name"><a href="detail/2" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Bie Kai Hei</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">2</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">2</td>
				<td >7.0</td>
				<td >7.0</td>
			</tr>
			<tr>
				<td>3</td>
				<td><img class="flag" src="img/India.png">&nbsp;IDN</td>
				<td class="name"><a href="detail/3" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Agata Minninggakan</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >4.5</td>
				<td >4.5</td>
			</tr>
			<tr>
				<td>4</td>
				<td><img class="flag" src="img/Singapore.png">&nbsp;SGP</td>
				<td class="name"><a href="detail/4" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Qing Tuan Ng</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">2.5</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">2</td>
				<td >4.0</td>
				<td >4.0</td>
			</tr>
			<tr>
				<td>5</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/5" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Zhang Yaohua</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td >3.0</td>
				<td >3.0</td>
			</tr>
			<tr>
				<td>6</td>
				<td><img class="flag" src="img/India.png">&nbsp;IND</td>
				<td class="name"><a href="detail/6" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Govind Venualan</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">1.5</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1.5</td>
				<td class="hidden-xs hidden-sm">2</td>
				<td >2.0</td>
				<td >2.0</td>
			</tr>
			<tr>
				<td>7</td>
				<td><img class="flag" src="img/Singapore.png">&nbsp;SGP</td>
				<td class="name"><a href="detail/7" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Tay Li Jia</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">1.5</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">2</td>
				<td >1.5</td>
				<td >1.5</td>
			</tr>
			<tr>
				<td>8</td>
				<td><img class="flag" src="img/Vietnam.png">&nbsp;VNM</td>
				<td class="name"><a href="detail/8" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Dinh Vit Tang</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">1.5</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">2</td>
				<td >1.0</td>
				<td >1.0</td>
			</tr>
			<tr>
				<td>9</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/9" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td class="hidden-xs hidden-sm">1</td>
				<td >0.5</td>
				<td >0.5</td>
			</tr>
			<tr class="last">
				<td>10</td>
				<td><img class="flag" src="img/Singapore.png">&nbsp;SGP</td>
				<td class="name"><a href="detail/10" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Lay Min Xian</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0.5</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
		</tbody>
	</table>
</div>


</body>

@stop