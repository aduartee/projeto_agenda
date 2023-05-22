<?php
require_once('templat/header.php')
?>

<div class="container1">
    <?php require_once('templat/backbtn.html'); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
        <input type="hidden" name="type" value="editar">
        <input type="hidden" name="id" value="<?= $contact["id"] ?>">
        <div class="form-group">
            <label for="name">Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $contact["name"] ?>" placeholder="Digite o nome" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone do contato</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact["phone"] ?>"  placeholder="Digite o telefone" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="observations">Informações do contato</label>
            <textarea type="text" class="form-control" id="observations" name="observations"  rows="3" placeholder="Digite as informações do contato" autocomplete="off"><?= $contact["observations"] ?></textarea>
        </div>

        <br />
        <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>

</div>
<?php
require_once('templat/footer.php')
?>