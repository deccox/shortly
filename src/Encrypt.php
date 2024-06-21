<?php


declare (strict_types=1);


namespace App;


class Encrypt{

    private static string $method = "AES-256-CBC";


    public static function Encurtador(string $url):string{

        $iv = openssl_random_pseudo_bytes ( openssl_cipher_iv_length ( self::$method )); 
        $encrypted = openssl_encrypt ( $url , self::$method , "secret" , 0 , $iv );

        $encrypted = preg_replace('/\W/', '', $encrypted);

        return substr($encrypted, 0, 9);
    }

    
}
?>

