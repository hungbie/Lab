var mc = $('#mc');
var tc = $('#tc');
var hw = $('#hw');
var bs = $('#bs');
var ks = $('#ks');
var ac = $('#ac');


mc.on('keyup', recomputeSum);
tc.on('keyup', recomputeSum);
hw.on('keyup', recomputeSum);
bs.on('keyup', recomputeSum);
ks.on('keyup', recomputeSum);
ac.on('keyup', recomputeSum);

recomputeSum();

function computeFieldSum(field) {
    var splitInput = field.val().split(',');
    var fieldSum = 0;

    splitInput.forEach(function(valueStr) {
            var value = parseFloat(valueStr);
            if(!isNaN(value)) {
                fieldSum += value;
            }
        }
    );

    return fieldSum;
}

// recomputeSum for regex version
function recomputeSum() {
    $(document).ready(function () {
        var sum = computeFieldSum(mc)
            + computeFieldSum(tc)
            + computeFieldSum(hw)
            + computeFieldSum(bs)
            + computeFieldSum(ks)
            + computeFieldSum(ac);

        $('#sum').val(sum);
    });
}
