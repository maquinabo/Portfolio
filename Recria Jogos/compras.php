<?php session_start();

 require_once './classes/PacotesDAO.php';
 require_once './classes/PacotesVO.php';
 
 $objBDPacote= new PacotesDAO();
 $objPacote= new PacotesVO();
 
 $rsPacote=$objBDPacote->listaPacote("1");
 $tblPacote=  mysql_fetch_array($rsPacote);
 
  $rsPacotes=$objBDPacote->listaPacote("2");
 $tblPacotes=  mysql_fetch_array($rsPacotes);
 
?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "compras.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <link rel="shortcut icon" href="images/compras-favicon.ico?3913429556"/>
    <link rel="shortcut icon" href="images/favicon.ico"/>
  <title>Compras</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/compras.css" id="pagesheet"/>
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
    <div class="clearfix colelem" id="pu13726"><!-- group -->
     <div class="mse_pre_init" id="u13726" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u13726_img" alt="" width="1200" height="619" src="images/papernovo-u13726.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu13602"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u24953"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24954" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24956" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13638"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13639" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13640" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13617"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13627" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13628" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13629"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u13618"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u13619"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u21905"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21906" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21909-4" alt="Sobre os Jogos" width="156" height="33" src="images/u21909-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13603"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13604" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13605" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13606"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u13608"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u13609"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u20680"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u20681" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u20684-4" alt="Sobre os Personagens" width="214" height="31" src="images/u20684-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24236"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24237" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24239" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u13903"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u13904" href="compras.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13907-4"><!-- rasterized frame --><div id="u13907-4_clip"><img id="u13907-4_img" alt="Compras" width="110" height="33" src="images/u13907-4-a.png"/></div></div></a>
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
     <div class="MenuItemContainer clearfix grpelem" id="u25037"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u25040" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u25042" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13713"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13714" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13715" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13664"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13674" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13675" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13676"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u13665"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u13666"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u21842"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u21843" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u21844-4" alt="Sobre os Jogos" width="145" height="31" src="images/u21844-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13678"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u13688" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13689" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u13691"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u13679"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u13680"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u20603"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u20604" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u20607-4" alt="Sobre os Personagens" width="214" height="31" src="images/u20607-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24201"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24204" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24207" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u13910"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u13911" href="compras.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13913-4"><!-- rasterized frame --><div id="u13913-4_clip"><img id="u13913-4_img" alt="Compras" width="95" height="28" src="images/u13913-4-a.png"/></div></div></a>
     </div>
    </nav>
    <div class="clearfix colelem" id="ppu13767"><!-- group -->
     <div class="clearfix grpelem" id="pu13767"><!-- column -->
      <div class="clip_frame colelem" id="u13767"><!-- image -->
       <img class="block" id="u13767_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
      </div>
      <div class="clearfix colelem" id="pu13932"><!-- group -->
       <div class="shadow block grpelem" id="u13932"><!-- image -->
        <img class="shadow" id="u13932_img" src="images/pacotes4.jpg" alt="" width="933" height="525"/>
       </div>
       <div class="grpelem" id="u19251"><!-- custom html -->
        
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="lucasjosecosta@hotmail.com">
<input type="hidden" name="lc" value="BR">
<input type="hidden" name="item_name" value="Pacote Responsáveis">
<input type="hidden" name="item_number" value="1">
<input type="hidden" name="amount" value="<?=$tblPacote['preco_PACOTE']?>">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0">
<input type="hidden" name="shipping" value="0">
<input type="hidden" name="bn" value="Adobe_SP_Muse">
<?php 
If($_SESSION['status']== false){
    ?><div class="tipografia"><p>Faça login para poder comprar</p></div><?php
}else {
?>
<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
<?php } ?>
</form>

</div>
       <div class="grpelem" id="u19253"><!-- custom html -->
        
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="lucasjosecosta@hotmail.com">
<input type="hidden" name="lc" value="BR">
<input type="hidden" name="item_name" value="Pacote Escola">
<input type="hidden" name="item_number" value="1">
<input type="hidden" name="amount" value="<?=$tblPacotes['preco_PACOTE']?>">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0">
<input type="hidden" name="shipping" value="0">
<input type="hidden" name="bn" value="Adobe_SP_Muse">
<?php 
If($_SESSION['status']== false){
    ?><div class="tipografia"><p>Faça login para poder comprar</p></div><?php
}else {
?>
<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
<?php } ?>

</form>
</div>
       <div class="grpelem tipografiaDescricao" id="u22053"><?=$tblPacote['descricao_PACOTE'];?></div>
       <div class="grpelem tipografiaDescricao" id="u22055"><?=$tblPacotes['descricao_PACOTE'];?></div>
      </div>
     </div>
     <img class="grpelem" id="u13930" alt="" width="204" height="205" src="images/4-u13930.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u13934-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.848,M12=0.5299,M21=-0.5299,M22=0.848,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-57"><!-- rasterized frame -->
      <img id="u13934-4_img" alt="Compras" width="234" height="60" src="images/u13934-4.png"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu25396"><!-- column -->
     <div class="position_content" id="pu25396_position_content">
      <div class="mse_pre_init" id="u25396"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u25397" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25398" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25399" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u25400" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
     </div>
    </div>
    <div class="clip_frame colelem" id="u13952"><!-- image -->
     <img class="block" id="u13952_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u13951"><!-- simple frame --></div>
    <a class="nonblock nontext mse_pre_init ose_pre_init" id="u22173" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u22173_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u22173.png"/></a>
    <div class="clearfix colelem" id="pu13947"><!-- group -->
     <img class="grpelem" id="u13947" alt="" width="734" height="519" src="images/tablet_png8592-u13947.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u13949"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/compras.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>
    </div>
    <div class="clearfix colelem" id="pu22171"><!-- group -->
     <img class="mse_pre_init ose_pre_init" id="u22171" alt="" width="35" height="24" src="images/folha%20com%20corte-u22171.png"/><!-- rasterized frame -->
     <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u22175"><!-- simple frame --></div>
     <a class="nonblock nontext mse_pre_init ose_pre_init" id="u22176" href="help/index.php"><!-- rasterized frame --><img id="u22176_img" alt="" width="164" height="149" src="images/le%c3%a3o%20final-u22176.png"/></a>
    </div>
    <div class="clip_frame colelem" id="u25225"><!-- image -->
     <img class="block" id="u25225_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u25223" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u25223_img" alt="" width="1459" height="869" src="images/paper10-u25223.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u24956-a.png" alt=""/>
   <img class="preload" src="images/u13640-a.png" alt=""/>
   <img class="preload" src="images/u13628-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u13605-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u24239-a.png" alt=""/>
   <img class="preload" src="images/u25042-a.png" alt=""/>
   <img class="preload" src="images/u13715-a.png" alt=""/>
   <img class="preload" src="images/u13675-a.png" alt=""/>
   <img class="preload" src="images/u13689-a.png" alt=""/>
   <img class="preload" src="images/u24207-a.png" alt=""/>
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
$('#u13726').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48]},{"speed":[0,0],"in":[48,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu13602').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34]},{"speed":[0,0],"in":[34,Infinity]}]);/* scroll effect */
$('#menuu13602').registerOpacityScrollEffect([{"in":[-Infinity,34],"fade":0.05,"opacity":100},{"opacity":100,"in":[34,34]},{"in":[34,Infinity],"fade":1,"opacity":0}]);/* scroll effect */
$('#u13740').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35]},{"speed":[0,0],"in":[35,Infinity]}]);/* scroll effect */
$('#u13740').registerOpacityScrollEffect([{"in":[-Infinity,35],"fade":0,"opacity":100},{"opacity":100,"in":[35,35]},{"in":[35,Infinity],"fade":2,"opacity":0}]);/* scroll effect */
$('#u13763').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38]},{"speed":[0,0],"in":[38,Infinity]}]);/* scroll effect */
$('#u13763').registerOpacityScrollEffect([{"in":[-Infinity,38],"fade":2,"opacity":0},{"opacity":100,"in":[38,38]},{"in":[38,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#menuu13663').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53]},{"speed":[0,0],"in":[53,Infinity]}]);/* scroll effect */
$('#menuu13663').registerOpacityScrollEffect([{"in":[-Infinity,53],"fade":20,"opacity":0},{"opacity":100,"in":[53,53]},{"in":[53,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u25396').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25397').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25398').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25399').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25400').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u22173').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,565.63]},{"speed":[0,0],"in":[565.63,Infinity]}]);/* scroll effect */
$('#u22173').registerOpacityScrollEffect([{"in":[-Infinity,565.63],"fade":285.4,"opacity":0},{"opacity":100,"in":[565.63,565.63]},{"in":[565.63,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u22171').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,550.07]},{"speed":[0,0],"in":[550.07,Infinity]}]);/* scroll effect */
$('#u22171').registerOpacityScrollEffect([{"in":[-Infinity,550.07],"fade":319.75,"opacity":0},{"opacity":100,"in":[550.07,550.07]},{"in":[550.07,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u22175').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,550.07]},{"speed":[0,0],"in":[550.07,Infinity]}]);/* scroll effect */
$('#u22175').registerOpacityScrollEffect([{"in":[-Infinity,550.07],"fade":401,"opacity":0},{"opacity":100,"in":[550.07,550.07]},{"in":[550.07,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u22176').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,553.17]},{"speed":[0,0],"in":[553.17,Infinity]}]);/* scroll effect */
$('#u22176').registerOpacityScrollEffect([{"in":[-Infinity,553.17],"fade":346.1,"opacity":0},{"opacity":100,"in":[553.17,553.17]},{"in":[553.17,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u25223').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1877.77]},{"speed":[0,0],"in":[1877.77,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
