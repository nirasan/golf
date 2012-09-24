<?php
    # for http://codegolf.com/saving-time
    list($h, $m) = explode(':', trim(fgets(STDIN)));
    $h = $h % 12;
    $m = (int)($m / 5);
    for ($i = 0; $i < 12; $i++) {
        $c[$i] = $i-$h||$i-$m ? $i-$h ? $i-$m ? o : m : h : x;
    }
    $format = <<<EOL
%9s
%5s%8s

%2s%14s

%s%16s

%2s%14s

%5s%8s
%9s
EOL;
    printf($format, $c[0], $c[11], $c[1], $c[10], $c[2], $c[9], $c[3], $c[8], $c[4], $c[7], $c[5], $c[6]);
?>
