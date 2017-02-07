for (var i =4; i <= 12; i++) {
	curMax = $("#ranktable tbody").find("tr:first").find('td:eq('+i+')').text();
	curMax = parseFloat(curMax);
//find max value
  $('#ranktable tbody tr').each(function(){
      var currentRow = $(this).closest("tr");
      var curScore = currentRow.find('td:eq('+i+')').text();
      curScore = parseFloat(curScore);
      if (curScore > curMax) curMax = curScore;
  });

//Fill in max cells
  $('#ranktable tbody tr').each(function(){
      var currentRow = $(this).closest("tr");
      var curScore = currentRow.find('td:eq(' + i + ')').text();
	 curScore = parseFloat(curScore);
      if (curScore == curMax) $(this).closest("tr").find('td:eq('+i+')').css("backgroundColor", "orange");
  });
}
