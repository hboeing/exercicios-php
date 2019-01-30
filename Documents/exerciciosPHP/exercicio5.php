<?php

#Crie uma página PHP que exiba os números ímpares entre 100 e 500.
$numero=100;
	
		while($numero<500){
			if($numero%2!=0){
				echo "( $numero ) ";
			}
			$numero=$numero+1;

		}
?>