<?php
include_once 'header.php';
if(!isset($_SESSION['usuario'])){
    return header('location:server/terminar.php');
 }
 if(time()-$_SESSION['tempo']>300){
   
     header('location:erros.php');
 }
 $_SESSION['tempo']=time();

require_once 'server/conexao.php'; 
if(isset($_GET['categoria'])){
        $sql="select artigo.*, autor.id as 'id-autor', autor.nome as 'nome-autor'  from artigo join categoria on
artigo.categoria=categoria.id join autor on artigo.autor=autor.id where artigo.categoria=:id order by artigo.titulo asc ";
$prep=$conexao->prepare($sql);
$prep->bindValue(':id',$_GET['categoria']);
if($prep->execute()){
        $artigos=$prep->fetchAll(PDO::FETCH_ASSOC);
        

}}

?>

<div class="card mt-2 border-0">
    <div class="card-header bg-nav text-white py-1">
        <span><i class="fa-solid fa-list mx-2"></i>Lista de Artigos</span>
        <div class="float-end">
            <a href="artigos.php" class="btn btn-sm text-white fw-bold btn-novo"><i
                    class="fas fa-plus mx-1"></i>Novo</a>
        </div>

    </div>
    <div class="card-body">
        <?php 
foreach($artigos as $artigo){


?>
        <div class="card mb-3">
            <div class="card-header bg-danger py-1 text-white">

                <span class="fw-bold"><?php echo $artigo['titulo']?></span>
                <span class="float-end"><strong>Artigo nº: <?php echo $artigo['id']?></strong></span>
            </div>
            <div class="card-body texto">
                <p class="px-3">
                    <?php echo $artigo['texto'] ?>
                </p>
            </div>
            <div class="card-footer bg-white">
                <span class="text-muted"><strong>Autor: </strong> <span
                        class="text-danger fw-bold"><?php echo $artigo['nome-autor'] ?></span></span>
                <div class="float-end d-flex">
                    <?php if($artigo['autor']==$_SESSION['usuario']['id']) {?>
                    <a href="" class="btn btn-sm bg-edit">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-danger mx-2">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>

</div>

<script>

   url=document.location.pathname.substr(document.location.pathname.lastIndexOf("/")+1)
   
   a=document.querySelector("[href*='"+url+"']")
   li=a.classList.toggle('active');
  //alert(a)
 
</script>


<?php

include_once 'footer.php'

?>