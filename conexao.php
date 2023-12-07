<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "contato";

    try{
        $conn = new PDO("mysql:host=$servidor;dbname=" . $dbname, $usuario, $senha);
        //echo "conectado com êxito!";
    }

    catch (PDOException $err){
        die("Erro: a conexão com o banco de dados não teve êxito. Erro: " . $err->getMessage());
    }
?>