<?php

session_start();

require_once("conect.php");
require_once("url.php");

$id;

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
}

if (!empty($id)) {
    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contact = $stmt->fetch();


} else {
    $contacts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();
}

// Retornando todos os contatos
