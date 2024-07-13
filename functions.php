<?php
// functions.php
require 'db.php';

function get_questions($pdo) {
    $stmt = $pdo->query("SELECT * FROM questions_reponses_view ORDER BY id_questions DESC");
    return $stmt->fetchAll();
}

function insert_questions($pdo, $data) {
    $sql = "INSERT INTO questions (nom, email, question) VALUES (:nom, :email, :question)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    return $pdo->lastInsertId();
}
?>
