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
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O(A) nadador(a) " .$nome. " compete na categoria " .$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O(A) nadador(a) " .$nome. " compete na categoria " .$categorias[$i];
    }
}
else if($idade > 18)
{
   for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O(A) nadador(a) " .$nome.  " compete na categoria " .$categorias[$i];
    }  
}
else
{
    echo 'Competidor abaixo da idade indicada';
}



