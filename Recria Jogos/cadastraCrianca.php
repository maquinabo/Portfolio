<?php
session_start();
require_once 'classes/SubUsuariosVO.php';
require_once 'classes/SubUsuariosDAO.php';

$objSubUsuario=new SubUsuariosVO();


$nome=$_POST['HTML_nome_SUBUSUARIO'];
$apelido= $_POST['HTML_apelido_SUBUSUARIO'];
//$email= $_POST['HTML_subemail_SUBUSUARIO'];


$objBDSubUsuario=new SubUsuariosDAO();
    
$objSubUsuario->setApelidoSubUsuario($apelido);
//$objSubUsuario->setEmailSubUsuario($email);
$objSubUsuario->setNomeSubUsuario($nome);

$objBDSubUsuario->cadastraSubUsuario($objSubUsuario); 
//efetuando cadastro

header ("location:gerenciar.php")
      ?>