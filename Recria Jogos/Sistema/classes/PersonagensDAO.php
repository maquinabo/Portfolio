<?php

require_once 'PersonagensVO.php';
require_once 'BancoDAO.php';

class PersonagensDAO{
    
    public function cadastraPersonagem($tmpPersonagem){
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlCadastraPersonagem = "Insert into rec_personagens(codigo_PERSONAGEM,";
        $sqlCadastraPersonagem .= "titulo_PERSONAGEM,";
        $sqlCadastraPersonagem .= "curiosidade_PERSONAGEM,";
        $sqlCadastraPersonagem .= "imagem_PERSONAGEM, emailUsuario_PERSONAGEM) values(";
        $sqlCadastraPersonagem .= "'".$tmpPersonagem->getCodigoPersonagem()."',";
        $sqlCadastraPersonagem .= "'".$tmpPersonagem->getTituloPersonagem()."',";
        $sqlCadastraPersonagem .= "'".$tmpPersonagem->getCuriosidadePersonagem()."',";
        $sqlCadastraPersonagem .= "'".$tmpPersonagem->getImagemPersonagem()."',";
        $sqlCadastraPersonagem .= "'".$tmpPersonagem->getEmailUsuarioPersonagem()."')";

        mysql_query($sqlCadastraPersonagem) or die(mysql_error());

    }public function listaPersonagens($tmpLista){
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();
        
        $sqlLista="select * from rec_personagens where codigo_PERSONAGEM > 1";
        $rsLista=  mysql_query($sqlLista) or die(mysql_error());
        
        return $rsLista;
        
    }
   
    
}

?>