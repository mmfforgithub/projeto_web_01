<?php
require_once '../init.php';
$PDO = db_connect();
$stmt = $PDO->query('SELECT * FROM cliente');
echo '<h1>Clientes</h1><a href="formAddCliente.html">Novo</a><table>';
foreach ($stmt as $row) {
    echo '<tr><td>'.$row['nome'].'</td><td><a href="formEditCliente.php?id='.$row['id'].'">Editar</a> <a href="deleteCliente.php?id='.$row['id'].'">Excluir</a></td></tr>';
}
echo '</table>';
?>