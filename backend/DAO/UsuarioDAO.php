<?php

require_once ('../db/Conexao.php');
require_once ('../models/Usuario.php');

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
    try {

      $sql = "INSERT INTO Usuario (id_usuario, nome, email, senha, foto, data_nascimento, celular, data_cadastro, sys_whats, sys_email_confirmado, sys_confirmado_termos_de_uso) VALUES (:id_usuario, :nome, :email, :senha, :foto, :data_nascimento, :celular, :data_cadastro, :sys_whats, :sys_email_confirmado, :sys_confirmado_termos_de_uso)";
      $stmt = $this->conexao->prepare($sql);
      $stmt->bindParam(":id_usuario", $usuario->getId());
      $stmt->bindParam(":nome", $usuario->getNome());
      $stmt->bindParam(":email", $usuario->getEmail());
      $stmt->bindParam(":senha", $usuario->getSenha());
      $stmt->bindParam(":foto", $usuario->getFoto());
      $stmt->bindParam(":data_nascimento", $usuario->getDataNascimento());
      $stmt->bindParam(":celular", $usuario->getCelular());
      $stmt->bindParam(":data_cadastro", $usuario->getDataCadastro());
      $stmt->bindParam(":sys_whats", $usuario->getSysWhats());
      $stmt->bindParam(":sys_email_confirmado", $usuario->getSysEmailConfirmado());
      $stmt->bindParam(":sys_confirmado_termos_de_uso", $usuario->getSysConfirmadoTermosDeUso());
      return $stmt->execute();
    } catch (Exception $th) {
      print "Erro ao inserir usuário";
    }
  }

  public function getUsuarios()
  {
    $sql = "SELECT * FROM Usuario";
    $stmt = $this->conexao->prepare($sql);
    return $stmt->execute();
  }
}

?>