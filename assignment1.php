<?php
$f = 5;
$c = (($f - 32) * 5) / 9;
$c = round($c, 3);             
echo "Temperature in celsius is: $c";
?>
<hr>
<?php
$c = 5;
$f = (($c * 9/5) + 32);
$f = round($f, 3);             
echo "Temperature in celsius is: $f";
?>