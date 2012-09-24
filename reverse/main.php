<?php
    $n = explode(' ', fgets(STDIN));
    $l = count($n);
    $r = array();
    for ($i = 0; $i < $l; $i++) {
        $idx = array_search($l-$i, $n);
        $n = array_reverse(array_merge(array_reverse(array_slice($n,0,$idx+1)),array_slice($n,$idx+1)));
        array_pop($n);
        array_push($r, $idx+1, $l-$i);
    }
    echo implode(" ", $r);
?>
