<?php 

include("conexao.php");

$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$sql= "INSERT INTO usuario(nome,sobrenome,email,senha)
value ('$nome','$sobrenome','$email','$senha')";
if(mysqli_query($conexao,$sql)){
    echo "usuario cadastrado com sucesso";
}
else{
    echo"erro" . mysqli_connect_error($conexao);
}
  

?>