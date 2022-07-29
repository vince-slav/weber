<?php
include "../connection.php";

$res = $conn->prepare("SELECT * categorias WHERE id = :ID)");
$reg = $res->fetch();

$stmt = $conn->prepare("UPDATE categorias SET nome = :NOME, descr :DESCR WHERE id = :ID)");

if ($stmt->execute([":NOME" => $_POST["nome"], ":DESCR" => $_POST["descr"], ":ID" => $_GET["id"]])) {
  header("location:../index2.php");
} else {
  header("location:newCat.php");
}
?>
