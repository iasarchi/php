<?php

//Incluir a conexao
include("conexao.php");


//SQL

$sql = "SELECT * FROM cursos";


//Executar

$executar = mysqli_query($conexao, $sql);


//Vetor
$cursos = [];



//Indice
$indice = 0;


//Laco
while($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso'] = $linha['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;

}

//JSON
echo json_encode(['cursos' =>$cursos]);


?>