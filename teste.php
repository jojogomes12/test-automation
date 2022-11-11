<?php

//Definir o cenario

require_once 'FileWriter.php';
$pathFile='file';
$writer= new  FileWriter($pathFile);


//Executa o nosso teste 
$writer->write('Primeira linha');
$writer->write('uma outra linha');

//Verificar se é esperado
$waitedContent='Primeira linha
uma outra linha
';




if(strpos(file_get_contents($pathFile),$waitedContent !==false)){
  echo 'não existe arquivo aqui';
}else{
    echo' Encontrado com suceso'; 
}







?>