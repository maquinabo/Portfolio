<?php session_start();  

 require_once './classes/BancoDAO.php';
 require_once './classes/UsuariosDAO.php';
 require_once './classes/UsuariosVO.php';
 
 $objUsuario= new UsuariosVO();
 $objBDUsuario= new UsuariosDAO();
 
 $rss=$objBDUsuario->teste("akill@email.com");
$tbl=  mysql_fetch_array($rss);



?>
<script>
       alert("<?php echo $tbl['email_USUARIO'];?>");

</script>
<html>
    <body onload= "startWorker()"
    window.onbeforeunload = "stopWorker()">

<p>Count numbers: <output id="result"></output></p>
<p>Pontos: <output id="p"></output></p>

<p><strong>Note:</strong> <a href="facebook.com.br">Internet Explorer 9 and earlier versions do not support Web Workers.</a>

<script>

var w;
var pontos=0;

function startWorker() {
    if(typeof(Worker) !== "undefined") {
        if(typeof(w) == "undefined") {
            w = new Worker("demo_workers.js");
        }
        w.onmessage = function(event) {
            document.getElementById("result").innerHTML = event.data;
            tempo=document.getElementById("result").innerHTML;
            
            if(tempo%60==0 && tempo!= 0){
        pontos++;
        document.getElementById("p").innerHTML = pontos;
        pontos=$pontos;
    }
        };
        
    
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
    }
}

function stopWorker() { 
    alert("Oi");
    w.terminate();
    w = undefined;
}
</script>

    <?php 
    $pontos="<script> pontos </script>";
    echo "Olá, $pontos "  ?>

 
</body>
</html>