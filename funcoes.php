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

        if (strpos($funcionario->first_name, $nome) !== false 
        || strpos($funcionario->last_name, $nome) !== false 
        || strpos($funcionario->department, $nome) !== false
        ) {

            $funcionarioFiltro[] = $funcionario;
        }
    }
    return $funcionarioFiltro;
}
// function buscarFuncionario($funcionarios, $nome)
// {
//     $funcionarioFiltro = [];
//     foreach ($funcionarios as $funcionario) {

//         // $nome = $_GET["buscarFuncionario"];

//         $pos = strpos($funcionario->first_name, $nome);


//         if ($pos === true) {

//             $funcionarioFiltro[] = $funcionario;
//         }
//         // else{
//         //     echo "Monitor Asus novinho";
//         // }
//     }
//     return $funcionarioFiltro;
// }
function adicionarFuncionario(array $funcionario)
{
    $funcionarios = lerArquivo('empresaX.json');
    $id = count($funcionarios) + 1;
    $funcionario['id'] = $id;
    $funcionarios[] = $funcionario;
    $json = json_encode($funcionarios);
    file_put_contents('empresaX.json', $json);
}
// function adicionarFuncionario($nomeArquivo, $novoFuncionario)
// {
//     $funcionarios = lerArquivo($nomeArquivo);
//     $id = count($funcionarios) + 1;
//     $funcionario['id'] = $id;
//     $funcionarios[] = $novoFuncionario;
//     $json = json_encode($funcionarios);
//     file_put_contents('empresaX.json', $json);
// }

