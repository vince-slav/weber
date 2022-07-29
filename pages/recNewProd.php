<?php
include "../connection.php";

$stmt = $conn->prepare("INSERT INTO produtos (nome, preco, sit, id_cat) VALUES(:NOME, :PRECO, :SIT, :CAT)");

if ($stmt->execute([":NOME" => $_POST["nome"], ":PRECO" => $_POST["preco"], ":SIT" => $_POST["sit"], ":CAT" => $_POST["cat"]])) {
  header("location:../index2.php");
} else {
  header("location:newProd.php");
}
?>
