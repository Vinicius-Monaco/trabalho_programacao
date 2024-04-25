<?php
  class Conexao {
  function getConexao() {
    try {
      $conexao = new PDO("mysql:host=localhost;dbname=trabalho_prog", "root", "");
      return $conexao;
    } catch(PDOException $e) {
      echo "Erro de conexão: " . $e->getMessage();
    }    
  }
}

?>