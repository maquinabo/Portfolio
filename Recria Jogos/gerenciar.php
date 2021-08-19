<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "gerenciar.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
  <title>Gerenciar</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/gerenciar.css" id="pagesheet"/>
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

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu13726"><!-- group -->
     <div class="mse_pre_init" id="u13726" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u13726_img" alt="" width="1200" height="619" src="images/papernovo-u13726.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu13602"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u13631"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13632" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13635" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13638"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13639" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13640" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13617"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13627" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13628" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13629"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u13618"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u13619"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u16422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u16423" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u16424-4" alt="Sobre os Jogos" width="156" height="33" src="images/u16424-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13603"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13604" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13605" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13606"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u13608"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u13609"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u17247"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u17250" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u17252-4" alt="Sobre os Personagens" width="214" height="31" src="images/u17252-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13645"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13646" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13648" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13903"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u13904" href="gerenciar.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13907-4"><!-- rasterized frame --><div id="u13907-4_clip"><img id="u13907-4_img" alt="Gerenciar" width="122" height="32" src="images/u19390-a.png"/></div></div></a>
      </div>
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u13740" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u13740.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u13763" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u13763.png"/><!-- rasterized frame -->
    </div>
    <div class="clearfix colelem" id="pu13739-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u13739-4" href="formlogin.php"><!-- rasterized frame --><img id="u13739-4_img" alt="Entrar" width="60" height="32" src="images/u13739-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u13725-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u13725-4_img" alt="Cadastrar" width="98" height="26" src="images/u13725-4.png"/></a>
     <div class="clip_frame grpelem" id="u13659"><!-- image -->
      <img class="block" id="u13659_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
     </div>
    </div>
       <div class="clearfix colelem" id="mi" ><!-- group -->
         
        <?php 
       }else{
        if(isset($_SESSION['status'])== true)?>
         <font size="5pt" face="Berlin Sans FB"> 
             <?php  echo $_SESSION['msg']; ?>
            <?php //echo $_SESSION['descricao']?>
         </font></div>
         <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
    <div class="clip_frame grpelem" id="u25781"><!-- image -->
      <img class="block" id="u2578_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
     </div>
    <div id="mi1"><a href="Logoff.php" ><font face="Berlin Sans FB" size="5pt"> Sair </font> </a></div>
    
         <?php
       }
       ?>
    </div>
       
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu13663"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u13706"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13709" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13711" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13713"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13714" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13715" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13664"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13674" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13675" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13676"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u13665"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u13666"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u16429"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u16430" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u16431-4" alt="Sobre os Jogos" width="145" height="31" src="images/u16431-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13678"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13688" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13689" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13691"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u13679"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u13680"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u17254"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u17255" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u17256-4" alt="Sobre os Personagens" width="214" height="31" src="images/u17256-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13692"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13695" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13697" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13910"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u13911" href="gerenciar.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13913-4"><!-- rasterized frame --><div id="u13913-4_clip"><img id="u13913-4_img" alt="Gerenciar" width="107" height="28" src="images/u19477.png"/></div></div></a>
     </div>
    </nav>
    <div class="clearfix colelem" id="pu19164"><!-- group -->
     <img class="grpelem" id="u19164" alt="" width="579" height="708" src="images/caderno-u19164.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u19596" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-0.0698,M12=-0.9976,M21=0.9976,M22=-0.0698,SizingMethod='auto expand')" data-mu-ie-matrix-dx="268" data-mu-ie-matrix-dy="-293"><!-- rasterized frame -->
      <img id="u19596_img" alt="" width="671" height="89" src="images/pencil-23648_960_720-u19596.png"/>
     </div>
     <div class="grpelem" id="u19599" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.1392,M12=-0.9903,M21=0.9903,M22=0.1392,SizingMethod='auto expand')" data-mu-ie-matrix-dx="43" data-mu-ie-matrix-dy="-63"><!-- rasterized frame -->
      <img id="u19599_img" alt="" width="209" height="95" src="images/p993518-u19599.png"/>
     </div>
     <div class="clip_frame grpelem" id="u19159"><!-- image -->
      <img class="block" id="u19159_img" src="images/7.png" alt="" width="191" height="241"/>
     </div>
     <div class="grpelem" id="u13934-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.8988,M12=-0.4384,M21=0.4384,M22=0.8988,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="-39"><!-- rasterized frame -->
      <img id="u13934-4_img" alt="Gerenciar" width="199" height="53" src="images/u1393-4.png"/>
     </div>
     <a class="nonblock nontext grpelem" id="u19179-5" href="formcadastracrianca.php"><!-- rasterized frame --><img id="u19179-5_img" alt="+ Adicionar
" width="236" height="73" src="images/u19179-5.png"/></a>
     <div class="rounded-corners grpelem" id="u19180"></div>
     <div class="rounded-corners grpelem" id="u1918">
     
      
<?php

require_once "classes/SubUsuariosDAO.php";
require_once "classes/SubUsuariosVO.php";

$objBDSubUsuario= new SubUsuariosDAO();
$rsSubUsuario= $objBDSubUsuario->buscaSubUsuario("");

?><br>

        <table width="430" align="center" >
    <tr>
        <td class="tipografia">Nome</td>
        <td class="tipografia">Apelido</td>
    </tr>
    
    <?php while($tblSubUsuarios= mysql_fetch_array($rsSubUsuario)){?>
    
    <tr height="40">
        
        <td><a href="alteraPerfil.php?codUser=<?=$tblSubUsuarios['codigo_SUBUSUARIO']?>"><?=$tblSubUsuarios['nome_SUBUSUARIO'];?></a></td>
        <td><?=$tblSubUsuarios['apelido_SUBUSUARIO'];?></td>
        
    </tr>  
    
    <?php } ?>
        </table>
        
     
     </div>
    </div>
    <div class="clearfix colelem" id="pu19627"><!-- column -->
     <div class="position_content" id="pu19627_position_content">
      <div class="mse_pre_init" id="u19627"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u19628" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext mse_pre_init ose_pre_init" id="u19613" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u19613_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u19613.png"/></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u19629" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext mse_pre_init ose_pre_init" id="u19616" href="help/index.php"><!-- rasterized frame --><img id="u19616_img" alt="" width="164" height="149" src="images/le%c3%a3o%20final-u19616.png"/></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u19630" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u19631" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
      <img class="mse_pre_init ose_pre_init" id="u19611" alt="" width="35" height="24" src="images/folha%20com%20corte-u19611.png"/><!-- rasterized frame -->
      <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u19615"><!-- simple frame --></div>
     </div>
    </div>
    <div class="clip_frame colelem" id="u13734"><!-- image -->
     <img class="block" id="u13734_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u13661" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u13661_img" alt="" width="1459" height="869" src="images/paper10-u13661.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u13635-a.png" alt=""/>
   <img class="preload" src="images/u13640-a.png" alt=""/>
   <img class="preload" src="images/u13628-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u13605-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u13648-a.png" alt=""/>
   <img class="preload" src="images/u13711-a.png" alt=""/>
   <img class="preload" src="images/u13715-a.png" alt=""/>
   <img class="preload" src="images/u13675-a.png" alt=""/>
   <img class="preload" src="images/u13689-a.png" alt=""/>
   <img class="preload" src="images/u13697-a.png" alt=""/>
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
  <script src="scripts/jquery.scrolleffects.js?3860644955" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?3957776250" type="text/javascript"></script>
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
$('#u13726').registerPositionScrollEffect([{"in":[-Infinity,48],"speed":[0,1]},{"in":[48,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu13602').registerPositionScrollEffect([{"in":[-Infinity,34],"speed":[0,1]},{"in":[34,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#menuu13602').registerOpacityScrollEffect([{"fade":0.05,"in":[-Infinity,34],"opacity":100},{"in":[34,34],"opacity":100},{"fade":1,"in":[34,Infinity],"opacity":0}]);/* scroll effect */
$('#u13740').registerPositionScrollEffect([{"in":[-Infinity,35],"speed":[0,1]},{"in":[35,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u13740').registerOpacityScrollEffect([{"fade":0,"in":[-Infinity,35],"opacity":100},{"in":[35,35],"opacity":100},{"fade":2,"in":[35,Infinity],"opacity":0}]);/* scroll effect */
$('#u13763').registerPositionScrollEffect([{"in":[-Infinity,38],"speed":[0,0]},{"in":[38,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u13763').registerOpacityScrollEffect([{"fade":2,"in":[-Infinity,38],"opacity":0},{"in":[38,38],"opacity":100},{"fade":0,"in":[38,Infinity],"opacity":100}]);/* scroll effect */
$('#menuu13663').registerPositionScrollEffect([{"in":[-Infinity,53],"speed":[0,0]},{"in":[53,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#menuu13663').registerOpacityScrollEffect([{"fade":20,"in":[-Infinity,53],"opacity":0},{"in":[53,53],"opacity":100},{"fade":0,"in":[53,Infinity],"opacity":100}]);/* scroll effect */
$('#u19627').registerPositionScrollEffect([{"in":[-Infinity,-68],"speed":[0,0]},{"in":[-68,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19628').registerPositionScrollEffect([{"in":[-Infinity,-68],"speed":[0,0]},{"in":[-68,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19613').registerPositionScrollEffect([{"in":[-Infinity,-6.37],"speed":[0,0]},{"in":[-6.37,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19613').registerOpacityScrollEffect([{"fade":285.4,"in":[-Infinity,-6.37],"opacity":0},{"in":[-6.37,-6.37],"opacity":100},{"fade":50,"in":[-6.37,Infinity],"opacity":100}]);/* scroll effect */
$('#u19629').registerPositionScrollEffect([{"in":[-Infinity,-68],"speed":[0,0]},{"in":[-68,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19616').registerPositionScrollEffect([{"in":[-Infinity,-18.83],"speed":[0,0]},{"in":[-18.83,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19616').registerOpacityScrollEffect([{"fade":346.1,"in":[-Infinity,-18.83],"opacity":0},{"in":[-18.83,-18.83],"opacity":100},{"fade":0,"in":[-18.83,Infinity],"opacity":100}]);/* scroll effect */
$('#u19630').registerPositionScrollEffect([{"in":[-Infinity,-68],"speed":[0,0]},{"in":[-68,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19631').registerPositionScrollEffect([{"in":[-Infinity,-68],"speed":[0,0]},{"in":[-68,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19611').registerPositionScrollEffect([{"in":[-Infinity,-21.93],"speed":[0,0]},{"in":[-21.93,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19611').registerOpacityScrollEffect([{"fade":319.75,"in":[-Infinity,-21.93],"opacity":0},{"in":[-21.93,-21.93],"opacity":100},{"fade":50,"in":[-21.93,Infinity],"opacity":100}]);/* scroll effect */
$('#u19615').registerPositionScrollEffect([{"in":[-Infinity,-21.93],"speed":[0,0]},{"in":[-21.93,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u19615').registerOpacityScrollEffect([{"fade":401,"in":[-Infinity,-21.93],"opacity":0},{"in":[-21.93,-21.93],"opacity":100},{"fade":50,"in":[-21.93,Infinity],"opacity":100}]);/* scroll effect */
$('#u13661').registerPositionScrollEffect([{"in":[-Infinity,1429.27],"speed":[0,1]},{"in":[1429.27,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
