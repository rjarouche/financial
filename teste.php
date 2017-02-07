<?php

$taxa = 0.02;
$meses = 60;
$valor = 30000;



for($i=1;$i<=$meses;$i++){
  $atual = $valor * (pow(1+$taxa,$i));
  
  $parcial = $atual/$meses;
  $total += $parcial; 
}

echo $total/$meses;