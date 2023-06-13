<?php

session_start();

include_once('url.php');
include_once('connection.php');

$query = "SELECT * FROM contacts";

$contacts = [];

$stmt = $conn->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchAll();
