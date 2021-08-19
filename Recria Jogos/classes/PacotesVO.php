<?php

class PacotesVO{
    private $codigoPacote, $precoPacote, $descricaoPacote;
    
    public function PacotesVO() {
        $this->setCodigoPacote(0);
        $this->setPrecoPacote(0);
        $this->setDescricaoPacote("");
        
    }
    function getCodigoPacote() {
        return $this->codigoPacote;
    }
    function setCodigoPacote($tmpCodigoPacote) {
        $this->codigoPacote = $tmpCodigoPacote;
    }

    function getPrecoPacote() {
        return $this->precoPacote;
    }
    function setPrecoPacote($tmpPrecoPacote) {
        $this->precoPacote = $tmpPrecoPacote;
    }
    function getDescricaoPacote() {
        return $this->descricaoPacote;
    }
    function setDescricaoPacote($tmpDescricaoPacote) {
        $this->descricaoPacote = $tmpDescricaoPacote;
    }


}
