$(document).ready(function () {
	addColor();
	setHeight();
	addHighestColor();
	$('th').click(function () {
		sortBy($(this).attr('id'));
	})
});

function sortBy(id) {
	if (id == "R" || id == "Flag" || id == "Name") {
		return;
	}
	var theadElements = $('thead').children().children();
	// theadElements is an array of <th> elements

	var i;
	for (i = 0; i<theadElements.length; i++) {
		if (id == theadElements[i].attributes.id.textContent) {
			break;
		}
	}
	$($('table.overall')
	.children()[1])
	.html($($('table.overall')
	.children()[1])
	.children()
	.sort(function(a, b){
		if($('tr.head').hasClass('asc')) {
			return $(a).children()[i].innerHTML < $(b).children()[i].innerHTML ? 1 : -1;
		} 
		else {
			return $(a).children()[i].innerHTML > $(b).children()[i].innerHTML ? 1 : -1;
		}
	}));
	if($('tr.head').hasClass('asc')) {
		$('tr.head').addClass('desc').removeClass('asc');
	} else {
		$('tr.head').addClass('asc').removeClass('desc');
	}
}

function addColor() {
	var tr = $($('table.overall').children()[1]).children();
	var sum = new Array();

	for(var i = 0;i < tr.length; i++) {
		sum[i] = $(tr[i]).children()[11].innerHTML;
	}

	var max = 0; 
	var secondMax = 0; 
	var thirdMax = 0; 
	var min = sum[0];

	for(var i = 0;i < sum.length; i++) {
		if(sum[i] >= max) {
			max = sum[i];
		}
	}

	for(var i = 0;i < sum.length; i++) {
		if(sum[i] >= secondMax && sum[i] < max) {
			secondMax = sum[i];
		}
	}

	for(var i = 0;i < sum.length; i++) {
		if(sum[i] >= thirdMax && sum[i] < secondMax) {
			thirdMax = sum[i];
		}
	}

	for(var i = 0;i < sum.length; i++) {
		if(sum[i] <= min) {
			min = sum[i];
		}
	}

	for(var i = 0;i < sum.length; i++) {
		if($(tr[i]).children()[11].innerHTML == max) {
			$(tr[i]).css("background-color", "gold");
		}
		if($(tr[i]).children()[11].innerHTML == secondMax) {
			$(tr[i]).css("background-color", "silver");
		}
		if($(tr[i]).children()[11].innerHTML == thirdMax) {
			$(tr[i]).css("background-color", "rgb(203, 126, 50)");
		}
		if($(tr[i]).children()[11].innerHTML == min) {
			$(tr[i]).css("background-color", "pink");
		}
		
	}
}

function setHeight() {
	var tr = $($('table.overall').children()[1]).children();
	var sum = new Array();

	for(var i = 0;i < tr.length; i++) {
		sum[i] = $(tr[i]).children()[11].innerHTML;
	}

	for(var i = 1;i < sum.length; i++) {
		var space = (sum[i-1] - sum[i]) * 31 + $(tr[i]).height();
		$(tr[i]).css("height", space);
	}
}

function addHighestColor() {
	var tr = $($('table.overall').children()[1]).children();
	var property = new Array();
	var max = new Array();
	var cols = 9;

	for(var j = 0; j < cols; j++) {
		for(var i = 0; i < tr.length; i++) {
			property[i] = $(tr[i]).children()[j+3].innerHTML;
		}

		max[j] = 0;
		for(var i = 0; i < tr.length; i++) {
			if(property[i] >= max[j]) {
				max[j] = property[i];
			}
		}
	}
	
	for(var i = 0; i < tr.length; i++) {
		for(var j = 0;j < cols; j++) {
			if($(tr[i]).children()[j+3].innerHTML == max[j]) {
				$($(tr[i]).children()[j+3]).css("background-color", "orange");
			}
		}
	}

}