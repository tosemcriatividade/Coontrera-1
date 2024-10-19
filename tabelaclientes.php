<?php
    include_once('conexao.php');
    $sql = "SELECT * FROM cliente";
     
   $result = $conexao ->query($sql);



 
    while($cli = mysqli_fetch_assoc($result));
    {
        echo"<tr>";
        echo"<td>" .$cli['nome']."<td>";
        echo"<td>" .$cli['endereco']."<td>";
        echo"<td>" .$cli['cpf']."<td>";
        echo"<td>" .$cli['telefone']."<td>";
        echo"<td>" .$cli['patologia']."<td>";
        echo"<tr>";
    }
    