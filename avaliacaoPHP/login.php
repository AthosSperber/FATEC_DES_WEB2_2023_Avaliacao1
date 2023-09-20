<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "portaria" && $password === "FatecAraras") {
        $_SESSION["authenticated"] = true;
        header("Location: cadastrar_aluno.php");
        exit;
    } else {
        echo "Usuário ou senha incorretos. Tente novamente.";
    }
}
?>
