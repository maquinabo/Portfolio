
<?php

session_start();

require_once "classes/UsuariosDAO.php";
require_once "classes/UsuariosVO.php";

$objUsuario= new UsuariosVO();
$objBDUsuario= new UsuariosDAO();

$email=$_POST['HTML_email_USUARIO'];
$senha= md5($_POST['HTML_senha_USUARIO']);


$tmpLogin=$objBDUsuario->loginUsuario($email, $senha);

if($tmpLogin==null){
    //dados invalidos
   echo 'esta errado';
   
}else{
    $objUsuario=$tmpLogin;
    
    $_SESSION['email']=$objUsuario->getEmailUsuario();
    $_SESSION['nome']=$objUsuario->getNomeUsuario();
    $_SESSION['sobrenome']=$objUsuario->getSobrenomeUsuario();
    $_SESSION['pacote']=$objUsuario->getCodigoPacoteUsuario();
    $permissao=$_SESSION['permissao']=$objUsuario->getCodigoPermissaoUsuario();
    $_SESSION['login']=$objUsuario->getLoginUsuario();
    $_SESSION['status']= true;
    $_SESSION['msg']= "Olá, ". $_SESSION['nome']."!"; 
   
    $rsDados=$objBDUsuario->permissaoUsuario($permissao);
    $tblDados= mysql_fetch_array($rsDados);
    
       $_SESSION['descricao']=$tblDados['descricao_PERMISSAO'];
        
    if($permissao==1){
        //echo $tblDados['descricao_PERMISSAO'];

        header("location:Sistema/index.php");
      //echo location.reload(true);
    }else if($permissao==2){
        header("location:index.php");
        
    }else if($permissao==3){
         header("location:index.php");
         
    }else if ($permissao==4) {
         echo $tblDados['descricao_PERMISSAO'];
        
    }else if($permissao==5){
          header("location:index.php");
    }

}
 ?>

