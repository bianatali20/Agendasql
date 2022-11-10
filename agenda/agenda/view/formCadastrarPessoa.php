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
            <form action="../controller/cadastrarPessoaController.php" method="post">
                <h1>Cadastro de Pessoas</h1>
                <label for="">Nome</label>
                <input type="text" name="ds_nome" id="ds_nome" placeholder="Nome Completo">
                <br>

                <fieldset>
                    <legend> Sexo </legend>
                    <div>
             
                <input type="radio" id="m" name="cd_sexo" value="m">
                <label for="html">Masculino</label>
                
                <input type="radio" id="m" name="cd_sexo" value="f">
                <label for="html">Feminino</label>
                
                <input type="radio" id="n" name="cd_sexo" value="n">
                <label for="html">Prefiro não informar</label><br>
                 
            </fieldset>
                <br>
                <label for="">Data de nascimento</label>
                <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Nome Completo">
                <br>
                <label for="">Telefone</label>
                <input type="tel" name="nr_telefone" id="nr_telefone" placeholder="(00) 00000-0000">
                <br>
                <label for="">E-mail</label>
                <input type="email" name="ds_email" id="ds_email" placeholder="Seu e-mail mais utilizado">

                <input type="submit" value="Salvar" id="submit">
              
            </form>
           
        </div>
    </main>
    
</body>
</html>