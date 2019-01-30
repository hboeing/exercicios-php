

<?php 

/*Desenvolva uma página PHP que sorteie um número aleatório entre 1 e 20 e exiba os
números entre aquele sorteado e o dobro do seu valor. Exemplo: sendo o número
sorteado 2, deve imprimir 2, 3 e 4 (o dobro de 2 é 4)*/


$numero=rand(1,20);
//dobro de numero:
$dobro=$numero*2;
$cont=$numero+1;
echo "N&uacute;mero: $numero<br />";
while($cont<$dobro){
	echo "$cont<br />";
	$cont++;
}
echo "Dobro: $dobro";


?>