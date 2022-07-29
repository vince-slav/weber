<?php
include "../connection.php";

$stmt = $conn->prepare("INSERT INTO categorias (nome, descr) VALUES(:NOME, :DESCR)");

if ($stmt->execute([":NOME" => $_POST["nome"], ":DESCR" => $_POST["descr"]])) {
  header("location:../index2.php");
} else {
  header("location:newCat.php");
}
?>
