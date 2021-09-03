<?php

function lerArquivo($nomeArquivo)
{
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarFuncionario($funcionarios, $nome)
{
    $funcionarioFiltro = [];
    foreach ($funcionarios as $funcionario) {

        if ($funcionario->first_name == $nome) {

            $funcionarioFiltro[] = $funcionario;

        }
    }
    return $funcionarioFiltro;
}
