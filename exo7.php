<?php
 function fact($n)
 {
     if($n<=1)
     {
        return 1;
     }
     else
     {
        return $n * fact($n-1);
     }
 }

 $n=3;
 $f=fact($n);
 echo "la factorielle de $n est $f";
?>