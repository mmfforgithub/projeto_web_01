<?php
require_once '../init.php';
$PDO = db_connect();
$sql = 'UPDATE disco SET nome_disco = :nome_disco, valor = :valor, Artista_idArtista = :Artista_idArtista WHERE id = :id';
$stmt = $PDO->prepare($sql);
$stmt->execute([
    ':nome_disco' => $_POST['nome_disco'],
    ':valor' => $_POST['valor'],
    ':Artista_idArtista' => $_POST['Artista_idArtista'],
    ':id' => $_POST['id']
]);
header('Location: exibirDiscos.php');
?>