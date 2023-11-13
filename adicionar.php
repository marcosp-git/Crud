<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class= "light"> Novo Cliente </h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input id="nome" name="nome" type="text">
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field col s12">
                <input id="sobrenome" name="sobrenome" type="text">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input id="email" name="email" type="email">
                <label for="email">Email</label>
            </div> 
           
            <div class="input-field col s12">
                <input id="idade" name="idade" type="number" oninput="limitarTamanho(this, 3)">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
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