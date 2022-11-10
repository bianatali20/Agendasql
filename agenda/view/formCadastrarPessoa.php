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
             
                <input type="radio" id="M" name="cd_sexo" value="M" >
                <label for="html">Masculino</label>
                
                <input type="radio" id="F" name="cd_sexo" value="F" >
                <label for="html">Feminino</label>
                
                <input type="radio" id="Prefiro não informar" name="cd_sexo">
                <label for="html">Prefiro não informar</label><br>
                
            </fieldset>
                <br>
                <label for="">Data de nascimento</label>
                <input type="date" id="festa" name="festa" min="0000-00-00" max="0000-00-00" required>
                <span class="validity"></span>
                    
                        
                <br>
                <label for="">Telefone</label>
                <input type="tel" name="nr_telefone" id="nr_telefone" placeholder="(00) 00000-0000" required>
                <span class="validity"></span>
                <br>
                <label for="">E-mail</label>
                <input type="email" name="ds_email" id="ds_email" placeholder="Seu e-mail mais utilizado"required>
                <span class="validity"></span>

                <input type="submit" value="Salvar" id="submit">
                   <br>
               
                   <!--//css do link para pagina inicial -->
            <style>
            a:link, a:visited {
                
                background-color: rgb(155, 188, 226);
                color: rgb(15, 13, 13);
                text-decoration: none;
                text-align: center;
                display: block;
                width: 100%;
                font-family: 'Times New Roman', Times, serif;
            }
            
            a:hover, a:active {
                background-color: steelblue;
            }
            </style>
              <a href="../index.php">Página Inicial</a> 
            </form>
           
        </div>
    </main>
    
</body>
</html>