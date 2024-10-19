<?php
    include('conexao.php');
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $CPF = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $patologia = $_POST["patologia"];

    $sqpl="INSERT INTO clientes (nome, endereco, cpf, telefone, patologia) VALUES ('$nome', '$endereco', '$cpf', '$telefone', '$patologia')";
    
    if(mysqli_query($conexao, $sql)){
        echo("<h6>Cadastro realizado com sucesso<h6>");
    }
    else{
        echo("O cadastro não pode ser efetuado");
    }
