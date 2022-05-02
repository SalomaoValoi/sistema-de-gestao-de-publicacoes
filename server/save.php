<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['artigos'])){
        if($_POST['titulo']==''){
            $_SESSION['error']="Digite o titulo";
            return header('location:../artigos.php');
            }
        if($_POST['texto']==''){
             $_SESSION['error']="Digite o texto";
             return header('location:../artigos.php');
            }
            else{
                if(isset($_SESSION['tempo'])){
                if(time()-$_SESSION['tempo']>300){
  
                    header('location:..index.php');
                }}
                $_SESSION['tempo']=time();
                include_once 'conexao.php';
                $cat=$_POST['categoria'];
                if(isset($_POST['check-nova'])){
                    if(isset($_POST['nova-categoria'])){
                        $sql='insert into categoria(nome) values(:nome)';
                        $prep=$conexao->prepare($sql);
                        $prep->bindValue(':nome',$_POST['nova-categoria']);
                        if($prep->execute()){
                            $sql='select * from categoria order by id desc';
                            $prep=$conexao->prepare($sql);
                            $prep->execute();
                            $categoria=$prep->fetch(PDO::FETCH_ASSOC);
                            $cat=$categoria['id'];
                    }
                }
            }

                $sql='insert into artigo(titulo,texto,categoria,autor) values(:titulo,:texto,:cat,:autor)';
                $prep=$conexao->prepare($sql);
                $prep->bindValue(':titulo',$_POST['titulo']);
                $prep->bindValue(':texto',$_POST['texto']);
                $prep->bindValue(':cat',$cat);
                $prep->bindValue(':autor',$_POST['autor']);
                if($prep->execute()){
                    $_SESSION['success']='Artigo cadastrado com sucesso';
                    return header('location:../artigos.php');
                }
                else{
                    $_SESSION['arror']='Erro ao cadastrar artigo';
                    return header('location:../artigos.php'); 
                }
               }
         
 

    }
}