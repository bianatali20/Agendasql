<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listAll.css">
    <title>Agenda</title>
    
</head>
<body>
    <?php
        require_once '../dao/pessoaDAO.php';
        $pessoaDAO = new pessoaDAO();
        $pessoas = $pessoaDAO->getAllPessoa();
    ?>

    <div class="container">

        <a href="../index.php">Página Inicial</a>
        
        <h4>Agenda</h4>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Sexo</td>
                <td>Data de Nascimento</td>
                <td>Telefone</td>
                <td>E-mail</td>
            
            </tr>

            <?php
            // TABELA DINÂMICA
                foreach ($pessoas as $pessoa) {
                echo "<tr>";

                echo "<td>{$pessoa['id_pessoa']}</td>";
                echo "<td>{$pessoa['ds_nome']}</td>";
                echo "<td>{$pessoa['cd_sexo']}</td>";
                echo "<td>{$pessoa['dt_nasc']}</td>";
                echo "<td>{$pessoa['nr_telefone']}</td>";
                echo "<td>{$pessoa['ds_email']}</td>";
                
                echo "</tr>";
                }
            ?>
        </table>

    </div>
    
    

</body>
</html>