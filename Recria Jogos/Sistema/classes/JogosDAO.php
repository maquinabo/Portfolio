<?php

require_once "JogosVO.php";
require_once "BancoDAO.php";


class JogosDAO{
    
    public function cadastraJogos($tmpJogo){
        
        $objBDRecria = new BancoDAO();
        $objBDRecria->AbreConexao();

        
       $sqlCadastra="Insert into REC_JOGOS(codigo_JOGO, titulo_JOGO, imagem_JOGO,demo_JOGO,";    
       $sqlCadastra.=" inteiro_JOGO, idade_JOGO) values(";
       $sqlCadastra.="'".$tmpJogo->getCodigoJogo()."',";
       $sqlCadastra.="'".$tmpJogo->getTituloJogo()."',";
       $sqlCadastra.="'".$tmpJogo->getImagemJogo()."',";
       $sqlCadastra.="'".$tmpJogo->getDemoJogo()."',";
       $sqlCadastra.="'".$tmpJogo->getInteiroJogo()."',";
       $sqlCadastra.="'".$tmpJogo->getIdadeJogo()."')";
        
        mysql_query($sqlCadastra) or die(mysql_error());
    
     
        
 
        echo($sqlCadastra);
}//fechando o cadastra
   
function listaJogo($tmpLista){
       $objBDRecria= new BancoDAO();
       $objBDRecria->AbreConexao();
       
       $sqlPegaDemo="select * from REC_JOGOS";
       
       $rsPegaDemo=  mysql_query($sqlPegaDemo) or die (mysql_error());
       return $rsPegaDemo;
            
}
function listaJogos($tmpIdade){
       $objBDRecria= new BancoDAO();
       $objBDRecria->AbreConexao();
       
       $sqlPegaDemo="select * from REC_JOGOS where idade_JOGO like '$tmpIdade'";
       
       $rsPegaDemo=  mysql_query($sqlPegaDemo) or die (mysql_error());
       return $rsPegaDemo;
            
}
}
?>
