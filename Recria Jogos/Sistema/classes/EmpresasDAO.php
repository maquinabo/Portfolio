<?php

    require_once 'BancoDAO.php';
    require_once 'EmpresasVO.php';
    
    class EmpresasDAO{
        
    public function cadastraEmpresa($tmpEmpresa){
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlCadastra="Insert into rec_empresas(codigo_EMPRESA, descricao_EMPRESA, imagem_EMPRESA,";
        $sqlCadastra.=" colaboradores_EMPRESA, titulo_EMPRESA, emailUsuario_EMPRESA) values(";
        $sqlCadastra.="'".$tmpEmpresa->getCodigoEmpresa()."',";
        $sqlCadastra.="'".$tmpEmpresa->getDescricaoEmpresa()."',";
        $sqlCadastra.="'".$tmpEmpresa->getImagemEmpresa()."',";
        $sqlCadastra.="'".$tmpEmpresa->getColaboradoresEmpresa()."',";
        $sqlCadastra.="'".$tmpEmpresa->getTituloEmpresa()."',";
        $sqlCadastra.="'".$tmpEmpresa->getEmailUsuarioEmpresa()."')";
        
        mysql_query($sqlCadastra) or die(mysql_error());
    }
    public function listaEmpresa($tmpCodigo) {
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlLista="select * from rec_empresas where codigo_EMPRESA='$tmpCodigo'";
        
        $rsLista=  mysql_query($sqlLista) or die(mysql_error());
        
        return $rsLista;
        
        
    }
    
    public function alteraSobreNos($tmp) {
         $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlEditaPersonagem = "UPDATE rec_empresas SET codigo_EMPRESA=$codigo, titulo_EMPRESA=$titulo, curiosidades_EMPRESA=$curiosidades,";
        $sqlEditaPersonagem.=" imagem_EMPRESA=$imagem WHERE codigo_EMPRESA=$codigo ";

    }
    
    }
?>