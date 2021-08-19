<?php

require_once './classes/JogosVO.php';
require_once './classes/JogosDAO.php';

$objJogos=new JogosVO();
$objBDJogos=new JogosDAO();

$titulo=$_POST['HTML_titulo_JOGO'];
$demo=$_POST['HTML_demo_JOGO'];
$inteiro=$_POST['HTML_inteiro_JOGO'];
$idade=$_POST['HTML_idade_JOGO'];


//upload de imagem
$nomeImg=$_FILES['HTML_imagem_USUARIO']['name'];
$tmpImg=$_FILES['HTML_imagem_USUARIO']['tmp_name'];
$tamanhoImg=$_FILES['HTML_imagem_USUARIO']['size'];
$vExtensao=  explode(".", $nomeImg);
$tipoImg=strtolower($vExtensao[(count($vExtensao)-1)]);

$tiposPerm=array("png","jpg");
if(!in_array($tipoImg,$tiposPerm)){
    echo "Arquivo Inválido";

    $novoNome="";
}else if($tamanhoImg/1024/1024 > 1){
    echo "Tamanho excedido - Máx. 2MB";
    


}else{
    $novoNome=  strtolower(md5 (trim($titulo))). ".".strtolower($tipoImg);
    move_uploaded_file($tmpImg, "imagesjogos/".$novoNome);

$objBDJogos=new JogosDAO();

$objJogos->setTituloJogo($titulo);
$objJogos->setDemoJogo($demo);
$objJogos->setInteiroJogo($inteiro);
$objJogos->setImagemJogo($novoNome);
$objJogos->setIdadeJogo($idade);
/*$objJogos->setObjetivoJogo($objetivo);
$objJogos->setDescricaoJogo($descricao);

    */
$objBDJogos->cadastraJogos($objJogos);

header("location:jogos.php");
}
?>