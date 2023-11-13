<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id' ";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class= "light"> Editar Cliente </h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">
            <div class="input-field col s12">
                <input id="nome" name="nome" type="text" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field col s12">
                <input id="sobrenome" name="sobrenome" type="text" value="<?php echo $dados['sobrenome'];?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input id="email" name="email" type="text" value="<?php echo $dados['email'];?>">
                <label for="email">Email</label>
            </div> 
           
            <div class="input-field col s12">
                <input id="idade" name="idade" type="number" oninput="limitarTamanho(this, 3)" value="<?php echo $dados['idade'];?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" type="submit" class="btn green">Listar clientes</a>
        </form>
        
    </div>
</div>

<script>
function limitarTamanho(elemento, tamanhoMaximo) {
    if (elemento.value.length > tamanhoMaximo) {
        elemento.value = elemento.value.slice(0, tamanhoMaximo);
    }
}
</script>

<?php
// Footer
include_once 'includes/footer.php';
?>