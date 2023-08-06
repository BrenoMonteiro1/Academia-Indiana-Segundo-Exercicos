<?php

/*2- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor.*/

$vetor = array(6,10,55,22,8);
$menorElemento = $vetor[0];
$posicaoMenor = 0;

foreach ($vetor as $posicao => $num) {
    if ($num < $menorElemento) {
        $menorElemento = $num;
        $posicaoMenor = $posicao;
    }
}

echo "Menor elemento: $menorElemento";
echo "<br>";
echo "Posição do menor elemento: $posicaoMenor";

?>

