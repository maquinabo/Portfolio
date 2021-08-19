<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "novidades.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
<link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
   <title>Novidades</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/novidades.css?115432203" id="pagesheet"/>
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

  <!--HTML Widget code-->
  
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

  
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu13057"><!-- group -->
     <div class="mse_pre_init" id="u13057" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u13057_img" alt="" width="1200" height="619" src="images/papernovo-u13057.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu13000"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u24988"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24989" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24990" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13305"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u13306" href="novidades.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13309-4"><!-- rasterized frame --><div id="u13309-4_clip"><img id="u13309-4_img" alt="Novidades" width="132" height="32" src="images/u13309-4-a.png"/></div></div></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13036"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13046" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13049" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13047"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u13037"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u13038"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u21849"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21850" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21851-4" alt="Sobre os Jogos" width="156" height="33" src="images/u21851-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13015"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13016" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13017" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13018"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u13020"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u13021"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u20617"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u20620" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u20621-4" alt="Sobre os Personagens" width="214" height="31" src="images/u20621-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24117"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24120" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24121" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
      <div class="MenuItemContainer clearfix grpelem" id="u13861"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13862" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13864" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u13861"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13862" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13809" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }?>
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u13063" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u13063.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u13074" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u13074.png"/><!-- rasterized frame -->
    </div>
       
    <div class="clearfix colelem" id="pu13059-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u13059-4" href="formlogin.php"><!-- rasterized frame --><img id="u13059-4_img" alt="Entrar" width="60" height="32" src="images/u13059-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u12999-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u12999-4_img" alt="Cadastrar" width="98" height="26" src="images/u12999-4.png"/></a>
     <div class="clip_frame grpelem" id="u13085"><!-- image -->
      <img class="block" id="u13085_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
     </div></div>
       <div class="clearfix colelem" id="mi" ><!-- group -->
         
        <?php 
       }else{
        if(isset($_SESSION['status'])== true)?>
         <font size="5pt" face="Berlin Sans FB"> 
             <?php  echo $_SESSION['msg']; ?>

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
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu13087"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u25030"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u25033" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u25034" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13312"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u13315" href="novidades.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13318-4"><!-- rasterized frame --><div id="u13318-4_clip"><img id="u13318-4_img" alt="Novidades" width="113" height="28" src="images/u13318-4-a.png"/></div></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13130"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13140" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13141" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13143"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u13131"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u13132"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u21891"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21894" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21896-4" alt="Sobre os Jogos" width="145" height="31" src="images/u21896-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13095"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13096" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13098" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13099"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u13100"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u13101"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u20666"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u20667" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u20668-4" alt="Sobre os Personagens" width="214" height="31" src="images/u20668-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24173"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24174" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24177" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
     <div class="MenuItemContainer clearfix grpelem" id="u13868"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13871" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13873" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u13868"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13871" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13859" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }?>
    </nav>
    <div class="clearfix colelem" id="pu13346"><!-- group -->
     <div class="shadow clip_frame grpelem" id="u13346"><!-- image -->
      <img class="block" id="u13346_img" src="images/novoquadro.jpg" alt="" width="917" height="699"/>
     </div>
     <div class="grpelem" id="u13348" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=-0.0523,M21=0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-7" data-mu-ie-matrix-dy="-6"><!-- rasterized frame -->
      <img id="u13348_img" alt="" width="227" height="280" src="images/7-u13348.png"/>
     </div>
     <div class="grpelem" id="u13350-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.848,M12=0.5299,M21=-0.5299,M22=0.848,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-57"><!-- rasterized frame -->
      <img id="u13350-4_img" alt="Novidades" width="234" height="60" src="images/u13350-4.png"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu25351"><!-- column -->
     <div class="position_content" id="pu25351_position_content">
      <div class="mse_pre_init" id="u25351"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u25352" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25353" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25354" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25355" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
     </div>
    </div>
    <a class="nonblock nontext mse_pre_init ose_pre_init" id="u22105" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u22105_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u22105.png"/></a>
    <div class="clip_frame colelem" id="u13359"><!-- image -->
     <img class="block" id="u13359_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u13358"><!-- simple frame --></div>
    <a class="nonblock nontext mse_pre_init ose_pre_init" id="u22108" href="help/index.php"><!-- rasterized frame --><img id="u22108_img" alt="" width="164" height="149" src="images/le%c3%a3o%20final-u22108.png"/></a>
    <div class="clearfix colelem" id="pu13149"><!-- group -->
     <img class="grpelem" id="u13149" alt="" width="734" height="519" src="images/tablet_png8592-u13149.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u13066"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/novidades.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>
    </div>
    <div class="clearfix colelem" id="pu22103"><!-- group -->
     <img class="mse_pre_init ose_pre_init" id="u22103" alt="" width="35" height="24" src="images/folha%20com%20corte-u22103.png"/><!-- rasterized frame -->
     <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u22107"><!-- simple frame --></div>
    </div>
    <div class="clip_frame colelem" id="u13069"><!-- image -->
     <img class="block" id="u13069_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u12997" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u12997_img" alt="" width="1459" height="869" src="images/paper10-u12997.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u24990-a.png" alt=""/>
   <img class="preload" src="images/u13049-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u13017-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u24121-a.png" alt=""/>
   <img class="preload" src="images/u13864-a.png" alt=""/>
   <img class="preload" src="images/u25034-a.png" alt=""/>
   <img class="preload" src="images/u13141-a.png" alt=""/>
   <img class="preload" src="images/u13098-a.png" alt=""/>
   <img class="preload" src="images/u24177-a.png" alt=""/>
   <img class="preload" src="images/u13873-a.png" alt=""/>
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
$('#u13057').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48]},{"speed":[0,0],"in":[48,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu13000').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34]},{"speed":[0,0],"in":[34,Infinity]}]);/* scroll effect */
$('#menuu13000').registerOpacityScrollEffect([{"in":[-Infinity,34],"fade":0.05,"opacity":100},{"opacity":100,"in":[34,34]},{"in":[34,Infinity],"fade":1,"opacity":0}]);/* scroll effect */
$('#u13063').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35]},{"speed":[0,0],"in":[35,Infinity]}]);/* scroll effect */
$('#u13063').registerOpacityScrollEffect([{"in":[-Infinity,35],"fade":0,"opacity":100},{"opacity":100,"in":[35,35]},{"in":[35,Infinity],"fade":2,"opacity":0}]);/* scroll effect */
$('#u13074').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38]},{"speed":[0,0],"in":[38,Infinity]}]);/* scroll effect */
$('#u13074').registerOpacityScrollEffect([{"in":[-Infinity,38],"fade":2,"opacity":0},{"opacity":100,"in":[38,38]},{"in":[38,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#menuu13087').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53]},{"speed":[0,0],"in":[53,Infinity]}]);/* scroll effect */
$('#menuu13087').registerOpacityScrollEffect([{"in":[-Infinity,53],"fade":20,"opacity":0},{"opacity":100,"in":[53,53]},{"in":[53,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u25351').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25352').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25353').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25354').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25355').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u22105').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,658.94]},{"speed":[0,0],"in":[658.94,Infinity]}]);/* scroll effect */
$('#u22105').registerOpacityScrollEffect([{"in":[-Infinity,658.94],"fade":285.4,"opacity":0},{"opacity":100,"in":[658.94,658.94]},{"in":[658.94,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u22108').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,646.48]},{"speed":[0,0],"in":[646.48,Infinity]}]);/* scroll effect */
$('#u22108').registerOpacityScrollEffect([{"in":[-Infinity,646.48],"fade":346.1,"opacity":0},{"opacity":100,"in":[646.48,646.48]},{"in":[646.48,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u22103').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,643.38]},{"speed":[0,0],"in":[643.38,Infinity]}]);/* scroll effect */
$('#u22103').registerOpacityScrollEffect([{"in":[-Infinity,643.38],"fade":319.75,"opacity":0},{"opacity":100,"in":[643.38,643.38]},{"in":[643.38,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u22107').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,643.38]},{"speed":[0,0],"in":[643.38,Infinity]}]);/* scroll effect */
$('#u22107').registerOpacityScrollEffect([{"in":[-Infinity,643.38],"fade":401,"opacity":0},{"opacity":100,"in":[643.38,643.38]},{"in":[643.38,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u12997').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,2053.77]},{"speed":[0,0],"in":[2053.77,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
