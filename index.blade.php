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
			<tr>
				<td>11</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/11" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>12</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/12" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>13</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/13" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>14</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/14" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>15</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/15" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>16</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/16" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>17</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/17" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>18</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/18" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>19</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/19" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>20</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/20" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>21</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/21" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>22</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/22" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>23</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/23" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>24</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/24" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>25</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/25" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>26</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/26" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>27</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/27" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>28</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/28" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>29</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/29" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>30</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/30" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>31</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/31" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>32</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/32" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>33</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/33" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>34</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/34" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>35</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/35" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>36</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/36" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>37</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/37" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>38</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/38" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>39</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/39" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>40</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/40" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>41</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/41" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>42</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/42" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>43</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/43" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>44</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/44" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>45</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/45" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>46</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/46" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>47</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/47" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>48</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/48" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>49</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/49" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>50</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/50" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td >0</td>
			</tr>
			<tr>
				<td>51</td>
				<td><img class="flag" src="img/China.png">&nbsp;CHN</td>
				<td class="name"><a href="detail/51" target="_blank"><img class="flag" src="img/kattis.png">&nbsp;Yang Luowen</a></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td >0</td>
				<td class="hidden-xs hidden-sm">0</td>
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