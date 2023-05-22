 <?php
    require_once('templat/header.php')
    ?>

 <div class="container">
     <?php if (isset($printMsg) && $printMsg != "") : ?>
     <p id="msg">Teste mensagem</p>
     <?php endif; ?>

     <h1 id="maintitle">Minha agenda</h1>

     <?php if (count($contacts) > 0) : ?>
     <table class="table" id="contacts-table">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Nome</th>
                 <th scope="col">Telefone</th>
                 <th scope="col"></th>

             </tr>
         </thead>
         <tbody>
             <?php foreach ($contacts as $contact) :  ?>
             <tr>
                 <td scope="row" class="col-id"><?= $contact['id'] ?></td>
                 <td scope="row"><?= $contact['name'] ?></td>
                 <td scope="row"><?= $contact['phone'] ?></td>

                 <td class="actions">
                     <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id'] ?>"><i class="fas fa-eye check-icon"
                             title="Detalhes"></i></a>
                     <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact['id'] ?>"><i class="far fa-edit edit-icon"
                             title="Editar"></i></a>
                     <form action="<?= $BASE_URL ?>config/process.php" class="delete-form" method="post">
                         <input type="hidden" name="type" value="delete">
                         <input type="hidden" name = "id" value="<?= $contact["id"] ?>">

                         <button type="submit" class="delete-btn"> <i class="fas fa-times delete-icon" title="Deletar">
                             </i></button>
                     </form>
                 </td>
             </tr>
             <?php endforeach; ?>
         </tbody>
     </table>
     <?php else : ?>
     <p> Não existe contatos na agenda, <a href="<?= $BASE_URL ?>create.php">Adicionar contato</a></p>
     <?php endif; ?>

 </div>

 <?php
    require_once('templat/footer.php')
    ?>