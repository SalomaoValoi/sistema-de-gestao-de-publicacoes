<?php
require_once 'conexao.php';

$sql='select * from autor order by nome asc';
$prep=$conexao->prepare($sql);
$prep->execute();
$autores=$prep->fetchAll(PDO::FETCH_ASSOC);




