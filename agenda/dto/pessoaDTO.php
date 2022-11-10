<?php

class pessoaDTO{
    private $id_pessoa;
    private $ds_nome;
    private $cd_sexo;
    private $dt_nasc;
    private $nr_telefone;
    private $ds_email; 

    

    /**
     * Get the value of id_pessoa
     */ 
    public function getId_pessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * Set the value of id_pessoa
     *
     * @return  self
     */ 
    public function setId_pessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;

        return $this;
    }

    /**
     * Get the value of ds_nome
     */ 
    public function getDs_nome()
    {
        return $this->ds_nome;
    }

    /**
     * Set the value of ds_nome
     *
     * @return  self
     */ 
    public function setDs_nome($ds_nome)
    {
        $this->ds_nome = $ds_nome;

        return $this;
    }

    /**
     * Get the value of cd_sexo
     */ 
    public function getCd_sexo()
    {
        return $this->cd_sexo;
    }

    /**
     * Set the value of cd_sexo
     *
     * @return  self
     */ 
    public function setCd_sexo($cd_sexo)
    {
        $this->cd_sexo = $cd_sexo;

        return $this;
    }

    /**
     * Get the value of dt_nasc
     */ 
    public function getDt_nasc()
    {
        return $this->dt_nasc;
    }

    /**
     * Set the value of dt_nasc
     *
     * @return  self
     */ 
    public function setDt_nasc($dt_nasc)
    {
        $this->dt_nasc = $dt_nasc;

        return $this;
    }

    /**
     * Get the value of nr_telefone
     */ 
    public function getNr_telefone()
    {
        return $this->nr_telefone;
    }

    /**
     * Set the value of nr_telefone
     *
     * @return  self
     */ 
    public function setNr_telefone($nr_telefone)
    {
        $this->nr_telefone = $nr_telefone;

        return $this;
    }

    /**
     * Get the value of ds_email
     */ 
    public function getDs_email()
    {
        return $this->ds_email;
    }

    /**
     * Set the value of ds_email
     *
     * @return  self
     */ 
    public function setDs_email($ds_email)
    {
        $this->ds_email = $ds_email;

        return $this;
    }
}

?>