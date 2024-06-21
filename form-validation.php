<?php

session_start();
require('vendor\autoload.php');
use App\Encrypt;

// Processamento do formulário...
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['url'])){
        header("Location: index.php");
        exit();
    }

    $url = $_POST["url"];

    $dados = Encrypt::Encurtador($url);
    
    // Armazena os dados em uma variável de sessão
    $_SESSION['short_url'] = $dados; 
    
    header("Location: index.php");
    exit();
} else {
    // Redireciona para o index.php
    header("Location: index.php");
    exit();
}




?>