<?php
function potencia($x, $n){
    if($n==1) return $x;
        return $x*potencia($x,$n-1);
}
echo potencia(3, 2);