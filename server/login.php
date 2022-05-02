<?php

session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['username']) && $_POST['username']==''){
$_SESSION['error']='Digite o username';
return header('location: ../index.php');
    }
    else if(isset($_POST['senha']) && $_POST['senha']==''){
        $_SESSION['error']='Digite a senha';
        return header('location: ../index.php');
            }

            else{
                $usuario=null;
                require_once 'conexao.php';
                $sql='select * from autor where username=:user and password=:pass';
                $prep=$conexao->prepare($sql);
                $prep->bindValue(':user',$_POST['username']);
                $prep->bindValue(':pass',$_POST['senha']);
                $prep->execute();

                $usuario=$prep->fetch(PDO::FETCH_ASSOC);

                if($usuario==null){
                    $_SESSION['error']='Username ou senha invalido(s)';
                    return header('location: ../index.php');
                }
                else{
                    $_SESSION['usuario']=$usuario;
                    $_SESSION['tempo']=time();
                    return header('location:../home.php');
                }
            }
}