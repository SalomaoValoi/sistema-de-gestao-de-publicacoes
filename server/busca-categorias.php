<?php
require_once 'conexao.php';

$sql='select * from categoria order by nome asc';
$prep=$conexao->prepare($sql);
$prep->execute();
$categorias=$prep->fetchAll(PDO::FETCH_ASSOC);




