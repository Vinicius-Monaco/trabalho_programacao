<?php

require_once ('../db/Conexao.php');
require_once ('../model/Usuario.php');

class UsuarioDAO
{
  private $conexao;

  public function __construct()
  {
    $conexao = new Conexao();
    $this->conexao = $conexao->getConexao();
  }

  public function salvaUsuario(Usuario $usuario)
  {
    $sql = "INSERT INTO Usuario (nome, email, senha, foto, data_nascimento, celular, data_cadastro, sys_whats, sys_email_confirmado, sys_confirmado_termos_de_uso) VALUES (:nome, :email, :senha, :foto, :data_nascimento, :celular, :data_cadastro, :sys_whats, :sys_email_confirmado, :sys_confirmado_termos_de_uso)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindParam(":nome", $usuario->nome);
    $stmt->bindParam(":email", $usuario->email);
    $stmt->bindParam(":senha", $usuario->senha);
    $stmt->bindParam(":foto", $usuario->foto);
    $stmt->bindParam(":data_nascimento", $usuario->data_nascimento);
    $stmt->bindParam(":celular", $usuario->celular);
    $stmt->bindParam(":data_cadastro", $usuario->data_cadastro);
    $stmt->bindParam(":sys_whats", $usuario->sys_whats);
    $stmt->bindParam(":sys_email_confirmado", $usuario->sys_email_confirmado);
    $stmt->bindParam(":sys_confirmado_termos_de_uso", $usuario->sys_confirmado_termos_de_uso);
    return $stmt->execute();
  }
}

?>