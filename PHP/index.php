<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categoria[] = 'idoso';
//print_r($categorias);//

$nome = 'Roberta';
$idade = 22;

//var_dump($nome);
//var_dump($idade);


if($idade >= 6 && $idade <= 12)
{
    echo 'Competidor infantil';
}
else if($idade >= 13 && $idade <= 18)
{
    echo 'Competidor adolescente';
}
else if($idade > 18)
{
    echo 'Competidor adulto';
}
else
{
    echo 'Competidor abaixo da idade indicada';
}



