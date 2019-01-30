<?php

#Desenvolva uma página PHP que exiba números entre 0 e 1.000
$numero=-1;
	while ($numero>=-1 and $numero<=999){
		$numero=$numero+1;
		echo "( $numero ) ";
	}
?>