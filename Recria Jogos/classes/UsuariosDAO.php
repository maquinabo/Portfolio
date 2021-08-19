<?php

require_once "UsuariosVO.php";
require_once "BancoDAO.php";


class UsuariosDAO{
    
    public function cadastraUsuario($tmpUsuario){
        
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();

        
       $sqlCadastra="Insert into REC_USUARIOS(email_USUARIO, nome_USUARIO,senha_USUARIO,";    
       $sqlCadastra.="codigoPermissao_USUARIO, sobrenome_USUARIO, codigoPacote_USUARIO, login_USUARIO) values(";
       $sqlCadastra.="'".$tmpUsuario->getEmailUsuario()."',";
       $sqlCadastra.="'".$tmpUsuario->getNomeUsuario()."',";
       $sqlCadastra.="'".$tmpUsuario->getSenhaUsuario()."',";
       $sqlCadastra.="'".$tmpUsuario->getCodigoPermissaoUsuario()."',";
       $sqlCadastra.="'".$tmpUsuario->getSobrenomeUsuario()."',";
       $sqlCadastra.="'".$tmpUsuario->getCodigoPacoteUsuario()."',";
       $sqlCadastra.="'".$tmpUsuario->getLoginUsuario()."')";
        
        mysql_query($sqlCadastra) or die(mysql_error());
    
     
        
 
        echo($sqlCadastra);
}//fechando o cadastra
   
function verificaUsuario($tmpEmail){
       $objBDRecria= new BancoDAO();
       $objBDRecria->AbreConexao();
       
       $sqlVerifica="select * from REC_USUARIOS where ";
       $sqlVerifica.="email_USUARIO like '$tmpEmail' ";
       
       $rsVerifica=  mysql_query($sqlVerifica) or die (mysql_error());
       
       if(mysql_num_rows($rsVerifica)>0)
           return false;
       else
           return true;
       

}

function loginUsuario($tmpEmail, $tmpSenha){
    
    $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();

    
    $sqlLogin="Select * from REC_USUARIOS where ";
    $sqlLogin.="email_USUARIO like '$tmpEmail' ";
    $sqlLogin.=" and ";
    $sqlLogin.="senha_USUARIO like '$tmpSenha'";
    
    $rsLogin= mysql_query($sqlLogin) or die(mysql_error());
    
    if(mysql_num_rows($rsLogin)>0){ 
        
        $tblLogin= mysql_fetch_array($rsLogin);
        
        $tmpUsuario=new UsuariosVO();
        
        $tmpUsuario->setEmailUsuario($tblLogin['email_USUARIO']);
        $tmpUsuario->setNomeUsuario($tblLogin['nome_USUARIO']);
        $tmpUsuario->setCodigoPermissaoUsuario($tblLogin['codigoPermissao_USUARIO']);
        $tmpUsuario->setSobrenomeUsuario($tblLogin['sobrenome_USUARIO']);
        $tmpUsuario->setCodigoPacoteUsuario($tblLogin['codigoPacote_USUARIO']);
        $tmpUsuario->setLoginUsuario($tblLogin['login_USUARIO']);
        
        return $tmpUsuario;
        
        
    }else{
       return null;
    }
}
public function permissaoUsuario($tmpPermissao) {
    
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
       $sqlDados="Select * from REC_USUARIOS, REC_PERMISSOES where codigoPermissao_USUARIO && codigo_PERMISSAO like '$tmpPermissao'"; 
       
       $rsDados= mysql_query($sqlDados) or die (mysql_error());
       
    
    return $rsDados;
}
public function alteraLogin($tmpCodigo) {
    $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlAltera= "Update rec_usuarios set login_USUARIO=1 where email_USUARIO='$tmpCodigo'";        
        $rsAltera=  mysql_query($sqlAltera) or die(mysql_error());
        
        return $rsAltera;
    
    
}

public function teste($tmpCodigo) {
     $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
    $sql="select * from rec_usuarios where email_USUARIO='$tmpCodigo'";
    $rs=  mysql_query($sql) or die(mysql_error());
    return $rs;
    
}
}
?>
