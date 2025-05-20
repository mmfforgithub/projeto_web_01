<?php
require_once '../init.php';
$PDO = db_connect();
$sql = 'INSERT INTO cliente (nome, email, telefone) VALUES (:nome, :email, :telefone)';
$stmt = $PDO->prepare($sql);
$stmt->execute([
    ':nome' => $_POST['nome'],
    ':email' => $_POST['email'],
    ':telefone' => $_POST['telefone']
]);
header('Location: exibirClientes.php');
?>
