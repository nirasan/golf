<?
    $n = s;
    for ($s = $p = array(); $l = trim(fgets(STDIN));) { $$n = str_split($l); $n = p; }
    for ($i = 0; $i < count($p); $i++) {
        echo chr( ( ord($p[$i])-65 + ord($s[$i%count($s)])-65 ) % 26 + 65 );
    }
?>
