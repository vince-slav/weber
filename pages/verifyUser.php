<?php

session_start();
include "../connection.php";

$stmt = $conn->prepare("SELECT id, email, senha FROM users WHERE email = :EMAIL AND senha = :SENHA");
$stmt->execute([":EMAIL" => $_POST["email"], ":SENHA" => $_POST["senha"]]);

if($stmt->rowCount() == 1){
  $reg = $stmt->fetch(PDO::FETCH_ASSOC);

  $_SESSION["id"] = $reg["id"];
  header("location:../index2.php");

}else{
  header("location:../index.php");
}

?>
