<?php
class Usuario
{
  private $id;
  private $email;
  private $nome;
  private $senha;
  private $foto;
  private $data_nascimento;
  private $celular;
  private $data_cadastro;
  private $sys_whats;
  private $sys_email_confirmado;
  private $sys_confirmado_termos_de_uso;

  public function getId()
  {
    return $this->id;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function getFoto()
  {
    return $this->foto;
  }

  public function getDataNascimento()
  {
    return $this->data_nascimento;
  }

  public function getCelular()
  {
    return $this->celular;
  }

  public function getDataCadastro()
  {
    return $this->data_cadastro;
  }

  public function getSysWhats()
  {
    return $this->sys_whats;
  }

  public function getSysEmailConfirmado()
  {
    return $this->sys_email_confirmado;
  }

  public function getSysConfirmadoTermosDeUso()
  {
    return $this->sys_confirmado_termos_de_uso;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  public function setFoto($foto)
  {
    $this->foto = $foto;
  }

  public function setDataNascimento($data_nascimento)
  {
    $this->data_nascimento = $data_nascimento;
  }

  public function setCelular($celular)
  {
    $this->celular = $celular;
  }

  public function setDataCadastro($data_cadastro)
  {
    $this->data_cadastro = $data_cadastro;
  }

  public function setSysWhats($sys_whats)
  {
    $this->sys_whats = $sys_whats;
  }

  public function setSysEmailConfirmado($sys_email_confirmado)
  {
    $this->sys_email_confirmado = $sys_email_confirmado;
  }

  public function setSysConfirmadoTermosDeUso($sys_confirmado_termos_de_uso)
  {
    $this->sys_confirmado_termos_de_uso = $sys_confirmado_termos_de_uso;
  }
}

?>