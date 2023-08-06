<?php

/*3- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um for*/

$vetor1 = array(5,10,55,22,8,54,23,11,34,88);
$vetor2 = array(6,11,56,23,9,55,24,12,35,89);
$resultado = array();

for ($i = 0; $i < 10; $i++){
    $resultado[] = $vetor1[$i] + $vetor2[$i];
}

echo implode ($resultado);

?>