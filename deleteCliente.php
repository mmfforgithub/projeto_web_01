<?php
require_once '../init.php';
$id = $_GET['id'];
$PDO = db_connect();
$stmt = $PDO->prepare('DELETE FROM cliente WHERE id = :id');
$stmt->execute([':id' => $id]);
header('Location: exibirClientes.php');
?>