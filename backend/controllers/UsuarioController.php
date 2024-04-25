<?php
require_once ("../DAO/UsuarioDAO.php");
require_once ("../models/Usuario.php");
class UsuarioController
{
  private $usuarioDAO;
  public function __construct()
  {
    $this->usuarioDAO = new UsuarioDAO();
  }
  public function cadastraUsuario($dadosFormulario)
  {
    $usuario = new Usuario();
    $usuario->nome = $dadosFormulario["nome"];
    $usuario->email = $dadosFormulario["email"];
    $usuario->senha = $dadosFormulario["senha"];
    $usuario->foto = $dadosFormulario["foto"];
    $usuario->data_nascimento = $dadosFormulario["data_nascimento"];
    $usuario->celular = $dadosFormulario["celular"];
    $usuario->data_cadastro = $dadosFormulario["data_cadastro"];
    $usuario->sys_whats = $dadosFormulario["sys_whats"];
    $usuario->sys_email_confirmado = $dadosFormulario["sys_email_confirmado"];
    $usuario->sys_confirmado_termos_de_uso = $dadosFormulario["sys_confirmado_termos_de_uso"];
    $this->usuarioDAO->salvaUsuario($usuario);
  }
}

?>