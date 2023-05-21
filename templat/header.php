<?php
require_once("config/url.php");
require_once("config/conect.php");
require_once("config/process.php");


if(isset($_SESSION['message'])){
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>AGENDA</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
  <meta charset="utf-8">
</head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
    <img src="<?= $BASE_URL ?>img/agenda.png" alt="agenda">
    <div class="navbar-nav">
      <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
      <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
    </div>
    </a>
  </nav>
<body>