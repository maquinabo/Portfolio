<?php
session_start();
require_once 'classes/SubUsuariosVO.php';
require_once 'classes/SubUsuariosDAO.php';

$objSubUsuario=new SubUsuariosVO();

$nome=$_GET['nome_SUBUSUARIO'];
$apelido=$_GET['apelido_SUBUSUARIO'];

$objBDSubUsuario= new SubUsuariosDAO();
$objSubUsuario=$objBDSubUsuario->loginSubUsuario($nome,$apelido);

$_SESSION['nom']=$objSubUsuario->getNomeSubUsuario();
$_SESSION['apelid']=$objSubUsuario->getApelidoSubUsuario(); 

$_SESSION['ms']= "Olá, ". $_SESSION['nom']."!"; 
    ?>