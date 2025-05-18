<?php
require_once '../init.php';
$PDO = db_connect();
$sql = 'UPDATE cliente SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id';
$stmt = $PDO->prepare($sql);
$stmt->execute([
    ':nome' => $_POST['nome'],
    ':email' => $_POST['email'],
    ':telefone' => $_POST['telefone'],
    ':id' => $_POST['id']
]);
header('Location: exibirClientes.php');
?>