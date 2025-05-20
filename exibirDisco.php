<?php
require_once '../init.php';
$PDO = db_connect();
$stmt = $PDO->query('SELECT * FROM disco');
echo '<h1>discos</h1><a href="formAddDisco.html">Novo</a><table>';
foreach ($stmt as $row) {
    echo '<tr><td>'.$row['nome'].'</td><td><a href="formEditDisco.php?id='.$row['id'].'">Editar</a> <a href="deleteDisco.php?id='.$row['id'].'">Excluir</a></td></tr>';
}
echo '</table>';
?>






