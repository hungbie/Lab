// ranktable starts off sorted in descending order of sum
var wasPreviouslySumDescSorted = true;

var table = $('#ranktable').DataTable({
  "fnDrawCallback": function(oSettings) {
    var sortProperties = oSettings.aaSorting[0];
    if (sortProperties[0] === 12 && sortProperties[1] === "desc") {
      setRowHeightAccordingToSum();
      wasPreviouslySumDescSorted = true;
    } else if (wasPreviouslySumDescSorted) {
      // if we sorted according sum in desc order previously and
      // now arrange according other cols, we need to reset row height
      resetRowHeight();
      wasPreviouslySumDescSorted = false;
    }
  },
  "initComplete": function(settings, json) {
    // apply rank number after first draw of table
    // table should be sorted in descending order according to sum
    $('#ranktable tbody tr').each(function() {
      var index = $("tr").index(this);
      var rankCell = $('td:first-child', this);
      rankCell.html(index);
    });
  },
  "bPaginate": false,
  "bAutoWidth": false,
  "bFilter": false,
  "bInfo" : false,
  "aaSorting": [[12, 'desc']],
  "columnDefs": [{
    "targets": [0],
    "orderable": false, //Disable ordering of first collumn
  }]
});

function setRowHeightAccordingToSum() {
  $('#ranktable tbody tr').not(':last').each(function(){
      var currentRow = $(this);
      var currScore = parseFloat(currentRow.find("td:eq(12)").text());

      var nextRow = currentRow.next("tr");
      var nextScore = parseFloat(nextRow.find("td:eq(12)").text());

      var difference = currScore - nextScore;
      var newHeight = 30 + 20 * difference;
      nextRow.css('height', newHeight);
  });
}

function resetRowHeight() {
  $('#ranktable tbody tr').each(function(){
      $(this).css('height', 30);
  });
}
