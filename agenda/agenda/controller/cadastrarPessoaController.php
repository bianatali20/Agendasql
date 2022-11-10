<?php
            require_once '../dto/pessoaDTO.php';
            require_once '../dao/pessoaDAO.php';

            $id_pessoa = $_POST['id_pessoa'];
            $ds_nome = $_POST['ds_nome'];
            $cd_sexo = $_POST['cd_sexo'];
            $dt_nasc = $_POST['dt_nasc'];
            $nr_telefone = $_POST['nr_telefone'];
            $ds_email = $_POST['ds_email'];

            $pessoaDTO = new pessoaDTO();
            $pessoaDTO->setId_pessoa($id_pessoa);
            $pessoaDTO->setDs_nome($ds_nome);
            $pessoaDTO->setCd_sexo($cd_sexo);
            $pessoaDTO->setDt_nasc($dt_nasc);
            $pessoaDTO->setNr_telefone($nr_telefone);
            $pessoaDTO->setDs_email($ds_email);

            $pessoaDAO = new pessoaDAO();
            $ok = $pessoaDAO->cadastrarPessoa($pessoaDTO);   

            // MENSAGEM AO USUÁRIO
            if ($ok){
                echo "<script>alert('Cadastrado com sucesso.')
                    window.location = '../view/listarAllPessoa.php'
                </script>";
            }


            ?>