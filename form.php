<?php
require 'aluno.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de alunos</title>
</head>

<body>
    <form action="gravar.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="" autofocus>
        <input type="hidden" name="matricula" value="">
        <input type="submit" value="Gravar">
    </form>
</body>

</html>