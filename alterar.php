<?php

//Incluir a conexao
include("conexao.php");

// Obter dados

$obterDados = file_get_contents("php://imput");

//Extrair dados do JSON

$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->$cursos->$idCurso;
$nomeCurso = $extrair->$cursos->$nomeCurso;
$valorCurso = $extrair->$cursos->$nomeCurso;

//SQL

$sql = "UPDATE cursos set nomecurso='$nomeCurso',valorcurso=$valorCurso WHERE idCursos=$idCurso";
mysqli_query($conexao,$sql);

//Exportar os dados Cadastrados
$curso = [
    'idCurso' => $idCurso
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso,   
]

    json_encode(['curso']=>$curso);

?>