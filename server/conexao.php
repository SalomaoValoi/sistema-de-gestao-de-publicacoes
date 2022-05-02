<?php

$db_dns='localhost';
$db_name='preparacao_pwa2022';
$server_name="mysql:host={$db_dns}; dbname={$db_name}";
$db_user='root';
$db_password='';

$conexao=new PDO($server_name,$db_user,$db_password);