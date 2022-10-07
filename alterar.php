<?php

//Incluir a conexao
include("conexao.php");

// Obter dados

$obterDados = file_get_contents("php://input");

//Extrair dados do JSON

$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL

$sql = "UPDATE cursos set nomeCurso='$nomeCurso',valorCurso=$valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao,$sql);

//Exportar os dados Cadastrados
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso,   
];

   echo json_encode(['cursos'=>$curso]);

?>