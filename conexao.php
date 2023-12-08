<?php 
    //Arquivo para conexão com o banco de dados no 000webhost;
    $servidor = "localhost";
    $usuario = "id21571594_luana";
    $senha = "Filtro2023!";
    $dbname = "id21571594_faleconosco";

    try{
        $conn = new PDO("mysql:host=$servidor;dbname=" . $dbname, $usuario, $senha);
    }

    catch (PDOException $err){
        die("Erro: a conexão com o banco de dados não teve êxito. Erro: " . $err->getMessage());
    }
?>
