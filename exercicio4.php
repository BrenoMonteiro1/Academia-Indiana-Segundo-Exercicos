<?php

/*4- Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos 
seu colega irá passar a ganhar mais que você.
<?php
$sal1 = 5000;
$sal2 = 2500;*/

$sal1 = 5000;
$sal2 = 2500;
$aumento1 = 0.10;
$aumento2 = 0.20;
$anos = 0;

while ($sal2 <= $sal1){
    $sal1 += $sal1 * $aumento1;
    $sal2 += $sal2 * $aumento2;
    $anos++;
}

echo "Meu salario: $sal1";
echo "<br>";

echo "Salario do colega salario: $sal2";
echo "<br>";

echo "Quantidade de anos: $anos";

?>


