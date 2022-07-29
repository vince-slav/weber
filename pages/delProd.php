<?php
include "../connection.php";

$stmt = $conn->prepare("DELETE FROM produtos WHERE id = :ID");

$id = $_GET["id"];

$stmt->bindParam(":ID", $id);


if($stmt->execute()){
  header("location:../index2.php");
}else{
  header("location:cats.php");
}


?>
