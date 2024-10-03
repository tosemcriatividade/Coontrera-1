<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Pagamentos</title>
    <link rel="stylesheet" href="css/paga.css">
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <div class="container">
        <h1>Histórico de Pagamentos</h1>
        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    include_once('conexao.php');
                    $sql = mysqli_query($conexao,'SELECT * FROM cliente');
                    while($cli = mysqli_fetch_array($sql)){
                        echo'
                        <tr>
                            <td>'.$cli['cli_data'].'</td>
                            <td>'.$cli['cli_nome'].'</td>
                            <td>'.$cli['cli_totalreais'].'</td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>