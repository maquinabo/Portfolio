<?php 

class UsuariosControl{
    function verificaPermissaoLogin(){
        session_start();
        
        $permissao = $_SESSION['permissao'];
            
     if($permissao==1){
        //echo $tblDados['descricao_PERMISSAO'];

        header("location:/recria/sistema/index.php");
       // echo "<body><script>location.reload(true);</script></body>";
    }else if($permissao==2){
        echo "per 2";
        
    }else if($permissao==3){
        echo "per 3";
         
    }else if ($permissao==4) {
         echo "per 4"; 
    }else if($permissao==5){
           echo "per 5";    
    }
    else{
        header("location:formlogin.php");
    }

}

    }
?>

