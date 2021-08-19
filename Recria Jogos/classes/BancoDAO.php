<?php

class BancoDAO {
    public $usuario="root", $senha="";
    public $servidor="localhost", $banco="bdrecria";
    
    
    
    function AbreConexao(){
        mysql_connect("localhost", "root", "");
        mysql_select_db("bdrecria");
        mysql_set_charset("utf8");
    }
    
    function FechaConexao(){
        mysql_close();
    }
}
