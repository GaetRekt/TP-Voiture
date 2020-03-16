<?php
// Estime le prix du vehicule avec ses km et son année
function calcul($a, $b)
{
$add = $a+$b;
$sous = $a-$b;
$multi = $a*$b;
$div = $a/$b;
return array($add, $sous, $multi, $div);
}