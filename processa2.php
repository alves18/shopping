<?php

   $nome = $_POST["nome"];
   $datanasc = $_POST["datanasc"];
   $interesse = $_POST["interesse"];
   

    //$nome = $_GET["nome"];
    //$idade = $_GET["idade"];

    echo "Bem-vindo, ".$nome;
    echo "<br/>Sua data de nascimento é : ".$datanasc;
   // echo "<br/>Seu(s) interesse(s) é(são) em: ".$interesse;

    echo "<br/>Seu(s) interesse(s) é(são) em: ";
    foreach ($_POST["interesse"] as $item  ){
        echo $item;
        echo " e ";
    }

?>
