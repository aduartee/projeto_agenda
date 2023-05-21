<?php

session_start();

require_once("conect.php");
require_once("url.php");

$data = $_POST;

if (!empty($data)) {
    if ($data["type"] == "create") {
        $name = $data['name'];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = " INSERT INTO contacts (name, phone, observations) 
                   VALUES ( :name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION['msg'] = "Contato criado";

        } catch (PDOException $e) {

            $error = $e->getMessage();
            echo "error: $error";
        }
    }

    // Redireciona para a home

    header("Location:" . $BASE_URL. "../index.php");
} else {

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
}

// FECHANDO A CONEXÃO

