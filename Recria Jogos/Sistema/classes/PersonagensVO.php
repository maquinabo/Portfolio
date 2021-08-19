<?php

class PersonagensVO{
    private $codigoPersonagem, $tituloPersonagem, $curiosidadePersonagem, $imagemPersonagem, $emailUsuarioPersonagem;
    
    public function PersonagensVO(){
        $this->setCodigoPersonagem(0);
        $this->setTituloPersonagem("");
        $this->setCuriosidadePersonagem("");
        $this->setImagemPersonagem("");
        $this->setEmailUsuarioPersonagem("");
   }
   function getCodigoPersonagem() {
       return $this->codigoPersonagem;
   }
   
   function setCodigoPersonagem($tmpCodigoPersonagem) {
       $this->codigoPersonagem = $tmpCodigoPersonagem;
   }
   
   function getTituloPersonagem() {
       return $this->tituloPersonagem;
   }
   
   function setTituloPersonagem($tmpTituloPersonagem) {
       $this->tituloPersonagem = $tmpTituloPersonagem;
   }

   function getCuriosidadePersonagem() {
       return $this->curiosidadePersonagem;
   }
   
   function setCuriosidadePersonagem($tmpCuriosidadePersonagem) {
       $this->curiosidadePersonagem = $tmpCuriosidadePersonagem;
   }
   
   function getImagemPersonagem() {
       return $this->imagemPersonagem;
   }

   function setImagemPersonagem($tmpImagemPersonagem) {
       $this->imagemPersonagem = $tmpImagemPersonagem;
   }
   function getEmailUsuarioPersonagem() {
       return $this->emailUsuarioPersonagem;
   }

   function setEmailUsuarioPersonagem($tmpEmailUsuarioPersonagem) {
       $this->emailUsuarioPersonagem = $tmpEmailUsuarioPersonagem;
   }

}

?>
