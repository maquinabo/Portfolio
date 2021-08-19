<?php session_start();

 require_once 'classes/EmpresasDAO.php';
 require_once 'classes/EmpresasVO.php';
 
 $objBDEmpresa=new EmpresasDAO();
 $objEmpresa= new EmpresasVO();
 
 $rsEmpresa= $objBDEmpresa->listaEmpresa("1");
$tblEmpresa=  mysql_fetch_array($rsEmpresa);
?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "sobre-os-jogos.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Sobre os Jogos</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
   <link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
  <link rel="stylesheet" type="text/css" href="css/sobre-os-jogos.css" id="pagesheet"/>
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
    <div class="clearfix colelem" id="pu21308"><!-- group -->
     <div class="mse_pre_init" id="u21308" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u21308_img" alt="" width="1200" height="619" src="images/papernovo-u21308.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu21311"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u24911"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24914" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24917" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u21319"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21320" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21321" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u21326"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21336" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21337" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u21339"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u21327"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u21328"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u21961"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u21962" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21964-4" alt="Sobre os Jogos" width="156" height="33" src="images/u21964-4-a.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u21354"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21364" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21366" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u21367"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u21355"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u21356"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u21357"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21360" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21362-4" alt="Sobre os Personagens" width="214" height="31" src="images/u21362-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24222"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24223" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24226" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
      <div class="MenuItemContainer clearfix grpelem" id="u21312"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21315" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21318" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
          <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u21312"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21315"href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13809" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php } ?>
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u21226" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u21226.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u21241" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u21241.png"/><!-- rasterized frame -->
    </div>
    <div class="clearfix colelem" id="pu21238-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u21238-4" href="formlogin.php"><!-- rasterized frame --><img id="u21238-4_img" alt="Entrar" width="60" height="32" src="images/u21238-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u21239-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u21239-4_img" alt="Cadastrar" width="98" height="26" src="images/u21239-4.png"/></a>
     <div class="clip_frame grpelem" id="u21230"><!-- image -->
      <img class="block" id="u21230_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
     </div>
    </div> <div class="clearfix colelem" id="mi" ><!-- group -->
         
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
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu21245"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u25009"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u25010" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u25013" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u21274"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21275" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21278" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u21260"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21270" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21272" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u21273"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u21261"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u21262"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u21954"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u21955" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21958-4" alt="Sobre os Jogos" width="145" height="31" src="images/u21958-4-a.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u21288"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21289" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21292" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u21291"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u21293"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u21294"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u21295"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21296" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21298-4" alt="Sobre os Personagens" width="214" height="31" src="images/u21298-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24124"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24127" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24128" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
     <div class="MenuItemContainer clearfix grpelem" id="u21253"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21256" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21257" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u21253"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u21256" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13859" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         
         <?php } ?>
    </nav>
    <a class="nonblock nontext mse_pre_init" id="u22223" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u22223_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u22223.png"/></a>
    <a class="nonblock nontext mse_pre_init" id="u22226" href="help/index.php"><!-- rasterized frame --><img id="u22226_img" alt="" width="164" height="149"  src="images/le%c3%a3o%20final-u22226.png"/></a>
    <div class="clearfix colelem" id="ppu21236"><!-- group -->
     <div class="clearfix grpelem" id="pu21236"><!-- group -->
      <img class="grpelem" id="u21236" alt="" width="714" height="727" src="images/sem%20t%c3%adtulo-1-u21236.png"/><!-- rasterized frame -->
      <div class="clip_frame grpelem" id="u21368" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="19" data-mu-ie-matrix-dy="-19"><!-- image -->
       <img class="block" id="u21368_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
      </div>
      <div class="grpelem" id="u21224"><!-- custom html -->
       
<div class="fb-like" data-href="http://recriajogos.com.br/sobre-os-jogos.php" data-send="false" data-width="291" data-show-faces="false" data-colorscheme="light" data-layout="standard" data-action="like"></div>

</div>
      <div class="grpelem" id="u21228"><!-- custom html -->
       
<a href="https://twitter.com/recriajogos" class="twitter-follow-button" data-lang="pt" data-show-screen-name="false" data-size="medium"></a>

</div>
     </div>
     <img class="grpelem" id="u21304" alt="" width="218" height="240" src="images/4-u21304.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u21240-5" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9816,M12=-0.1908,M21=0.1908,M22=0.9816,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-17" data-mu-ie-matrix-dy="-11"><!-- rasterized frame -->
      <img id="u21240-5_img" alt="Sobre os Jogos
" width="134" height="191" src="images/u21240-5.png"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu25363"><!-- column -->
     <div class="position_content" id="pu25363_position_content">
      <div class="mse_pre_init" id="u25363"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u25364" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <img class="mse_pre_init" id="u22221" alt="" width="35" height="24" src="images/folha%20com%20corte-u22221.png"/><!-- rasterized frame -->
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25365" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <div class="shadow rounded-corners mse_pre_init" id="u22225"><!-- simple frame --></div>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25366" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25367" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
     </div>
    </div>
    <div class="clip_frame colelem" id="u21232"><!-- image -->
     <img class="block" id="u21232_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u21310"><!-- simple frame --></div>
    <div class="shadow rounded-corners colelem" id="u2408"><!-- simple frame -->
          <div id="divTitulo" class="tipografia" align="center"><br><br><?=$tblEmpresa['titulo_EMPRESA'];?> </div>
          <div id="divDescricao" class="tipografiaDescricao"><br><?=$tblEmpresa['descricao_EMPRESA'];?> </div>
          <div id="divColaboradores"  class="tipografiaDescricao" align="center"><?=$tblEmpresa['colaboradores_EMPRESA'];?> </div>
    </div>
    <div class="clearfix colelem" id="pu21243"><!-- group -->
     <img class="grpelem" id="u21243" alt="" width="733" height="518" src="images/tablet_png8592-u21243.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u21234"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/sobre-os-jogos.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>
    </div>
    <div class="clip_frame colelem" id="u21302"><!-- image -->
     <img class="block" id="u21302_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u21306" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u21306_img" alt="" width="1459" height="869" src="images/paper10-u21306.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u24917-a.png" alt=""/>
   <img class="preload" src="images/u21321-a.png" alt=""/>
   <img class="preload" src="images/u21337-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u21366-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u24226-a.png" alt=""/>
   <img class="preload" src="images/u21318-a.png" alt=""/>
   <img class="preload" src="images/u25013-a.png" alt=""/>
   <img class="preload" src="images/u21278-a.png" alt=""/>
   <img class="preload" src="images/u21272-a.png" alt=""/>
   <img class="preload" src="images/u21292-a.png" alt=""/>
   <img class="preload" src="images/u24128-a.png" alt=""/>
   <img class="preload" src="images/u21257-a.png" alt=""/>
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
$('#u21308').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48]},{"speed":[0,0],"in":[48,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu21311').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34]},{"speed":[0,0],"in":[34,Infinity]}]);/* scroll effect */
$('#menuu21311').registerOpacityScrollEffect([{"in":[-Infinity,34],"fade":0.05,"opacity":100},{"opacity":100,"in":[34,34]},{"in":[34,Infinity],"fade":1,"opacity":0}]);/* scroll effect */
$('#u21226').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35]},{"speed":[0,0],"in":[35,Infinity]}]);/* scroll effect */
$('#u21226').registerOpacityScrollEffect([{"in":[-Infinity,35],"fade":0,"opacity":100},{"opacity":100,"in":[35,35]},{"in":[35,Infinity],"fade":2,"opacity":0}]);/* scroll effect */
$('#u21241').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38]},{"speed":[0,0],"in":[38,Infinity]}]);/* scroll effect */
$('#u21241').registerOpacityScrollEffect([{"in":[-Infinity,38],"fade":2,"opacity":0},{"opacity":100,"in":[38,38]},{"in":[38,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#menuu21245').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53]},{"speed":[0,0],"in":[53,Infinity]}]);/* scroll effect */
$('#menuu21245').registerOpacityScrollEffect([{"in":[-Infinity,53],"fade":20,"opacity":0},{"opacity":100,"in":[53,53]},{"in":[53,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u22223').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-193.82]},{"speed":[0,0],"in":[-193.82,Infinity]}]);/* scroll effect */
$('#u22226').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-206.28]},{"speed":[0,0],"in":[-206.28,Infinity]}]);/* scroll effect */
$('#u25363').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25364').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u22221').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-209.38]},{"speed":[0,0],"in":[-209.38,Infinity]}]);/* scroll effect */
$('#u25365').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u22225').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-209.38]},{"speed":[0,0],"in":[-209.38,Infinity]}]);/* scroll effect */
$('#u25366').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25367').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u21306').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,2050.07]},{"speed":[0,0],"in":[2050.07,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
  
  <!--HTML Widget code-->
  
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

   </body>
</html>
