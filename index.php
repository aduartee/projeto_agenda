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
                             <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id']?>"><i class="fas fa-eye check-icon" title="Detalhes"></i></a>
                             <a href="<?= $BASE_URL ?>edit.php"><i class="far fa-edit edit-icon" title="Editar"></i></a>
                             <button type="submit" class="delete-btn"> <i class="fas fa-times delete-icon" title="Deletar"> </i></button>
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