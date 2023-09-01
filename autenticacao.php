<?php
if(isset($_POST['entrar'])){
$email = $_POST['email'];
$senha = $_POST['senha'];

//Preparar a SQL
$SQL = "select * from usuario where email = '{$email}' and senha = '{$senha}'";

require_once("conexao.php");

//Executa a SQL
$resultado = mysqli_query($conexao, $SQL);
$registros = mysqli_num_rows($resultado); //Retorna o número de linhas da consulta

//Verifica se o usuário existe no BD e concede permissão ou volta ao login
if($registros > 0){
    $usuario = mysqli_fetch_array($resultado);

    //Cria a sessão para gerar permissão de acesso ao sistema
    session_start();
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['email'] = $usuario['email'];
header("location: principal.php");
} else{
    $mensagem = "Usuário/senha inválidos";
    header("location: index.php?mensagem=$mensagem");
}
}
?>