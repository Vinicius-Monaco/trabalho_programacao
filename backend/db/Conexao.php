<?php

try {
  $conexao = new PDO("mysql:host=localhost;dbname=trabalho_prog", "root", "");
  // Definir o modo de erro do PDO para Exception
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão bem-sucedida!";
} catch(PDOException $e) {
  echo "Erro de conexão: " . $e->getMessage();
}

?>