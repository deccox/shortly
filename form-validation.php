<?php

session_start();

require('vendor\autoload.php');

use GuzzleHttp\Client;
use App\Encrypt;

extract($_POST);


if(!isset($url)){
    http_response_code(400);
    echo json_encode(array("error" => "Campo 'url' é obrigatório."));
    exit;
}

if (strlen($url) == 1){
    http_response_code(400); 
    exit;
}



// Processamento do formulário...
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $dados = Encrypt::Encurtador($url);
    // Armazena os dados em uma variável de sessão
    $_SESSION['short_url'] = $dados; 
    
    header("Location: index.php");    
    exit();
}



header("Location: index.php");
exit();



?>