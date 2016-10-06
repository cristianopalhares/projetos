<?php
/*
Titulo: Teste de PHP - Questão 01
Autor: Cristiano Freitas Palhares
Data: 05/10/2016
Descrição: Criar um função que imprime números de 1 a 100 e verifique os múltiplos de 3 apresentando “Fizz” em vez do número,
para múltiplos de 5 imprime “Buzz” e para múltiplos de ambos 3 e 5 imprime “FizzBuzz”.  
*/
for ($num = 1; $num <= 100; $num++) {
    // corpo de for
	 
	if ((($num % 3) == 0) and (($num % 5) == 0)){
		// Verifica se o número é dividido por 3 e 5.
        echo 'FizzBuzz';
		echo '<br>';
	} elseif (($num % 3) == 0) {
		// Verifica se o número é dividido por 3.
		echo 'Fizz';
		echo '<br>';
	} elseif (($num % 5) == 0) {
		// Verifica se o número é dividido por 5.
		echo 'Buzz';
		echo '<br>';
	} else {
		echo $num; 
	    echo '<br>';
	}
	
    }
	
?>