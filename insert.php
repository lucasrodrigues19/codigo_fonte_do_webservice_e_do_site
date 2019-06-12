<?php

//MEU LOCALHOST
$HOST = "localhost";

//USUARIO DO BANCO.
$USUARIO = "id9479177_lucas";

//DEFINIR A SENHA.
$SENHA = "lucas";

//NOME DO BANCO.
$DATABASENAME = "id9479177_alunodb";

 
 
 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$nome_animal = $_POST['nome_animal'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];

$con = mysqli_connect("$HOST","$USUARIO","$SENHA","$DATABASENAME");

 $Sql_Query = "insert into cliclientes (id,nome,telefone,endereco,usuario,nome_animal,especie,raca) values (default,'$nome','$telefone','$endereco','$usuario','$nome_animal','$especie','$raca')";

 if(mysqli_query($con,$Sql_Query)){

 echo "dados enviados com sucesso";
 
 }
 else{
 
 echo "tente novamente";
 
 }

 mysqli_close($con);
?>