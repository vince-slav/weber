<?php

try{
  $conn = new PDO("mysql:host=localhost;dbname=weberdb", "root", "root");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err){
  echo "Erro ao tentar conectar: ".$err->getMessage();
}

?>
