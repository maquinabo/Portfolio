<?php

require_once 'classes/UsuariosVO.php';
require_once 'classes/UsuariosDAO.php';

$objUsuario=new UsuariosVO();


$nome=$_POST['HTML_nome_USUARIO'];
$email= $_POST['HTML_email_USUARIO'];
$sobrenome=$_POST['HTML_sobrenome_USUARIO'];
$senha= md5($_POST['HTML_senha_USUARIO']);

$objBDUsuario=new UsuariosDAO();
    
    if($objBDUsuario->verificaUsuario($email)==true){
$objUsuario->setEmailUsuario($email);
$objUsuario->setSenhaUsuario($senha);
$objUsuario->setNomeUsuario($nome);
$objUsuario->setSobrenomeUsuario($sobrenome);
//$objUsuario->setCodigoPermissaoUsuario(0);

/*$objUsuario->setEmailUsuario("juka@juja");
$objUsuario->setSenhaUsuario("121323");
$objUsuario->setNomeUsuario("junior");
$objUsuario->setCodigoPermissaoUsuario(1);
$objUsuario->setCodigoNivelUsuario(1);
$objUsuario->setCodigoPersonagemUsuario(1);

*/
$objBDUsuario->cadastraUsuario($objUsuario); 
//efetuando cadastro
//$objBDUsuario->cadastraUsuario($objUsuario); 

      }
   /*  echo("Email = ".$objUsuario->getEmailUsuario());//     cadastrei
     echo("Senha = ".$objUsuario->getSenhaUsuario());//     cadastrei
     echo("Nome = ".$objUsuario->getNomeUsuario());//     cadastrei
     echo("Permi = ".$objUsuario->getCodigoPermissaoUsuario());//     cadastrei

     */
      header("location:index.php");
     
//efetuando cadastro

      ?>