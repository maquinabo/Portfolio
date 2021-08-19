<?php

    require_once './classes/PersonagensDAO.php';
    require_once './classes/PersonagensVO.php';
    require_once './classes/EmpresasDAO.php';
    require_once './classes/EmpresasVO.php';

    $objPersonagem= new PersonagensVO;
    $objEmpresa= new EmpresasVO;
    
    $titulo=$_POST['HTML_titulo_PERSONAGEM'];
    $significado=$_POST['HTML_significado_PERSONAGEM'];
    $curiosidades=$_POST['HTML_curiosidade_PERSONAGEM'];
  
   // $imagem=$_POST['HTML_imagem_PERSONAGEM'];
    
    $objBDPersonagem=new PersonagensDAO;
    
    $objPersonagem->setTituloPersonagem($titulo);
    $objPersonagem->setCuriosidadePersonagem($curiosidades);
    //$objPersonagem->setImagemPersonagem($imagem);
    
    $objBDPersonagem->cadastraPersonagem($objPersonagem);
    
    
    header("location:personagens.php"); 
    //cadastra Empresa
   
    /*$objBDEmpresa= new EmpresasDAO;
    
    $objEmpresa->setDescricaoEmpresa($significado);
    
    $objBDEmpresa->cadastraEmpresa($objEmpresa);
    */
    
    
?>
