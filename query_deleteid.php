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

$con = mysqli_connect("$HOST","$USUARIO","$SENHA","$DATABASENAME");

 $Sql_Query = "delete from cliclientes where id= '$id'";
 
 if(mysqli_query($con,$Sql_Query)>0){
 
 echo "dados deletados com sucesso!";
 
 }
 else{
 
 echo "nao foi possivel excluir";
 
 }

 mysqli_close($con);
?>