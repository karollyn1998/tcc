<?php
require_once "conecta.php";

$datarev = $_POST["data"];
$ano = $_POST["ano"];
$placa = $_POST["placa"];
$tipoV = $_POST["tipoV"];
$quilometragem = $_POST["quilom"];
$modelo = $_POST["modelo"];
$combustivel = $_POST["combustivel"];
$marcas = $_POST["marcas"];

$sql = "INSERT INTO viatura (marcas, comb, quilom, placa, modelo, ano, datarev)
VALUES ('$marcas', '$combustivel', '$quilometragem', '$placa', '$modelo', '$ano', '$datarev')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" ;
}


?>