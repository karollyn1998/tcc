<?php
require_once "conecta.php";

$nome = $_POST["nomeC"];
$endereco = $_POST["endereco"];


$sql = "INSERT INTO profis (fone, datanasc, nome, endereco, email, sexo, cargo, tipoS, estadoC)
VALUES ('$fone', '$dataNasc', '$nomeC', '$endereco', '$email', '$sexo', '$cargo', '$tipoS','$estadoC')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" ;
}


?>