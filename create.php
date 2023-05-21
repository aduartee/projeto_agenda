 <?php
  require_once('templat/header.php')
  ?>

 <div class="container1">
   <?php require_once('templat/backbtn.html'); ?>
   <h1 id="main-title">Criando contato</h1>
   <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
     <input type="hidden" name="type" value="create">
     <div class="form-group">
       <label for="name">Nome do contato</label>
       <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" autocomplete="off" required>
     </div>

     <div class="form-group">
       <label for="phone">Telefone do contato</label>
       <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" autocomplete="off" required>
     </div>
    
     <div class="form-group">
       <label for="phone">Informações do contato</label>
       <textarea type="text" class="form-control" id="phone" name="phone" rows="3" placeholder="Digite as informações do contato" autocomplete="off"></textarea>
     </div>

     <br/>
     <button type="submit" class="btn btn-primary">Cadastrar</button>

   </form>

 </div>
 <?php
  require_once('templat/footer.php')
  ?>