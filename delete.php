<?php

    if(!empty($_GET['id']))
    {
        include_once('localhost/TCC/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM cadastro WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cadastro WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: localhost/TCC/questionarioLogin.php');
   
?>