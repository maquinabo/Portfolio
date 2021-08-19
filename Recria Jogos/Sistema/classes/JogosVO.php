<?php

class JogosVO{
    private $codigoJogo, $tituloJogo, $imagemJogo, $demoJogo;
    private  $inteiroJogo, $idadeJogo;
    
    public function JogosVO(){
        $this->setCodigoJogo(0);
        $this->setTituloJogo("");
        $this->setImagemJogo("");
        $this->setDemoJogo("");
        $this->setInteiroJogo("");
        $this->setIdadeJogo(0);
    }
    
    public function getCodigoJogo() {
        return $this->codigoJogo;
    }

    public function setCodigoJogo($tmpCodigoJogo) {
        $this->codigoJogo = $tmpCodigoJogo;
       // echo($tmpEmailUsuario);
    }
    public function getTituloJogo() {
        return $this->tituloJogo;
    }

    public function setTituloJogo($tmpTituloJogo) {
        $this->tituloJogo = $tmpTituloJogo;
       // echo($tmpEmailUsuario);
    }    
    public function getImagemJogo() {
        return $this->imagemJogo;
    }

    public function setImagemJogo($tmpImagemJogo) {
        $this->imagemJogo = $tmpImagemJogo;
    }
    
    public function getDemoJogo() {
        return $this->demoJogo;
    }

    public function setDemoJogo($tmpDemoJogo) {
        $this->demoJogo = $tmpDemoJogo;
    }
   
     public function getInteiroJogo() {
        return $this->inteiroJogo;
    }

    public function setInteiroJogo($tmpInteiroJogo) {
        $this->inteiroJogo = $tmpInteiroJogo;
    }
    
    public function getIdadeJogo() {
        return $this->idadeJogo;
    }

    public function setIdadeJogo($tmpCodigoIdadeJogo) {
        $this->idadeJogo = $tmpCodigoIdadeJogo;
    }
    
}