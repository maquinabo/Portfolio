<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "jquery.scrolleffects.js", "jquery.watch.js", "personagens.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <link rel="shortcut icon" href="images/favicon.ico"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Personagens</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/personagens.css" id="pagesheet"/>
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
   <div class="clearfix grpelem" id="pu11323"><!-- group -->
    <img class="grpelem" id="u11323" alt="" width="564" height="725" src="images/caderno-u11323.png"/><!-- rasterized frame -->
    <div class="rounded-corners grpelem" id="u11322"> </div>
    
    <a class="nonblock nontext grpelem" id="u11330-5" href="formcadastrapersonagens.php"><!-- rasterized frame --><img id="u11330-5_img" alt="+ Adicionar" width="132" height="53" src="images/u11330-5.png"/></a>
    <div class="grpelem" id="u12346" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0349,M12=-0.9994,M21=0.9994,M22=0.0349,SizingMethod='auto expand')" data-mu-ie-matrix-dx="210" data-mu-ie-matrix-dy="-234"><!-- rasterized frame -->
     <img id="u12346_img" alt="" width="910" height="457" src="images/paper10-u12346.png"/>
    </div>
    <nav class="MenuBar clearfix grpelem" id="menuu12348"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u12377"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12378" href="index.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12379" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12356"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12359" href="usuarios.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12361" alt="Usuários" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12363"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12364" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12366" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12384"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12385" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12387" alt="Jogos " src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12349"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u12352" href="personagens.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u12354-4"><!-- rasterized frame --><div id="u12354-4_clip"><img id="u12354-4_img" alt="Personagens" width="160" height="33" src="images/u12354-4-a.png"/></div></div></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12391"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12392" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12394" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12370"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12371" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12372" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clip_frame grpelem" id="u12398"><!-- image -->
     <img class="block" id="u12398_img" src="images/logo%20mais%20novo%20que%20tudo23.png" alt="" width="216" height="203"/>
     <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
    <div id="mi1"><a href="Logoff.php" ><font face="Berlin Sans FB" size="6pt"> Sair </font> </a></div>

    </div>
    <div class="grpelem" id="u12400">
    <div  id="divLista">
    <?php

require_once "classes/PersonagensDAO.php";
require_once "classes/PersonagensVO.php";

$objBDPersonagem= new PersonagensDAO();
$rsPersonagem= $objBDPersonagem->listaPersonagens("");
        
//$emailUsu = $_GET['emailUsu'];
?>
        <table  width="415">
    <tr height="40" >
        <td class="tipografia">Nome</td>

    </tr>
    
    <?php while($tblPersonagem= mysql_fetch_array($rsPersonagem)){?>
    
    <tr height="40" >
        <td><?=$tblPersonagem['titulo_PERSONAGEM'];?></td>
    </tr>
    <?php } ?>
        </table>
        
    </div>
    </div>
   </div>
   <div class="grpelem" id="u11316" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0698,M12=-0.9976,M21=0.9976,M22=0.0698,SizingMethod='auto expand')" data-mu-ie-matrix-dx="279" data-mu-ie-matrix-dy="-304"><!-- rasterized frame -->
    <img id="u11316_img" alt="" width="678" height="73" src="images/pencil-23648_960_720-u11316.png"/>
   </div>
   <div class="clearfix grpelem" id="ppu11755"><!-- column -->
    <div class="clearfix colelem" id="pu11755"><!-- group -->
     <div class="grpelem" id="u11755" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=-0.1219,M21=0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-13" data-mu-ie-matrix-dy="-11"><!-- rasterized frame -->
      <img id="u11755_img" alt="" width="190" height="232" src="images/3-u11755.png"/>
     </div>
     <div class="grpelem" id="u11757-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.8572,M12=0.515,M21=-0.515,M22=0.8572,SizingMethod='auto expand')" data-mu-ie-matrix-dx="3" data-mu-ie-matrix-dy="-49"><!-- rasterized frame -->
      <img id="u11757-4_img" alt="Personagens" width="202" height="43" src="images/u11757-4.png"/>
     </div>
    </div>
    <div class="colelem" id="u11318" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.2419,M12=-0.9703,M21=0.9703,M22=0.2419,SizingMethod='auto expand')" data-mu-ie-matrix-dx="33" data-mu-ie-matrix-dy="-66"><!-- rasterized frame -->
     <img id="u11318_img" alt="" width="211" height="96" src="images/p993518-u11318.png"/>
    </div>
   </div>
   <div class="verticalspacer"></div>
   <div class="mse_pre_init" id="u11271" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-7" data-mu-ie-matrix-dy="-36"><!-- rasterized frame -->
    <img id="u11271_img" alt="" width="1376" height="313" src="images/paper10-u11271.png"/>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u12379-a.png" alt=""/>
   <img class="preload" src="images/u12361-a.png" alt=""/>
   <img class="preload" src="images/u12366-a.png" alt=""/>
   <img class="preload" src="images/u12387-a.png" alt=""/>
   <img class="preload" src="images/u12394-a.png" alt=""/>
   <img class="preload" src="images/u12372-a.png" alt=""/>
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
$('#u11271').registerPositionScrollEffect([{"in":[-Infinity,1347.43],"speed":[0,1]},{"in":[1347.43,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
