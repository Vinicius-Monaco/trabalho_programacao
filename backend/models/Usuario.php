<?php

  class Usuario {
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

    public function __get($var) {
      if (property_exists($this, $var)) {
        return $this->$var;
      }
    }

    public function __set($atr, $var) {
      if (property_exists($this, $atr)) {
        $this->$atr = $var;
      }
    }
  }

?>