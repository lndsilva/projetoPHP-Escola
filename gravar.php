<?php

define('DS', DIRECTORY_SEPARATOR);

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;

if (!is_null($nome)) {
    
    $filename = __DIR__ . DS . 'alunos.txt';
    require 'arquivo.php';

    //abre no começo para leitura

}

