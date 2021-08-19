<?php session_start();

require_once './classes/JogosVO.php';  
         require_once './classes/JogosDAO.php';
         $jogo=$_GET['jogo'];
         $objBDJogos=new JogosDAO();
         $rsJogos= $objBDJogos->listaJogo($jogo);
         $tblJogos=  mysql_fetch_array($rsJogos);
         
?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "perfiljogo.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
   <link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Jogo</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/perfiljogo.css?4143294280" id="pagesheet"/>
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
    <div class="clearfix colelem" id="pu18073"><!-- group -->
     <div class="mse_pre_init" id="u18073" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u18073_img" alt="" width="1200" height="619" src="images/papernovo-u18073.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu18076"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u24967"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24968" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24969" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u18084"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18087" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18089" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u18105"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18115" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18116" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u18118"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u18106"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u18107"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u21835"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21836" href="sobre-os-jogos.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u21838-4"><!-- rasterized frame --><div id="u21838-4_clip"><img id="u21838-4_img" alt="Sobre os Jogos" width="156" height="33" src="images/u21838-4.png"/></div></div></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u18091"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18101" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18102" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u18104"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u18092"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u18093"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u20589"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u20590" href="sobre-os-personagens.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u20592-4"><!-- rasterized frame --><div id="u20592-4_clip"><img id="u20592-4_img" alt="Sobre os Personagens" width="214" height="31" src="images/u20592-4.png"/></div></div></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24229"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24230" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24231" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
      <div class="MenuItemContainer clearfix grpelem" id="u18126"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18127" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18129" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u18126"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18127" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13809" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         
         <?php } ?>
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u18192" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u18192.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u18201" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u18201.png"/><!-- rasterized frame -->
    </div>
    <div class="clearfix colelem" id="pu18198-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u18198-4" href="formlogin.php"><!-- rasterized frame --><img id="u18198-4_img" alt="Entrar" width="60" height="32" src="images/u18198-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u18204-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u18204-4_img" alt="Cadastrar" width="98" height="26" src="images/u18204-4.png"/></a>
     <div class="clip_frame grpelem" id="u18133"><!-- image -->
      <img class="block" id="u18133_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
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
       
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu18135"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u24960"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24961" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24963" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u18136"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18137" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18138" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u18157"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18167" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18169" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u18168"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u18158"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u18159"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u21919"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21920" href="sobre-os-jogos.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u21922-4"><!-- rasterized frame --><div id="u21922-4_clip"><img id="u21922-4_img" alt="Sobre os Jogos" width="145" height="31" src="images/u21922-4.png"/></div></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u18178"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18188" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18191" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u18189"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u18179"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u18180"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u20701"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u20702" href="sobre-os-personagens.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u20703-4"><!-- rasterized frame --><div id="u20703-4_clip"><img id="u20703-4_img" alt="Sobre os Personagens" width="214" height="31" src="images/u20703-4.png"/></div></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24110"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24113" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24114" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
     <div class="MenuItemContainer clearfix grpelem" id="u18171"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18174" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u18175" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u18171"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u18174" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13859" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         
         <?php } ?>
    </nav>
    <div class="clearfix colelem" id="pu18196"><!-- group -->
     <img class="grpelem" id="u18196" alt="" width="941" height="642" src="images/television-png-29-u18196.png"/><!-- rasterized frame -->
     <div class="clearfix grpelem" id="u18068-3"><!-- content -->
       <?php
         
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
              
              ?>
         <iframe width="894" height="498" frameborder="0" src="<?=$tblJogos['demo_JOGO'];?>"></iframe>
         
            <?php }else{?>
         
        <iframe width="894" height="498" frameborder="0" src="<?=$tblJogos['inteiro_JOGO'];?>"></iframe>
         
                <?php
                
            }
         ?>
         
     </div>
    </div>
    <div class="clearfix colelem" id="pu25431"><!-- column -->
     <div class="position_content" id="pu25431_position_content">
      <div class="mse_pre_init" id="u25431"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u25432" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25433" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25434" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25435" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
     </div>
    </div>
    <div class="clip_frame colelem" id="u18205"><!-- image -->
     <img class="block" id="u18205_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u18075"><!-- simple frame --></div>
    <a class="nonblock nontext mse_pre_init ose_pre_init" id="u25438" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u25438_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u25438.png"/></a>
    <div class="clearfix colelem" id="pu18069"><!-- group -->
     <img class="grpelem" id="u18069" alt="" width="734" height="519" src="images/tablet_png8592-u18069.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u18194"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/perfiljogo.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>
    </div>
    <div class="clearfix colelem" id="pu25436"><!-- group -->
     <img class="mse_pre_init ose_pre_init" id="u25436" alt="" width="35" height="24" src="images/folha%20com%20corte-u25436.png"/><!-- rasterized frame -->
     <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u25440"><!-- simple frame --></div>
     <a class="nonblock nontext mse_pre_init ose_pre_init" id="u25441" href="help/index.php"><!-- rasterized frame --><img id="u25441_img" alt="" width="164" height="149"  src="images/le%c3%a3o%20final-u25441.png"/></a>
    </div>
    <div class="clip_frame colelem" id="u18066"><!-- image -->
     <img class="block" id="u18066_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u18071" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u18071_img" alt="" width="1459" height="869" src="images/paper10-u18071.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u24969-a.png" alt=""/>
   <img class="preload" src="images/u18089-a.png" alt=""/>
   <img class="preload" src="images/u18116-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u18102-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u24231-a.png" alt=""/>
   <img class="preload" src="images/u18129-a.png" alt=""/>
   <img class="preload" src="images/u24963-a.png" alt=""/>
   <img class="preload" src="images/u18138-a.png" alt=""/>
   <img class="preload" src="images/u18169-a.png" alt=""/>
   <img class="preload" src="images/u18191-a.png" alt=""/>
   <img class="preload" src="images/u24114-a.png" alt=""/>
   <img class="preload" src="images/u18175-a.png" alt=""/>
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
$('#u18073').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48.38]},{"speed":[0,0],"in":[48.38,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu18076').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34.38]},{"speed":[0,0],"in":[34.38,Infinity]}]);/* scroll effect */
$('#menuu18076').registerOpacityScrollEffect([{"in":[-Infinity,34.38],"fade":0.05,"opacity":100},{"opacity":100,"in":[34.38,34.38]},{"in":[34.38,Infinity],"fade":1,"opacity":0}]);/* scroll effect */
$('#u18192').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35.38]},{"speed":[0,0],"in":[35.38,Infinity]}]);/* scroll effect */
$('#u18192').registerOpacityScrollEffect([{"in":[-Infinity,35.38],"fade":0,"opacity":100},{"opacity":100,"in":[35.38,35.38]},{"in":[35.38,Infinity],"fade":2,"opacity":0}]);/* scroll effect */
$('#u18201').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38.38]},{"speed":[0,0],"in":[38.38,Infinity]}]);/* scroll effect */
$('#u18201').registerOpacityScrollEffect([{"in":[-Infinity,38.38],"fade":2,"opacity":0},{"opacity":100,"in":[38.38,38.38]},{"in":[38.38,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#menuu18135').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53.38]},{"speed":[0,0],"in":[53.38,Infinity]}]);/* scroll effect */
$('#menuu18135').registerOpacityScrollEffect([{"in":[-Infinity,53.38],"fade":20,"opacity":0},{"opacity":100,"in":[53.38,53.38]},{"in":[53.38,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u25431').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25432').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25433').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25434').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25435').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25438').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,663.54]},{"speed":[0,0],"in":[663.54,Infinity]}]);/* scroll effect */
$('#u25438').registerOpacityScrollEffect([{"in":[-Infinity,663.54],"fade":285.4,"opacity":0},{"opacity":100,"in":[663.54,663.54]},{"in":[663.54,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u25436').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,647.98]},{"speed":[0,0],"in":[647.98,Infinity]}]);/* scroll effect */
$('#u25436').registerOpacityScrollEffect([{"in":[-Infinity,647.98],"fade":319.75,"opacity":0},{"opacity":100,"in":[647.98,647.98]},{"in":[647.98,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u25440').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,647.98]},{"speed":[0,0],"in":[647.98,Infinity]}]);/* scroll effect */
$('#u25440').registerOpacityScrollEffect([{"in":[-Infinity,647.98],"fade":401,"opacity":0},{"opacity":100,"in":[647.98,647.98]},{"in":[647.98,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u25441').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,651.08]},{"speed":[0,0],"in":[651.08,Infinity]}]);/* scroll effect */
$('#u25441').registerOpacityScrollEffect([{"in":[-Infinity,651.08],"fade":346.1,"opacity":0},{"opacity":100,"in":[651.08,651.08]},{"in":[651.08,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u18071').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1990.01]},{"speed":[0,0],"in":[1990.01,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
