<?php

#Crie uma página PHP que exiba os números pares entre 45 e 560
$numero=45;
	
		while($numero<560){
			if($numero%2==0){
				echo "( $numero ) ";
			}
			$numero=$numero+1;

		}
?>