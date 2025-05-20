<?php
require_once '../init.php';
$PDO = db_connect();
$sql = 'INSERT INTO disco (nome_disco, valor, Artista_idArtista) VALUES (:nome_disco, :valor, :Artista_idArtista)';
$stmt = $PDO->prepare($sql);
$stmt->execute([
    ':nome_disco' => $_POST['nome_disco'],
    ':valor' => $_POST['valor'],
    ':Artista_idArtista' => $_POST['Artista_idArtista']
]);
header('Location: exibirDiscos.php');
?>

