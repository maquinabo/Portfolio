<?php

require_once "SubUsuariosVO.php";
require_once "UsuariosVO.php";
require_once "UsuariosDAO.php";
require_once "BancoDAO.php";


class SubUsuariosDAO{
    
    public function cadastraSubUsuario($tmpSubUsuario){
        
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();

        
       $sqlCadastra="Insert into REC_SUBUSUARIOS(codigo_SUBUSUARIO,emailUsuario_SUBUSUARIO, nome_SUBUSUARIO, apelido_SUBUSUARIO, codigoNivel_SUBUSUARIO) values(";
       $sqlCadastra.="'".$tmpSubUsuario->getCodigoSubUsuario()."',";
       $sqlCadastra.="'".$_SESSION['email']."',";
       $sqlCadastra.="'".$tmpSubUsuario->getNomeSubUsuario()."',";
       $sqlCadastra.="'".$tmpSubUsuario->getApelidoSubUsuario()."',";
       $sqlCadastra.="'".$tmpSubUsuario->getCodigoNivelSubUsuario()."')";
        
        mysql_query($sqlCadastra) or die(mysql_error());
    
     
        
 
        echo($sqlCadastra);
}//fechando o cadastra

    public function buscaSubUsuario($tmpSubBusca) {
    
    $objBDRecria = new BancoDAO();
    $objBDRecria->AbreConexao();
    
    $sqlSubBusca="Select * from REC_SUBUSUARIOS where emailUsuario_SUBUSUARIO='".$_SESSION['email']."'";
    
    $rsSubBusca= mysql_query($sqlSubBusca) or die (mysql_error());
    
    return $rsSubBusca;
}
function loginSubUsuario($tmpCodigo){
    
    $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();

    
    $sqlLogin="Select * from REC_SUBUSUARIOS where ";
    $sqlLogin.="codigo_SUBUSUARIO like '$tmpCodigo' ";

    
    $rsLogin= mysql_query($sqlLogin) or die(mysql_error());
    
    if(mysql_num_rows($rsLogin)>0){ 
        
        $tblLogin= mysql_fetch_array($rsLogin);
        
        $tmpUsuario=new SubUsuariosVO();
        
        $tmpUsuario->setCodigoSubUsuario($tblLogin['codigo_SUBUSUARIO']);
        $tmpUsuario->setNomeSubUsuario($tblLogin['nome_SUBUSUARIO']);
        $tmpUsuario->setApelidoSubUsuario($tblLogin['apelido_SUBUSUARIO']);
        $tmpUsuario->setEmailUsuarioSubUsuario($tblLogin['emailUsuario_SUBUSUARIO']);
       
        return $tmpUsuario;
        
        
    }else{
       return null;
    }
}
}  
?>
