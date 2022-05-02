<?php
include_once 'header.php';
if(!isset($_SESSION['usuario'])){
    return header('location:server/terminar.php');
 }
 if(time()-$_SESSION['tempo']>300){
   
     header('location:erros.php');
 }
 $_SESSION['tempo']=time();

?>
<div class="card mt-2">
    <div class="card-header bg-nav text-white py-1">
        <span><i class="fa-solid fa-newspaper mx-2"></i>Novo artigo</span>
        <div class="float-end">
            <a href="artigos.php" class="btn btn-sm text-white fw-bold btn-novo"><i
                    class="fas fa-list mx-1"></i>Listar</a>
        </div>

    </div>
    <div class="card-body">
        <form action="server/save.php" method="POST">
            <div class="form-group">
                <?php if(isset($_SESSION['error'])){?>
                <div class="alert alert-danger my-3">
                    <?php echo $_SESSION['error']; ?>
                </div>
                <?php unset($_SESSION['error']);}
    
    else if(isset($_SESSION['success'])){?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success'];?>
                </div>
                <?php unset($_SESSION['success']);}?>
            </div>
            <div class="form-group">
                <label class="obrigatorio" for="titulo">Categoria</label>
                <input type="text" class="form-control d-none" name="nova-categoria" id="hiden"
                    placeholder="Digite o nome da categoria">
                <select class="form-select form-control" name="categoria" id="categorias">

                    <option value="0">Selecione o nome da categoria ...</option>
                    <?php
                        include_once 'server/busca-categorias.php';
                        foreach($categorias as $cat){
                    ?>

                    <option value="<?php echo $cat['id'];?>"><?php echo $cat['nome'];?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" id="check-categoria" name="check-nova" value="1">
                <label for="check-categoria" class="form-check-label">Nova categoria</label>
            </div>

            <div class="form-group mt-2">
                <label class="obrigatorio" for="autor">Autor</label>
                <select class="form-select form-control" name="autor">

                    <option value="0">Selecione o nome do autor...</option>
                    <?php
                        include_once 'server/busca-autores.php';
                         foreach($autores as $autor){
                        ?>

                    <option value="<?php echo $autor['id'];?>"><?php echo $autor['nome'];?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label class="obrigatorio" for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" placeholder="Digite o titulo do artigo">
            </div>
            <div class="form-group mt-2">
                <label class="obrigatorio" for="titulo">Texto</label>
                <textarea class="form-control" name="texto" cols="30" rows="7"></textarea>

            </div>
            <div class="form-group mt-3">
                <div class="form-row">
                    <button class="btn btn-success col-md-2 col-sm-12" name="artigos"><i class="fas fa-plus-circle"></i>
                        Salvar</button>
                    <button type="reset" class="btn btn-danger col-md-2 col-sm-12 mx-2"> <i
                            class="fa-solid fa-times-circle"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
var box = document.getElementById("check-categoria");

function checked() {

    if (box.checked) {
        document.getElementById("categorias").style.display = "none";
        document.getElementById("hiden").classList.remove("d-none")
    } else {
        document.getElementById("categorias").style.display = "block";
        document.getElementById("hiden").classList.toggle("d-none")
    }
}
box.addEventListener('click', function() {
    checked()
});
</script>
<?php
include_once 'footer.php';


?>