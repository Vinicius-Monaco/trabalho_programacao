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
    $usuario->getNome() = $dadosFormulario["nome"];
    $usuario->getEmail() = $dadosFormulario["email"];
    $usuario->getSenha() = $dadosFormulario["senha"];
    $usuario->getFoto() = $dadosFormulario["foto"];
    $usuario->getDataNascimento() = $dadosFormulario["data_nascimento"];
    $usuario->getCelular() = $dadosFormulario["celular"];
    $usuario->getDataCadastro() = $dadosFormulario["data_cadastro"];
    $usuario->getSysWhats() = $dadosFormulario["sys_whats"];
    $usuario->getSysEmailConfirmado() = $dadosFormulario["sys_email_confirmado"];
    $usuario->getSysConfirmadoTermosDeUso() = $dadosFormulario["sys_confirmado_termos_de_uso"];
    $this->usuarioDAO->salvaUsuario($usuario);
  }
}

?>