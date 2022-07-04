<?php

class Pessoa
{
    private $nome_completo;
    private $nascimento;
    private $cpf;
    private $email;
    private $servico;
    private $pagamento;
    private $usuario;
    private $senha;


    /**
     * @return mixed
     */
    public function getNomeCompleto()
    {
        return $this->nome_completo;
    }

    /**
     * @param mixed $nome_completo
     */
    public function setNomeCompleto($nome_completo)
    {
        $this->nome_completo = $nome_completo;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * @param mixed $servico
     */
    public function setServico($servico)
    {
        $this->servico = $servico;
    }

    /**
     * @return mixed
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * @param mixed $pagamento
     */
    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


}

?>
