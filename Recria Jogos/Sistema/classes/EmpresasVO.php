<?php

class EmpresasVO{
    private $codigoEmpresa, $descricaoEmpresa, $imagemEmpresa, $colaboradoresEmpresa, $tituloEmpresa, $emailUsuarioEmpresa;
    
    public function EmpresasVO() {
        $this->setCodigoEmpresa(0);
        $this->setDescricaoEmpresa("");
        $this->setImagemEmpresa("");
        $this->setColaboradoresEmpresa("");
        $this->setTituloEmpresa("");
        $this->setEmailUsuarioEmpresa("");
        
    }
    function getCodigoEmpresa() {
        return $this->codigoEmpresa;
    }
    
    function setCodigoEmpresa($tmpCodigoEmpresa) {
        $this->codigoEmpresa = $tmpCodigoEmpresa;
    }

    function getDescricaoEmpresa() {
        return $this->descricaoEmpresa;
    }
    
    function setDescricaoEmpresa($tmpDescricaoEmpresa) {
        $this->descricaoEmpresa = $tmpDescricaoEmpresa;
    }

    function getImagemEmpresa() {
        return $this->imagemEmpresa;
    }

    function setImagemEmpresa($tmpImagemEmpresa) {
        $this->imagemEmpresa = $tmpImagemEmpresa;
    }
    
    function getColaboradoresEmpresa() {
        return $this->colaboradoresEmpresa;
    }

    function setColaboradoresEmpresa($tmpColaboradoresEmpresa) {
        $this->colaboradoresEmpresa = $tmpColaboradoresEmpresa;
    }
    
    function getTituloEmpresa() {
        return $this->tituloEmpresa;
    }

    function setTituloEmpresa($tmpTituloEmpresa) {
        $this->tituloEmpresa = $tmpTituloEmpresa;
    }
    function getEmailUsuarioEmpresa() {
        return $this->emailUsuarioEmpresa;
    }

    function setEmailUsuarioEmpresa($tmpEmailUsuarioEmpresa) {
        $this->emailUsuarioEmpresa = $tmpEmailUsuarioEmpresa;
    }


}
?>

