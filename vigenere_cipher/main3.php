<?
    function g() { return str_split(trim(fgets(STDIN)));}
    $s = g();
    $p = g();
    for ($i = 0; $i < count($p); $i++) {
        echo chr( ( ord($p[$i])-65 + ord($s[$i%count($s)])-65 ) % 26 + 65 );
    }
?>
