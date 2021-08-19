<?php

class SubUsuariosVO{
    private $codigoSubUsuario, $apelidoSubUsuario, $emailUsuarioSubUsuario, $nomeSubUsuario, $codigoNivelSubUsuario;
    
    public function SubUsuariosVO(){
        $this->setCodigoSubUsuario(0);
        $this->setEmailUsuarioSubUsuario("");
        $this->setNomeSubUsuario("");
        $this->setApelidoSubUsuario("");
        $this->setCodigoNivelSubUsuario(0);
    }
    
    public function getCodigoSubUsuario() {
        return $this->codigoSubUsuario;
    }

    public function setCodigoSubUsuario($tmpCodigoSubUsuario) {
        $this->codigoSubUsuario = $tmpCodigoSubUsuario;
       // echo($tmpEmailSubUsuario);
    }
    public function getApelidoSubUsuario() {
        return $this->apelidoSubUsuario;
    }

    public function setApelidoSubUsuario($tmpApelidoSubUsuario) {
        $this->apelidoSubUsuario = $tmpApelidoSubUsuario;
       // echo($tmpEmailSubUsuario);
    } 
    
    public function getNomeSubUsuario() {
        return $this->nomeSubUsuario;
    }

    public function setNomeSubUsuario($tmpNomeSubUsuario) {
        $this->nomeSubUsuario = $tmpNomeSubUsuario;
    }
    
    public function getEmailUsuarioSubUsuario() {
        return $this->emailUsuarioSubUsuario;
    }
    
    public function setEmailUsuarioSubUsuario($tmpEmailUsuarioSubUsuario) {
        $this->emailUsuarioSubUsuario = $tmpEmailUsuarioSubUsuario;
        
    }
    public function getCodigoNivelSubUsuario() {
        return $this->codigoNivelSubUsuario;
    }
    
    public function setCodigoNivelSubUsuario($tmpCodigoNivelSubUsuario) {
        $this->codigoNivelSubUsuario = $tmpCodigoNivelSubUsuario;
        
    }
}
    