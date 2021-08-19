 <?php
    session_start();
    require_once "../classes/BancoDAO.php";
    require_once '../classes/UsuariosDAO.php';
    
     $usuarios=new UsuariosDAO();
             
    $Bdbanco= new BancoDAO();
    $Bdbanco->AbreConexao();
    
   
    $permissao = $_GET['permissao'];
    $acao = $_GET['acao'];
    
    $emailUsu = $_GET['emailUsu'];

    if($permissao == 1){
    $sqlAcao = "Update rec_Usuarios set  codigoPermissao_Usuario = '$permissao' where email_USUARIO = '$emailUsu'";
    }else{
    $sqlAcao = "Update rec_Usuarios set    codigoPermissao_Usuario = '$permissao' where email_USUARIO = '$emailUsu'";
    }

    $rsAcao = mysql_query($sqlAcao) or die(mysql_error());
            header("location:usuarios.php");

	?>
	