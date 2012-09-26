<?for($a=array();$l=trim(fgets(STDIN));)array_push($a,str_split($l));list($s,$p)=$a;for($i=0;$i<count($p);$i++){echo chr((ord($p[$i])+ord($s[$i%count($s)])-130)%26+65);}
