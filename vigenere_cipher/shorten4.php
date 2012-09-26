<?$n=s;for($s=$p=array();$l=trim(fgets(STDIN));){$$n=str_split($l);$n=p;}for($i=0;$i<count($p);$i++){echo chr((ord($p[$i])+ord($s[$i%count($s)])-130)%26+65);}
