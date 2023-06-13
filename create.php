<?php
include_once("templates/header.php");
?>

<div class = "container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id = "main-title">Criar Contato</h1>
    <form action="<?$BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name = "type" value="create">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="form-control"
         placeholder="Digite um nome" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" name="phone" id="phone" class="form-control"
         placeholder="Digite um telefone" required>
    </div>
    <div class="form-group">
        <label for="observations">Observacao</label>
        <textarea type="text" name="observations" id="observations" class="form-control"
         placeholder="Digite a Observacao se quiser" rows="3" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Criar Contato</button>
    </form>



</div>

<?php 
include_once("templates/footer.php");
?>
