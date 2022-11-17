<?php

   $nome = $_POST["nome"];
   $idade = $_POST["idade"];
   $sexo = $_POST["sexo"];
   

    //$nome = $_GET["nome"];
    //$idade = $_GET["idade"];

    echo "Bem-vindo, ".$nome;
    echo "<br/>Idade: ".$idade;
    echo "<br/>Sexo: ".$sexo;

    echo "<br/>Estilo: ";
    foreach ($_POST["estilo"] as $item  ){
        echo $item;
    }

?>
