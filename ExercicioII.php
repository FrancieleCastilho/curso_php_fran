<?php
 $numero = 20;

 if((($numero % 10) == 0) && (($numero % 5) == 0) && (($numero % 2) == 0)):
    echo $numero . " é divisivel por 10 por 5 e por 2";
    elseif(($numero % 5) == 0):
        echo $numero . " é divisivel por 5";
    elseif(($numero % 2 ) == 0):
        echo $numero . " é divisivel por 2";
        
    endif;