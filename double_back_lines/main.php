<?
    while ($l=rtrim(fgets(STDIN))) {
        echo$l.strrev(substr($l,0,strlen($l)-1))."
";
    }
?>
