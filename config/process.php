<?php 

session_start();

require_once("conect.php");
require_once("url.php");


$query = "SELECT * FROM contacts";

$stmt = $conn->prepare($query);

$stmt -> execute();

$contacts = $stmt->fetchAll();
