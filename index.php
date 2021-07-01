<?php 
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r ($categorias);

$nome = 'eduardo';
$idade = 18;

//var_dump ($nome);
//var_dump ($idade);

if($idade>= 6 && $idade<=12)
{
   echo 'infantil';
}
elseif($idade>= 13 && $idade<18)
{
   echo 'adolescente';
}
else
{
   echo 'adulto';
}
?>