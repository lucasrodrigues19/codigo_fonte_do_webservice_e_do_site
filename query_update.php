<?php

//MEU LOCALHOST
$HOST = "localhost";

//USUARIO DO BANCO.
$USUARIO = "id9479177_lucas";

//DEFINIR A SENHA.
$SENHA = "lucas";

//NOME DO BANCO.
$DATABASENAME = "id9479177_alunodb";

 
 
$id = $_POST['id']; 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$nome_animal = $_POST['nome_animal'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];

$con = mysqli_connect("$HOST","$USUARIO","$SENHA","$DATABASENAME");

 $Sql_Query = "UPDATE cliclientes SET nome= '$nome', telefone='$telefone', endereco='$endereco', usuario='$usuario', nome_animal='$nome_animal', especie='$especie', raca='$raca' WHERE id= '$id'";
 
if(mysqli_query($con,$Sql_Query)){
 
 echo "dados alterados com sucesso";
 
 }
 else{
 
 echo "tente novamente!";
 
 }
 mysqli_close($con);
?>