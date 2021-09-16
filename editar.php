<?php

require("./funcoes.php");

$idFuncionario = $_GET['id'];

$funcionario = buscarFuncionarioPorId("empresaX.json", $idFuncionario);

//debug
// echo '<pre>';
// var_dump($funcionario);exit;
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="./script.js" defer></script>
    <title>Empresa X</title>
</head>

<body>
    <div class="container-form">
        <form id="form-funcionario" action="acaoEditar.php" method="POST">
            <?php
            if (!$funcionario) echo "<h1>Funcionário não encontrado</h1>";
            else {
            ?>
                <div class="divTeste">
                    <h1>Editar funcionário</h1>
                    
                    <input type="hidden" placeholder="Digite o id" name="id" value="" />
                    <input type="text" placeholder="Digite o primeiro nome" name="first_name" value="" />
                    <input type="text" placeholder="Digite o sobrenome" name="last_name" value="" />
                    <input type="text" placeholder="Digite o e-mail" name="email" value="" />
                    <input type="text" placeholder="Digite o sexo" name="gender" value="" />
                    <input type="text" placeholder="Digite o IP" name="ip_address" value="" />
                    <input type="text" placeholder="Digite o país" name="country" value="" />
                    <input type="text" placeholder="Digite o departamento" name="department" value="" />

                    <button class="buttonSalvarEdicao">Salvar</button>
                </div>
            <?php } ?>
        </form>
    </div>
</body>

</html>