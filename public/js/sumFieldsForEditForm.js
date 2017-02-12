var mc = $('#mc');
var tc = $('#tc');
var hw = $('#hw');
var bs = $('#bs');
var ac = $('#ac');

mc.on('keyup', recomputeSum);
tc.on('keyup', recomputeSum);
hw.on('keyup', recomputeSum);
bs.on('keyup', recomputeSum);
ac.on('keyup', recomputeSum);

recomputeSum()

function recomputeSum() {
    $(document).ready(function () {
        var sum = parseFloat(mc.val())
            + parseFloat(tc.val())
            + parseFloat(hw.val())
            + parseFloat(bs.val())
            + parseFloat(ac.val());

        $('#sum').val(sum);
    });
}