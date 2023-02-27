<?php
require_once '../dao/pessoaDAO.php';
// RECUPERA O ID 
$id_pessoa = $_GET['id_pessoa'];

$pessoaDAO = new pessoaDAO();
$pessoa = $pessoaDAO->getPessoaById_Pessoa($id_pessoa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formCadastrar.css">
    <title>CRUD</title>
</head>
    <header></header>
<body>

    <main>

    <div class="container">
            <form action="../controller/alterarPessoaController.php" method="post">
                <h1>Alterar contato</h1>
                <h3>Preencha os campos com a nova informação desejada</h3>
                <label for="">Nome</label>
                <input type="text" name="ds_nome" id="ds_nome" placeholder="Nome Completo" value="<?php echo $pessoa['ds_nome'] ?>">
                
                <label for="">Sexo: </label>
                <input type="radio" id="m" name="cd_sexo" value="m" >
                <br>
                <label for="html">Masculino</label>
                <input type="radio" id="m" name="cd_sexo" value="m">
                <br>
                <label for="html">Feminino</label>
                <input type="radio" id="n" name="cd_sexo" value="n">
                <br>
                <label for="html">Prefiro não informar</label><br>
                <br>

                <label for="">Data de nascimento</label>
                <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Nome Completo" value="<?php echo $pessoa['dt_nasc'] ?>">
                <br>

                <label for="">Telefone</label>
                <input type="tel" name="nr_telefone" id="nr_telefone" placeholder="(00) 00000-0000" value="<?php echo $pessoa['nr_telefone'] ?>">
                
                <br>
                <label for="">E-mail</label>
                <input type="email" name="ds_email" id="ds_email" placeholder="Seu e-mail mais utilizado" value="<?php echo $pessoa['ds_email'] ?>">

                <input type="submit" value="Salvar" id="submit">
            </form>

    </main>
    
</body>
</html>