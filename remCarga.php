<?php

    $id = trim($_POST['id']); 
   

   include 'conTransp.php';
    if (!empty($id) ){
        $sql = "DELETE from empregador WHERE id=?";

        $pdo = conTransp::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        conTransp::desconectar(); 
    }

    header("location:lstCarga.php"); 

?>