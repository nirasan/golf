<?
    $r = array();
    while ($l = fgets(STDIN)) {
        $a = explode(" ",$l);
        for ($i = 0; $i < 10; $i++) {
            $r[$i] += $a[$i];
        }
        array_push($r,array_sum($a));
    }
    echo max($r);
?>
