<?php

session_start();

require_once './classes/SubUsuariosDAO.php';
require_once './classes/SubUsuariosVO.php';
require_once './classes/UsuariosDAO.php';

$objSubUsuario=new SubUsuariosVO();
$objBDSubUsuario= new SubUsuariosDAO();
$objBDUsuario=new UsuariosDAO();

$login=$_SESSION['login'];
$email=$_SESSION['email'];
$codigo=$_GET['codUser'];

$tmpLogin=$objBDSubUsuario->loginSubUsuario($codigo);

if($tmpLogin==null){
    
    
    return null;
    
}else{
   $objSubUsuario=$tmpLogin;
   $_SESSION['apelido']=$objSubUsuario->getApelidoSubUsuario();
   $_SESSION['statu']=true;
    
   $objBDUsuario->alteraLogin($email);
   
  
    header("location:index.php");
    

}