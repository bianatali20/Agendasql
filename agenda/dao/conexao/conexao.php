<?php
// CLASSE PARA SER INSTANCIADA EM OUTROS LUGARES, ONDE PRECISAR FAZER CONEXÃO COM O BANCO DE DADOS
class Conexao{
    function getConexao(){
        $banco = new mysqli('localhost', 'root', '', 'agenda');
        return $banco;
        
        if ($banco->connect_errno){
            echo "Erro: " , $banco->error;
        }
    }
}
?>