<?php
session_start();

    $_SESSION['email']="";
    $_SESSION['nome']="";
    $_SESSION['idade']="";
    $_SESSION['apelido']="";
    $_SESSION['nivel']="";
    $_SESSION['personagem']="";
    $_SESSION['permissao']="";
    $_SESSION['status']= false;
    $_SESSION['msg']= "";
    
    header("location:../index.php");
    ?>
