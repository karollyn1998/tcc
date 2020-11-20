<?php
require_once "conecta.php";

$descricao = $_POST["descricao"];
$situacao = $_POST["situacao"];
$data = $_POST["data"];
$hora = $_POST["hora"];
$chefsoc = $_POST["chefsoc"];
$numpes = $_POST["numpes"];
$camnesc = $_POST["camnesc"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$compl = $_POST["compl"];
$pontoref = $_POST["pontoref"];
$procedimento = $_POST["procedimento"];
$viatura = $_POST["viatura"];
$tipoAt = $_POST["tipoAt"];


$sql = "INSERT INTO atend (descricao,situacao,data, hora, chefsoc, numpes, camnesc, cidade, bairro, compl, pontoref, procedimento, viatura,tipoAt)VALUES ($descricao, $situacao,$data, $hora, $chefsoc, $numpes,$camnesc, $cidade,$bairro, $compl, $pontoref,$procedimento, $viatura, $tipoAt)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" ;
}


?>
