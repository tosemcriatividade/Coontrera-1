<?php
include('conexao.php');       
$email = $_POST["email"];
$senha = $_POST["senha"];

$email = strtolower($email);

$sql = mysqli_query($conexao,"SELECT * FROM administrador WHERE adm_email = '".$email."' AND adm_senha = '".$senha."' ");

$quantidade = $sql->num_rows;

if ($quantidade == 1) {
    $administrador = $sql->fetch_assoc(); 
    if (!isset($_SESSION)) {
      session_start();
    }else{
      session_destroy();
      session_start();
    }

    $_SESSION['cod'] = $administrador['adm_cod'];
    $_SESSION['email'] = $administrador['adm_email'];      
    $_SESSION['senha'] = $administrador['adm_senha'];

    header('Location: inicio.php');         
}
