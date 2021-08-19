<?php

require_once "UsuariosVO.php";
require_once "BancoDAO.php";


class UsuariosDAO{
    
    

public function buscaUsuario($tmpBusca) {
    
    $objBDRecria = new BancoDAO();
    $objBDRecria->AbreConexao();
    
    $sqlBusca="Select * from REC_USUARIOS where codigoPermissao_USUARIO>1";
    
    $rsBusca= mysql_query($sqlBusca) or die (mysql_error());
    
    return $rsBusca;
}

}
?>
