<?php

$nota1 = 8.5;
$nota2 = 6.0;
$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    echo "Aprovado com média: $media";
} else {
    echo "Reprovado com média: $media";
}
?>

<?php
// implemente tambem uma condição que verifique a presença do aluno.
// O aluno só será aprovado se tiver média maior ou igual a 7 e presença maior ou igual a 75%.

$nota1 = 8.5;
$nota2 = 8.0;
$media = ($nota1 + $nota2) / 2;


$presenca = $media * 10;

if ($media >= 7 && $presenca >= 75) {
    echo "Aprovado com média: $media e presença: $presenca%";
} else {
    echo "Reprovado com média: $media e presença: $presenca%";
}
?>

<?php
// caso o aluno tenha o nome "Enzo Enrico", ele será aprovado independente da média e presença. Crie uma variavel $nome.
$nota1 = 8.5;
$nota2 = 8.0;
$media = ($nota1 + $nota2) / 2;
$presenca = $media * 10;

$nome = "Enzo Enrico";

if ($nome === "Enzo Enrico") {
    echo "Aprovado (caso especial) - Nome: $nome";
} else {
    echo "Reprovado - Nome: $nome";
}
?>





