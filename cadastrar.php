<?php

//Incluir a conexao
include("conexao.php");

// Obter dados

$obterDados = file_get_contents("php://input");

//Extrair dados do JSON

$extrair = json_decode($obterDados);

//Separar os dados do JSON

$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL

$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";

mysqli_query($conexao,$sql);

//Exportar os dados Cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso,   
];

echo json_encode(['curso'=>$curso]);

?>