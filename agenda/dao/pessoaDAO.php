<?php
require_once '../dao/conexao/conexao.php';

class pessoaDAO {
    // CADASTRAR
    function cadastrarPessoa (pessoaDTO $pessoaDTO){

        $id_pessoa = $pessoaDTO->getId_pessoa();
        $ds_nome = $pessoaDTO->getDs_nome();
        $cd_sexo = $pessoaDTO->getCd_sexo();
        $dt_nasc = $pessoaDTO->getDt_nasc();
        $nr_telefone = $pessoaDTO->getNr_telefone();
        $ds_email = $pessoaDTO->getDs_email();
    
        // BANCO DE DADOS
        $banco = new mysqli('localhost', 'root', '', 'agenda');
        $sql = $banco->query("insert into pessoa values ('$id_pessoa', '$ds_nome', '$cd_sexo', '$dt_nasc', '$nr_telefone', '$ds_email')");
        
        // SE DER ERRO RETORNA O ERRO
        if (!$sql){
            $msg = $banco->error;
            echo $msg;
        }
        return $sql;
    }
    

    // LISTAR
    function getAllPessoa(){
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        $sql = $conexao->query("select * from pessoa");
        return $sql;
        
        // SE DER ERRO RETORNA O ERRO   
        if(!$sql) {
            $msg = $conexao->error;
            return $msg;
        }

    }

    // SELECIONANDO PELO IDENTIFICADOR CONFORME BANCO DE DADOS
    function getPessoaById_Pessoa($id_pessoa){
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        // COMANDO SQL
        $sql = $conexao->query("select * from pessoa where id_pessoa = '$id_pessoa'");
     
        $final = $sql->fetch_assoc();

        if(!$final) {
            $msg = $conexao->error;
            return $msg;
        } else {
            return $final;
        }
    }

    // ALTERAR
    // DADOS RECEBIDOS DE CONTROLLER
    function alterarPessoa (pessoaDTO $pessoaDTO){
        $id_pessoa = $pessoaDTO->getId_pessoa();
        $ds_nome = $pessoaDTO->getDs_nome();
        $cd_sexo = $pessoaDTO->getCd_sexo();
        $dt_nasc = $pessoaDTO->getDt_nasc();
        $nr_telefone = $pessoaDTO->getNr_telefone();
        $ds_email = $pessoaDTO->getDs_email();

        $banco = new Conexao();
        $conexao = $banco->getConexao();
        // COMANDO SQL
        $sql = $conexao->query("update pessoa set ds_nome = '$ds_nome', cd_sexo = '$cd_sexo', dt_nasc = '$dt_nasc', nr_telefone = '$nr_telefone', ds_email = '$ds_email' where id_pessoa = '$id_pessoa' ");
    
        if(!$sql) {
            $msg = $conexao->error;
            return $msg;
        } else {
            return $sql;
        }
    }

    // EXCLUIR
    function excluirPessoa($id_pessoa){
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        // COMANDO SQL
        $sql = $conexao->query("delete from pessoa where id_pessoa = '$id_pessoa' ");
    
        if(!$sql) {
            $msg = $conexao->error;
            return $msg;
        } else {
            return $sql;
        }
    }
}

?>