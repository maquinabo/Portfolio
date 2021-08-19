<?php

    require_once 'BancoDAO.php';
    require_once 'EmpresasVO.php';
    
    class PacotesDAO{
    
    public function listaPacote($tmpCodigo) {
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlLista="select * from rec_pacotes where codigo_PACOTE='$tmpCodigo'";
        
        $rsLista=  mysql_query($sqlLista) or die(mysql_error());
        
        return $rsLista;
        
        
    }
    }
?>
