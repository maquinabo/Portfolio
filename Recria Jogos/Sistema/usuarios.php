<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "jquery.scrolleffects.js", "jquery.watch.js", "usu_rios.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <link rel="shortcut icon" href="images/favicon.ico"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Usuários</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/usu_rios.css" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body class="museBGSize">

  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu11929"><!-- group -->
    <img class="grpelem" id="u11929" alt="" width="564" height="725" src="images/caderno-u11929.png"/><!-- rasterized frame -->
    <a class="nonblock nontext grpelem" id="u11931-4"><!-- rasterized frame --><img id="u11931-4_img" alt="Usuários Cadastrados" width="172" height="37" src="images/u11931-4.png"/></a>
    <div class="rounded-corners grpelem" id="u11926"></div>
    <div class="grpelem" id="u12226" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0349,M12=-0.9994,M21=0.9994,M22=0.0349,SizingMethod='auto expand')" data-mu-ie-matrix-dx="210" data-mu-ie-matrix-dy="-234"><!-- rasterized frame -->
     <img id="u12226_img" alt="" width="910" height="457" src="images/paper10-u12226.png"/>
    </div>
    <nav class="MenuBar clearfix grpelem" id="menuu12228"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u12257"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12258" href="index.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12259" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12236"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u12239" href="usuarios.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u12241-4"><!-- rasterized frame --><div id="u12241-4_clip"><img id="u12241-4_img" alt="Usuários" width="160" height="32" src="images/u12241-4-a.png"/></div></div></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12243"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12244" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12246" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12264"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12265" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12267" alt="Jogos " src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12229"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12232" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12234" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12271"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12272" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12274" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12250"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12251" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12252" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clip_frame grpelem" id="u12278"><!-- image -->
     <img class="block" id="u12278_img" src="images/logo%20mais%20novo%20que%20tudo23.png" alt="" width="216" height="203"/>
     <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
    <div id="mi1"><a href="Logoff.php" ><font face="Berlin Sans FB" size="6pt"> Sair </font> </a></div>

    </div>
    <div class="grpelem" id="u12280">

        <?php

require_once "classes/UsuariosDAO.php";
require_once "classes/UsuariosVO.php";

$objBDUsuario= new UsuariosDAO();
$rsUsuario= $objBDUsuario->buscaUsuario("");
        
//$emailUsu = $_GET['emailUsu'];


?><br>

        <table width="450">
    <tr>
        <td class="tipografia" width="180">Email</td>
        <td class="tipografia">Nome</td>
        <td class="tipografia">Responsável</td>
        <td class="tipografia" > &nbsp;Escola</td>
    </tr>
    
    <?php while($tblUsuarios= mysql_fetch_array($rsUsuario)){?>
    
    <tr height="40">
        <td ><?=$tblUsuarios['email_USUARIO'];?></td>
        <td><?=$tblUsuarios['nome_USUARIO'];?></td>
        <td><?php
    if($tblUsuarios['codigoPermissao_USUARIO'] == 2){
    ?>
    <a href="AtivaDesativaConta.php?acao=1&permissao=5&valor=1&emailUsu=<?=$tblUsuarios['email_USUARIO'];?>"> <img src="images/habilitarProjeto.png" border="0" title="Desabilitar Projeto"></a>
    <?php
    }else{
    ?>
    <a href="AtivaDesativaConta.php?acao=1&permissao=2&valor=2&emailUsu=<?=$tblUsuarios['email_USUARIO'];?>"> <img src="images/desabilitarProjeto.png" border="0" title="Habilitar Projeto"></a>
    <?php
    }
    ?></td>
        <td>
            <?php if($tblUsuarios['codigoPermissao_USUARIO'] == 3){
    ?>
            <a href="ativadesaconta.php?acao=1&permissao=5&emailUsu=<?=$tblUsuarios['email_USUARIO'];?>"> <img src="images/habilitarProjeto.png" border="0" title="Desabilitar Projeto"></a>
    <?php
    }else{
    ?>
            <a href="ativadesaconta.php?acao=1&permissao=3&emailUsu=<?=$tblUsuarios['email_USUARIO'];?>"> <img src="images/desabilitarProjeto.png" border="0" title="Habilitar Projeto"></a>
    <?php
    }
    }
    ?></td>
    <tr>
        </table>

    </div>
    
   </div>
   <div class="grpelem" id="u11984" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0698,M12=-0.9976,M21=0.9976,M22=0.0698,SizingMethod='auto expand')" data-mu-ie-matrix-dx="283" data-mu-ie-matrix-dy="-308"><!-- rasterized frame -->
    <img id="u11984_img" alt="" width="679" height="66" src="images/pencil-23648_960_720-u11984.png"/>
   </div>
      
   <div class="clearfix grpelem" id="ppu11977"><!-- column -->
    <div class="clearfix colelem" id="pu11977"><!-- group -->
     <img class="grpelem" id="u11977" alt="" width="211" height="193" src="images/bagulho1-u11977.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u11983-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9816,M12=0.1908,M21=-0.1908,M22=0.9816,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-3" data-mu-ie-matrix-dy="-17"><!-- rasterized frame -->
      <img id="u11983-4_img" alt="Usuários" width="179" height="45" src="images/u11983-4.png"/>
     </div>
    </div>
    <div class="colelem" id="u11932" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.2419,M12=-0.9703,M21=0.9703,M22=0.2419,SizingMethod='auto expand')" data-mu-ie-matrix-dx="33" data-mu-ie-matrix-dy="-66"><!-- rasterized frame -->
     <img id="u11932_img" alt="" width="211" height="96" src="images/p993518-u11932.png"/>
    </div>
       
   </div>
   <div class="verticalspacer"></div>
   <div class="mse_pre_init" id="u11927" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-7" data-mu-ie-matrix-dy="-36"><!-- rasterized frame -->
    <img id="u11927_img" alt="" width="1376" height="313" src="images/paper10-u11927.png"/>
   </div>
  </div>
         
  <div class="preload_images">
   <img class="preload" src="images/u12259-a.png" alt=""/>
   <img class="preload" src="images/u12246-a.png" alt=""/>
   <img class="preload" src="images/u12267-a.png" alt=""/>
   <img class="preload" src="images/u12234-a.png" alt=""/>
   <img class="preload" src="images/u12274-a.png" alt=""/>
   <img class="preload" src="images/u12252-a.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?183364071" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?4004268962" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?3957776250" type="text/javascript"></script>
  <script src="scripts/jquery.scrolleffects.js?3860644955" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?71412426" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#u11927').registerPositionScrollEffect([{"in":[-Infinity,1350.7],"speed":[0,1]},{"in":[1350.7,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
