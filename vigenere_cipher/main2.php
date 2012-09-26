<?
    $s = str_split(trim(fgets(STDIN)));
    $p = str_split(trim(fgets(STDIN)));
    for ($i = 0; $i < count($p); $i++) {
        echo chr( ( ord($p[$i])-65 + ord($s[$i%count($s)])-65 ) % 26 + 65 );
    }
?>
