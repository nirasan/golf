<?$s=array();$i=0;while($c=fgetc(STDIN)){if($c=='
'){$f=1;}elseif($f){echo chr((ord($c)-65+$s[$i%count($s)])%26+65);$i++;}else{array_push($s,ord($c)-65);}}
