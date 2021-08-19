<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "personagenss.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
 
  <meta name="generator" content="2015.0.0.309"/>
  <title>Personagens</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/personagenss.css?3841362352" id="pagesheet"/>
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
    <div class="clearfix colelem" id="pu26456"><!-- group -->
     <div class="mse_pre_init" id="u26456" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u26456_img" alt="" width="1200" height="619" src="images/papernovo-u26456.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu26289"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u26339"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26340" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26341" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26297"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26300" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26302" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26304"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26314" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26316" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26317"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u26305"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u26306"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u26307"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26310" href="sobre-os-jogos.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26312-4"><!-- rasterized frame --><div id="u26312-4_clip"><img id="u26312-4_img" alt="Sobre os Jogos" width="156" height="33" src="images/u26312-4.png"/></div></div></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26325"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26335" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26337" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26336"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u26326"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u26327"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u26328"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26331" href="sobre-os-personagens.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26333-4"><!-- rasterized frame --><div id="u26333-4_clip"><img id="u26333-4_img" alt="Sobre os Personagens" width="214" height="31" src="images/u26333-4.png"/></div></div></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26318"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26321" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26323" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
          <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
      <div class="MenuItemContainer clearfix grpelem" id="u26290"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26293" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26294" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u26290"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26293" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13809" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }?>
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u26466" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u26466.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u26349" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u26349.png"/><!-- rasterized frame -->
    </div>
    <div class="clearfix colelem" id="pu26410-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u26410-4" href="formlogin.php"><!-- rasterized frame --><img id="u26410-4_img" alt="Entrar" width="60" height="32" src="images/u26410-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u26455-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u26455-4_img" alt="Cadastrar" width="98" height="26" src="images/u26455-4.png"/></a>
     <div class="clip_frame grpelem" id="u26464"><!-- image -->
      <img class="block" id="u26464_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
     </div>
    </div>
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
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu26353"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u26382"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26383" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26386" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26396"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26397" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26398" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26368"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26369" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26371" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26372"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u26373"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u26374"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u26375"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26376" href="sobre-os-jogos.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26378-4"><!-- rasterized frame --><div id="u26378-4_clip"><img id="u26378-4_img" alt="Sobre os Jogos" width="145" height="31" src="images/u26378-4.png"/></div></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26354"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26355" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26356" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26358"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u26359"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u26360"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u26361"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26362" href="sobre-os-personagens.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26363-4"><!-- rasterized frame --><div id="u26363-4_clip"><img id="u26363-4_img" alt="Sobre os Personagens" width="214" height="31" src="images/u26363-4.png"/></div></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26389"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26392" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26395" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
     <div class="MenuItemContainer clearfix grpelem" id="u26403"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26404" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26406" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u26403"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26404" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13859" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }?>
    </nav>
    <div class="clearfix colelem" id="ppu26279"><!-- group -->
     <div class="clearfix grpelem" id="pu26279"><!-- group -->
      <div class="clip_frame grpelem" id="u26279"><!-- image -->
       <img class="block" id="u26279_img" src="images/grass_field5-1024x1024-crop-u26279.png" alt="" width="600" height="347"/>
      </div>
      <div class="clip_frame grpelem" id="u26462" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-212" data-mu-ie-matrix-dy="212"><!-- image -->
       <img class="block" id="u26462_img" src="images/tp2_front.png" alt="" width="442" height="867"/>
      </div>
      <div class="grpelem" id="u26276"><!-- custom html -->
       
<div class="fb-like" data-href="http://recriajogos.com.br/personagens.php" data-send="false" data-width="291" data-show-faces="false" data-colorscheme="light" data-layout="standard" data-action="like"></div>

</div>
      <div class="SlideShowWidget clearfix widget_invisible grpelem" id="slideshowu26411"><!-- none box -->
       <div class="popup_anchor" id="u26428popup">
        <div class="SlideShowContentPanel rgba-background clearfix" id="u26428"><!-- stack box -->
         <div class="SSSlide clip_frame grpelem" id="u26431"><!-- image -->
          <img class="block ImageInclude" id="u26431_img" data-src="images/girafa%20final.png" src="images/blank.gif" alt="" data-width="432" data-height="608"/>
         </div>
         <div class="SSSlide invi clip_frame grpelem" id="u26437"><!-- image -->
          <img class="block ImageInclude" id="u26437_img" data-src="images/urso%20final.png" src="images/blank.gif" alt="" data-width="608" data-height="608"/>
         </div>
         <div class="SSSlide invi clip_frame grpelem" id="u26429"><!-- image -->
          <img class="block ImageInclude" id="u26429_img" data-src="images/image1%201.png" src="images/blank.gif" alt="" data-width="308" data-height="308"/>
         </div>
         <div class="SSSlide invi clip_frame grpelem" id="u26433"><!-- image -->
          <img class="block ImageInclude" id="u26433_img" data-src="images/macaco%20colorido.png" src="images/blank.gif" alt="" data-width="608" data-height="608"/>
         </div>
         <div class="SSSlide invi clip_frame grpelem" id="u26435"><!-- image -->
          <img class="block ImageInclude" id="u26435_img" data-src="images/le%c3%a3o%20final.png" src="images/blank.gif" alt="" data-width="689" data-height="608"/>
         </div>
        </div>
       </div>
       <div class="popup_anchor" id="u26417popup">
        <div class="SSSlideLinks clearfix" id="u26417"><!-- none box -->
         <div class="SSSlideLink clip_frame clearfix grpelem" id="u26422"><!-- image -->
          <div id="u26422_clip">
           <img class="position_content" id="u26422_img" src="images/girafa%20final91x128.png" alt="" width="91" height="128"/>
          </div>
         </div>
         <div class="SSSlideLink clip_frame clearfix grpelem" id="u26420"><!-- image -->
          <div id="u26420_clip">
           <img class="position_content" id="u26420_img" src="images/urso%20final128x128.png" alt="" width="128" height="128"/>
          </div>
         </div>
         <div class="SSSlideLink clip_frame grpelem" id="u26418"><!-- image -->
          <img class="block" id="u26418_img" src="images/image1%201123x123.png" alt="" width="123" height="123"/>
         </div>
         <div class="SSSlideLink clip_frame clearfix grpelem" id="u26424"><!-- image -->
          <div id="u26424_clip">
           <img class="position_content" id="u26424_img" src="images/macaco%20colorido131x131.png" alt="" width="131" height="131"/>
          </div>
         </div>
         <div class="SSSlideLink clip_frame clearfix grpelem" id="u26426"><!-- image -->
          <div id="u26426_clip">
           <img class="position_content" id="u26426_img" src="images/le%c3%a3o%20final140x123.png" alt="" width="139" height="123"/>
          </div>
         </div>
        </div>
       </div>
       <div class="popup_anchor" id="u26440popup">
        <div class="SlideShowCaptionPanel clearfix" id="u26440"><!-- stack box -->
         <div class="SSSlideCaption clearfix grpelem" id="u26442-4"><!-- content -->
          <p>Girafa</p>
         </div>
         <div class="SSSlideCaption invi clearfix grpelem" id="u26441-4"><!-- content -->
          <p>Urso</p>
         </div>
         <div class="SSSlideCaption invi clearfix grpelem" id="u26445-4"><!-- content -->
          <p>Patinho</p>
         </div>
         <div class="SSSlideCaption invi clearfix grpelem" id="u26443-4"><!-- content -->
          <p>Macaco</p>
         </div>
         <div class="SSSlideCaption invi clearfix grpelem" id="u26444-4"><!-- content -->
          <p>Leão</p>
         </div>
        </div>
       </div>
       <div class="popup_anchor">
        <div class="SSCloseButton popup_element rounded-corners clearfix" id="u26413"><!-- group -->
         <div class="clearfix grpelem" id="u26414-4"><!-- content -->
          <p>X</p>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="clip_frame grpelem" id="u26283"><!-- image -->
      <img class="block" id="u26283_img" src="images/5.png" alt="" width="205" height="234"/>
     </div>
     <div class="grpelem" id="u26447-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.848,M12=0.5299,M21=-0.5299,M22=0.848,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-57"><!-- rasterized frame -->
      <img id="u26447-4_img" alt="Personagens" width="234" height="60" src="images/u26447-4.png"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu26459"><!-- column -->
     <div class="position_content" id="pu26459_position_content">
      <div class="mse_pre_init" id="u26459"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u26278" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u26348" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u26454" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u26458" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
     </div>
    </div>
    <div class="clip_frame colelem" id="u26460"><!-- image -->
     <img class="block" id="u26460_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u26451"><!-- simple frame --></div>
    <a class="nonblock nontext mse_pre_init ose_pre_init" id="u26351" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u26351_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u26351.png"/></a>
    <a class="nonblock nontext mse_pre_init ose_pre_init" id="u26281" href="help/index.php"><!-- rasterized frame --><img id="u26281_img" alt="" width="164" height="149" src="images/le%c3%a3o%20final-u26281.png"/></a>
    <div class="clearfix colelem" id="pu26448"><!-- group -->
     <img class="grpelem" id="u26448" alt="" width="734" height="519" src="images/tablet_png8592-u26448.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u26285"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/personagens.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>
    </div>
    <div class="clearfix colelem" id="pu26287"><!-- group -->
     <img class="mse_pre_init ose_pre_init" id="u26287" alt="" width="35" height="24" src="images/folha%20com%20corte-u26287.png"/><!-- rasterized frame -->
     <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u26450"><!-- simple frame --></div>
    </div>
    <div class="clip_frame colelem" id="u26452"><!-- image -->
     <img class="block" id="u26452_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u26346" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u26346_img" alt="" width="1459" height="869" src="images/paper10-u26346.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u26341-a.png" alt=""/>
   <img class="preload" src="images/u26302-a.png" alt=""/>
   <img class="preload" src="images/u26316-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u26337-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u26323-a.png" alt=""/>
   <img class="preload" src="images/u26294-a.png" alt=""/>
   <img class="preload" src="images/u26386-a.png" alt=""/>
   <img class="preload" src="images/u26398-a.png" alt=""/>
   <img class="preload" src="images/u26371-a.png" alt=""/>
   <img class="preload" src="images/u26356-a.png" alt=""/>
   <img class="preload" src="images/u26395-a.png" alt=""/>
   <img class="preload" src="images/u26406-a.png" alt=""/>
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
  <script src="scripts/webpro.js?3803554875" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?242596657" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?493285861" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4038331989" type="text/javascript"></script>
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
$('#u26456').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48.38]},{"speed":[0,0],"in":[48.38,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu26289').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34.38]},{"speed":[0,0],"in":[34.38,Infinity]}]);/* scroll effect */
$('#menuu26289').registerOpacityScrollEffect([{"fade":0.05,"in":[-Infinity,34.38],"opacity":100},{"opacity":100,"in":[34.38,34.38]},{"fade":1,"in":[34.38,Infinity],"opacity":0}]);/* scroll effect */
$('#u26466').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35.38]},{"speed":[0,0],"in":[35.38,Infinity]}]);/* scroll effect */
$('#u26466').registerOpacityScrollEffect([{"fade":0,"in":[-Infinity,35.38],"opacity":100},{"opacity":100,"in":[35.38,35.38]},{"fade":2,"in":[35.38,Infinity],"opacity":0}]);/* scroll effect */
$('#u26349').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38.38]},{"speed":[0,0],"in":[38.38,Infinity]}]);/* scroll effect */
$('#u26349').registerOpacityScrollEffect([{"fade":2,"in":[-Infinity,38.38],"opacity":0},{"opacity":100,"in":[38.38,38.38]},{"fade":0,"in":[38.38,Infinity],"opacity":100}]);/* scroll effect */
$('#menuu26353').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53.38]},{"speed":[0,0],"in":[53.38,Infinity]}]);/* scroll effect */
$('#menuu26353').registerOpacityScrollEffect([{"fade":20,"in":[-Infinity,53.38],"opacity":0},{"opacity":100,"in":[53.38,53.38]},{"fade":0,"in":[53.38,Infinity],"opacity":100}]);/* scroll effect */
Muse.Utils.initWidget('#slideshowu26411', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:false,displayInterval:3000,slideLinkStopsSlideShow:false,transitionStyle:'horizontal',lightboxEnabled_runtime:true,shuffle:false,transitionDuration:500,enableSwipe:false,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu26411 */
$('#u26459').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26278').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26348').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26454').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26458').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26351').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,405.54]},{"speed":[0,0],"in":[405.54,Infinity]}]);/* scroll effect */
$('#u26351').registerOpacityScrollEffect([{"fade":285.4,"in":[-Infinity,405.54],"opacity":0},{"opacity":100,"in":[405.54,405.54]},{"fade":50,"in":[405.54,Infinity],"opacity":100}]);/* scroll effect */
$('#u26281').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,393.08]},{"speed":[0,0],"in":[393.08,Infinity]}]);/* scroll effect */
$('#u26281').registerOpacityScrollEffect([{"fade":346.1,"in":[-Infinity,393.08],"opacity":0},{"opacity":100,"in":[393.08,393.08]},{"fade":0,"in":[393.08,Infinity],"opacity":100}]);/* scroll effect */
$('#u26287').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,389.98]},{"speed":[0,0],"in":[389.98,Infinity]}]);/* scroll effect */
$('#u26287').registerOpacityScrollEffect([{"fade":319.75,"in":[-Infinity,389.98],"opacity":0},{"opacity":100,"in":[389.98,389.98]},{"fade":50,"in":[389.98,Infinity],"opacity":100}]);/* scroll effect */
$('#u26450').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,389.98]},{"speed":[0,0],"in":[389.98,Infinity]}]);/* scroll effect */
$('#u26450').registerOpacityScrollEffect([{"fade":401,"in":[-Infinity,389.98],"opacity":0},{"opacity":100,"in":[389.98,389.98]},{"fade":50,"in":[389.98,Infinity],"opacity":100}]);/* scroll effect */
$('#u26346').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1769.46]},{"speed":[0,0],"in":[1769.46,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
