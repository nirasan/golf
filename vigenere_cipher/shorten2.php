<?function g(){return str_split(trim(fgets(STDIN)));}$s=g();$p=g();for($i=0;$i<count($p);$i++){echo chr((ord($p[$i])+ord($s[$i%count($s)])-130)%26+65);}
