var rows = $('#ranktable tbody tr').length;
var first = 0, second = 0, third = 0, cell; 
var last = 999999;
var row1 = [];
var row2 = [];
var row3 = []; 
var rowlast = [];
for (var i = 0; i < rows; i++) {
	current = Number($('#ranktable tbody tr:eq(' + i + ') td').eq(12).html());
	if (current <= last) {
		if (current < last) {
			rowlast = [];
			rowlast.push(i);
		}
		else {
			rowlast.push(i);
		}
		last = current;
	}
	if (current >= first) {
		if (current > first) {
			if (first >= second) {
				if (second >= third) {
					third = second;
					row3 = row2;
				}
				second = first;
				row2 = row1;
			}
			row1 = [];
			row1.push(i);
		}
		else {
			row1.push(i);
		}
		first = current;
	}
	else if (current >= second) {
		if (current > second) {
			if (second >= third) {
				third = second;
				row3 = row2;
			}
			row2 = [];
			row2.push(i);
		}
		else {
			row2.push(i);
		}
		second = current;
	}
	else if (current >= third) {
		if (current > third) {
			row3 = [];
			row3.push(i);
		}
		else {
			row3.push(i);
		}
		third = current;
	}
	else {
		continue;
	}
}
for (var x = 0; x < rowlast.length; x++) {
	$('#ranktable tbody tr').eq(rowlast[x]).addClass("pink");
}
for (x = 0; x < row3.length; x++) {
	$('#ranktable tbody tr').eq(row3[x]).addClass("bronze");
}
for (x = 0; x < row2.length; x++) {
	$('#ranktable tbody tr').eq(row2[x]).addClass("silver");
for (x = 0; x < row1.length; x++) {
	$('#ranktable tbody tr').eq(row1[x]).addClass("gold");
	}
}
