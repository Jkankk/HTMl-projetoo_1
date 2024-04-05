<?php
require_once './config.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$datas = $_POST['datas'];
$hora = $_POST['hora'];



$sql = "INSERT INTO usuario (nome, cpf, email, telefone, datas, hora) VALUES (:nome, :cpf, :email, :telefone, :datas, :hora)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':cpf', $cpf);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':telefone', $telefone);
$stmt->bindValue(':datas', $datas);
$stmt->bindValue(':hora', $hora);
$stmt->execute();

if($stmt->rowCount() > 0){
    header("Location: ../index.html");
}else{
    echo "Erro ao criar sala";
}   