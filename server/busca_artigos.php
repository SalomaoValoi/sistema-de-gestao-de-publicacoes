<?php

require_once 'conexao.php';

if($_SERVER['REQUEST_METHOD']=='GET'){

   $sql="select artigo.*, autor.id as 'id-autor', autor.nome as 'nome-autor'  from artigo join categoria on
        artigo.categoria=categoria.id join autor on artigo.autor=autor.id order by id asc";
        $prep=$conexao->prepare($sql);
        if($prep->execute()){
        $artigos=$prep->fetchAll(PDO::FETCH_ASSOC);
    

        }
    }