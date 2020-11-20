<?php
require_once "conecta.php";

$nomeC = $_POST["nomeC"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$fone = $_POST["fone"];
$dataNasc = $_POST["dataNasc"];
$cargo = $_POST["cargo"];
$sexo = $_POST["sexo"];
$estadoC = $_POST["estadoC"];
$tipoS = $_POST["tipoS"];


$sql = "INSERT INTO profis (fone, datanasc, nome, endereco, email, sexo, cargo, tipoS, estadoC)
VALUES ('$fone', '$dataNasc', '$nomeC', '$endereco', '$email', '$sexo', '$cargo', '$tipoS','$estadoC')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" ;
}
?>