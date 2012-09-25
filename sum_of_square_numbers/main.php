<?
    while ($l = fgets(STDIN)) {
        for ($i = $sum = 0; $i <= $l; $sum += pow($i++,2)) {
        }
        echo "$sum\n";
    }
?>
