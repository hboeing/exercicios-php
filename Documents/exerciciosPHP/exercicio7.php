<?php
#Desenvolva uma página PHP que sorteie um número aleatório entre 1 e 40 e verifique 
$numero=rand(1,40);
$inicial=1;
$fim=$numero;
$naoprimo=0;
echo "Numero: ". $numero .	"<br />";
while($inicial<=$fim){
	echo "$numero / $inicial = ".$numero%$inicial. "<br />";
	if(($numero%$inicial)==0){
		$naoprimo++;
		
	}
	$inicial++;
}
echo "Contador de numeros divisiveis de resto 0 = ".$naoprimo."<br />";
if(($naoprimo>2)){
	echo "Nao eh numero primo";
}
elseif($numero<3){
	echo "eh primo";
}else{
	echo "eh primo";
}

?>