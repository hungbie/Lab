var rows = $('#ranktable tbody tr').length;
var cellArr = new Array(8); //store highest
var rowNum = new Array(8); //store row num of highest cell
var cell;
cellArr.fill(0);
rowNum.fill([]);
for (var i = 0; i < rows; i++) {
	for (var j = 4; j < 12; j++) {
		cell = $('#ranktable tbody tr:eq(' + i + ') td').eq(j);
		if (Number(cell.html()) > cellArr[j - 4]) {
			cellArr[j - 4] = Number(cell.html());
			rowNum[j - 4] = [];
			rowNum[j - 4].push(i);
		}
		else if (Number(cell.html()) == cellArr[j - 4]) {
			cellArr[j - 4] = Number(cell.html());
			rowNum[j - 4].push(i);
		}
		else {
			continue;
		}
	}
}
for (var k = 0; k < rowNum.length; k++) {
	for (var l = 0; l < rowNum[k].length; l++) {
		$('#ranktable tbody tr:eq(' + rowNum[k][l] + ') td').eq(k + 4).css("backgroundColor", "orange");
	}
}
