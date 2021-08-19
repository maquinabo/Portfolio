<?php

class UsuariosVO{
    private $emailUsuario, $nomeUsuario, $apelidoUsuario, $senhaUsuario;
    private $codigoPermissaoUsuario, $sobrenomeUsuario, $codigoPacoteUsuario, $loginUsuario;
    
    public function UsuariosVO(){
        $this->setEmailUsuario("");
        $this->setNomeUsuario("");
        $this->setSenhaUsuario("");
        $this->setApelidoUsuario("");
        $this->setCodigoPermissaoUsuario(5);
        $this->setSobrenomeUsuario("");
        $this->setCodigoPacoteUsuario(0);
        $this->setLoginUsuario(0);
    }
    
    public function getEmailUsuario() {
        return $this->emailUsuario;
    }

    public function setEmailUsuario($tmpEmailUsuario) {
        $this->emailUsuario = $tmpEmailUsuario;
       // echo($tmpEmailUsuario);
    }
    public function getApelidoUsuario() {
        return $this->apelidoUsuario;
    }

    public function setApelidoUsuario($tmpApelidoUsuario) {
        $this->apelidoUsuario = $tmpApelidoUsuario;
       // echo($tmpEmailUsuario);
    } 

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($tmpNomeUsuario) {
        $this->nomeUsuario = $tmpNomeUsuario;
    }
    
    
    public function getSenhaUsuario() {
        return $this->senhaUsuario;
    }

    public function setSenhaUsuario($tmpSenhaUsuario) {
        $this->senhaUsuario = $tmpSenhaUsuario;
    }
    
    
    public function getCodigoPermissaoUsuario() {
        return $this->codigoPermissaoUsuario;
    }

    public function setCodigoPermissaoUsuario($tmpCodigoPermissaoUsuario) {
        $this->codigoPermissaoUsuario = $tmpCodigoPermissaoUsuario;
    }
    
    public function getSobrenomeUsuario() {
        return $this->sobrenomeUsuario;
    }

    public function setSobrenomeUsuario($tmpSobrenomeUsuario) {
        $this->sobrenomeUsuario = $tmpSobrenomeUsuario;
    }
    
    public function getCodigoPacoteUsuario() {
        return $this->codigoPacoteUsuario;
    }

    public function setCodigoPacoteUsuario($tmpCodigoPacoteUsuario) {
        $this->codigoPacoteUsuario = $tmpCodigoPacoteUsuario;
    }
    function getLoginUsuario() {
        return $this->loginUsuario;
    }

    function setLoginUsuario($tmpLoginUsuario) {
        $this->loginUsuario = $tmpLoginUsuario;
    }


}