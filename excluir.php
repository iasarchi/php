<?php

//Incluir a conexao
include("conexao.php");

// Obter dados

$obterDados = file_get_contents("php://imput");

//Extrair dados do JSON

$extrair = json_decode($obterDados);

//Separar os dados do JSON

$idCurso = $extrair->$cursos->$idCurso;

//SQL

$sql = "DELETE FROM cursos WHERE idcursos = $idCurso";

mysqli_query($conexao,$sql);

?>