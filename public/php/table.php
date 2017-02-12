<?php
function echoTr($rowSum, $sums) {
    if ($rowSum == $sums['first']) {
        echo"<tr class=gold>";
    } elseif ($rowSum == $sums['second']) {
        echo"<tr class=silver>";
    } elseif ($rowSum == $sums['third']) {
        echo"<tr class=bronze>";
    } elseif ($rowSum == $sums['last']) {
        echo"<tr class=pink>";
    } else {
        echo "<tr>";
    }
}

function echoTd($highestValue, $tdValue, $class = "") {
    if ($tdValue == $highestValue) {
        echo "<td {$class} style=\"background-color:orange\">{$tdValue}</td>";
    } else {
        echo "<td {$class}>{$tdValue}</td>";
    }
}

$highestValues = array(
    'mini_contests'  => -1,
    'team_contests' => -1,
    'speed'   => -1,
    'homework' => -1,
    'problem_bs' => -1,
    'kattie_sets' => -1,
    'achievements' => -1,
    'diligence' => -1
);

$sums = array(
    'first' => $data[0]['sum'],
    'second' => $data[0]['sum'],
    'third' => $data[0]['sum'],
    'last' => $data[0]['sum']
);

foreach($data as $value) {
    // store highest value for each col
    $highestValues['mini_contests'] = $highestValues['mini_contests'] < $value['mini_contests'] ?  $value['mini_contests'] : $highestValues['mini_contests'];
    $highestValues['team_contests'] = $highestValues['team_contests'] < $value['team_contests'] ?  $value['team_contests'] : $highestValues['team_contests'];
    $highestValues['speed'] = $highestValues['speed'] < $value['speed'] ?  $value['speed'] : $highestValues['speed'];
    $highestValues['homework'] = $highestValues['homework'] < $value['homework'] ?  $value['homework'] : $highestValues['homework'];
    $highestValues['problem_bs'] = $highestValues['problem_bs'] < $value['problem_bs'] ?  $value['problem_bs'] : $highestValues['problem_bs'];
    $highestValues['kattie_sets'] = $highestValues['kattie_sets'] < $value['kattie_sets'] ?  $value['kattie_sets'] : $highestValues['kattie_sets'];
    $highestValues['achievements'] = $highestValues['achievements'] < $value['achievements'] ?  $value['achievements'] : $highestValues['achievements'];
    $highestValues['diligence'] = $highestValues['diligence'] < $value['diligence'] ?  $value['diligence'] : $highestValues['diligence'];

    // find top three scores
    $currSum = $value['sum'];
    if ($currSum < $sums['last']) {
        $sums['last'] = $currSum;
    } elseif ($currSum > $sums['first']) {
        // make space for curr sum to be first
        $sums['third'] = $sums['second'];
        $sums['second'] = $sums['first'];

        $sums['first'] = $currSum;
    } elseif ($currSum > $sums['second'] && $currSum < $sums['first']) {
        $sums['third'] = $sums['second'];
        $sums['second'] = $currSum;
    } elseif ($currSum > $sums['third'] && $currSum < $sums['second']) {
        $sums['third'] = $currSum;
    }
}

foreach ($data as $value) {
    $studentName = ($loginState ? "<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"student/{$value['id']}\"> {$value['name']} </a><a href=\"student/{$value['id']}/edit\"> [edit] </a> </td>":"<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"student/{$value['id']}\"> {$value['name']} </a> </td>");
    $studentNickName = ($loginState ?  "<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"".url('student')."/{$value['id']}\">{$value['nickname']}</a><a href=\"student/{$value['id']}/edit\"> [edit] </a></td>": "<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"student/{$value['id']}\">{$value['nickname']}</a></td>");

    echoTr($value['sum'], $sums);
    echo "<td>{$value['id']}</td>";
    echo "<td class=\"hidden-xs\"><span class=\"flag-icon flag-icon-".strtolower($value['country'])." flag-icon-squared\"></span> {$value['country']}</td>
						".$studentName." ".$studentNickName."";
    echoTd($highestValues['mini_contests'], $value['mini_contests'], "class=hidden-xs hidden-sm");
    echoTd($highestValues['team_contests'], $value['team_contests'], "class=hidden-xs hidden-sm");
    echoTd($highestValues['speed'], $value['speed']);
    echoTd($highestValues['homework'], $value['homework'], "class=hidden-xs hidden-sm highlighted");
    echoTd($highestValues['problem_bs'], $value['problem_bs'], "class=hidden-xs hidden-sm highlighted");
    echoTd($highestValues['kattie_sets'], $value['kattie_sets'], "class=hidden-xs hidden-sm highlighted");
    echoTd($highestValues['achievements'], $value['achievements'], "class=hidden-xs hidden-sm");
    echoTd($highestValues['diligence'], $value['diligence']);
    echo "<td>{$value['sum']}</td>";
    echo "</tr>";
}
?>