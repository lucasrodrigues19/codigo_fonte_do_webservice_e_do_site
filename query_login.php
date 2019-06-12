<?php 
//MEU LOCALHOST
$HOST = "localhost";

//USUARIO DO BANCO.
$USUARIO = "id9479177_lucas";

//DEFINIR A SENHA.
$SENHA = "lucas";

//NOME DO BANCO.
$DATABASENAME = "id9479177_alunodb";

$user_name = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$user_pass = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$con = mysqli_connect("$HOST","$USUARIO","$SENHA","$DATABASENAME");

$Sql_Query = "select * from cliclientes where usuario like'$user_name' and telefone like'$user_pass';";


$result = mysqli_query($con ,$Sql_Query);
if(mysqli_num_rows($result) > 0) {
echo "login feito com sucesso";

}
else {
echo "nao foi possivel fazer o login ! verifique os dados";
}


 mysqli_close($con);
?>