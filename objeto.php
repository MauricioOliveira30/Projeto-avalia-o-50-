<?php  
include_once 'classes/Produto.class.php';
$produto1=new Produto;
$produto2=new Produto;
$produto1 ->Codigo=5001;
$produto1 ->Descricao='CD-Legião Urbana';
$produto2->Codigo=5002;
$produto2 ->Descricao='CD-Barão Vermelho';
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();