<?php session_start();

 require_once 'classes/EmpresasDAO.php';
 require_once 'classes/EmpresasVO.php';
 
 $objBDEmpresa=new EmpresasDAO();
 $objEmpresa= new EmpresasVO();
 
 $rsEmpresa= $objBDEmpresa->listaEmpresa("6");
$tblEmpresa=  mysql_fetch_array($rsEmpresa);
?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
  <title>Início</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/index.css" id="pagesheet"/>
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
    <div class="clearfix colelem" id="pu24795"><!-- group -->
     <div class="mse_pre_init" id="u24795" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u24795_img" alt="" width="1200" height="619" src="images/papernovo-u24795.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu24805"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u25051"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u25052" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u25054-4"><!-- rasterized frame --><div id="u25054-4_clip"><img id="u25054-4_img" alt="Início" width="70" height="32" src="images/u25054-4-a.png"/></div></div></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24855"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24858" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24860" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24820"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24830" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24831" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u24833"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u24821"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u24822"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u24823"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u24824" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24825-4" alt="Sobre os Jogos" width="156" height="33" src="images/u24825-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24834"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24844" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24846" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u24847"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u24835"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u24836"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u24837"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u24840" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24841-4" alt="Sobre os Personagens" width="214" height="31" src="images/u24841-4.png"/><!-- rasterized frame --></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u24848"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24849" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24851" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
      <div class="MenuItemContainer clearfix grpelem" id="u24813"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24816" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24818" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u24813"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24816" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13809" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         
         <?php } ?>
         
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u24694" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u24694.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u24706" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u24706.png"/><!-- rasterized frame -->
    </div>
       
    <div class="clearfix colelem" id="pu24792-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u24792-4" href="formlogin.php"><!-- rasterized frame --><img id="u24792-4_img" alt="Entrar" width="60" height="32" src="images/u24792-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u24708-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u24708-4_img" alt="Cadastrar" width="98" height="26" src="images/u24708-4.png"/></a>
     <div class="clip_frame grpelem" id="u24696"><!-- image -->
      <img class="block" id="u24696_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
    </div></div>
       <div class="clearfix colelem" id="mi" ><!-- group -->
         
        <?php 
       }else{
        if(isset($_SESSION['status'])== true)?>
         <font size="5pt" face="Berlin Sans FB"> 
             <?php  echo $_SESSION['msg']; 
             
             if(isset($_SESSION['statu'])== true){ ?> 
                <div class="clearfix colelem" id="mi2">
                    <div class="grpelem" id="u2578"><!-- image -->
                    <img src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
                    </div>
                            <?php
                            echo $_SESSION['apelido'];?>
                    </div>
                                <?php
                            }
             ?>
           
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
       
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu24733"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u25044"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u25045" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u25048-4"><!-- rasterized frame --><div id="u25048-4_clip"><img id="u25048-4_img" alt="Início" width="61" height="28" src="images/u25048-4-a.png"/></div></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24741"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24742" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24743" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24748"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24749" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24750" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u24752"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u24753"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u24754"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u24755"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u24756" href="sobre-os-jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24757-4" alt="Sobre os Jogos" width="145" height="31" src="images/u24757-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24776"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24786" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24789" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u24787"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u24777"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u24778"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u24779"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u24780" href="sobre-os-personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24782-4" alt="Sobre os Personagens" width="214" height="31" src="images/u24782-4.png"/><!-- rasterized frame --></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u24762"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24763" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24766" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
        <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
     <div class="MenuItemContainer clearfix grpelem" id="u24769"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24770" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u24772" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
         <?php }else{ ?>
        <div class="MenuItemContainer clearfix grpelem" id="u24769"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u24770" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13859" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }?>
    </nav>
    <div class="PamphletWidget clearfix colelem" id="pamphletu24716"><!-- none box -->
     <div class="ThumbGroup clearfix grpelem" id="u24725"><!-- none box -->
      <div class="popup_anchor">
       <div class="Thumb popup_element shadow museBGSize" id="u24727"><!-- simple frame --></div>
      </div>
      <div class="popup_anchor">
       <div class="Thumb popup_element shadow" id="u24728"><!-- simple frame --></div>
      </div>
      <div class="popup_anchor">
       <div class="Thumb popup_element shadow" id="u24726"><!-- simple frame --></div>
      </div>
     </div>
     <div class="popup_anchor" id="u24717popup">
      <div class="ContainerGroup clearfix" id="u24717"><!-- stack box -->
       <div class="Container shadow museBGSize grpelem" id="u24719"><!-- simple frame --></div>
       <div class="Container invi shadow grpelem" id="u24718"><!-- simple frame --></div>
       <div class="Container invi shadow museBGSize grpelem" id="u24720"><!-- simple frame --></div>
      </div>
     </div>
    </div>
    <div class="mse_pre_init" id="u25255"><!-- simple frame --></div>
    <a class="nonblock nontext rounded-corners mse_pre_init" id="u25256" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
    <a class="nonblock nontext museBGSize mse_pre_init" id="u25257" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
    <a class="nonblock nontext museBGSize mse_pre_init" id="u25258" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
    <a class="nonblock nontext museBGSize mse_pre_init" id="u25259" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
    <div class="clearfix colelem" id="pu24799"><!-- group -->
     <img class="grpelem" id="u24799" alt="" width="230" height="154" src="images/bagulho1-u24799.png"/><!-- rasterized frame -->
     <a href="perfiljogo.php?jogo=5">
     <div class="shadow rounded-corners clearfix grpelem" id="u24688"><!-- group -->
      <div class="clip_frame grpelem" id="u24797"><!-- image -->
       <img class="block" id="u24797_img" src="images/alfiler.png" alt="" width="53" height="50"/>
      </div>
     </div>
     </a>
     <a href="perfiljogo.php?jogo=3">
     <div class="shadow rounded-corners clearfix grpelem" id="u24801"><!-- group -->
      <div class="clip_frame grpelem" id="u24686"><!-- image -->
       <img class="block" id="u24686_img" src="images/alfiler.png" alt="" width="53" height="50"/>
      </div>
     </div>
     </a>
     <a href="perfiljogo.php?jogo=4">
     <div class="shadow rounded-corners clearfix grpelem" id="u24862"><!-- group -->
      <div class="clip_frame grpelem" id="u24701"><!-- image -->
       <img class="block" id="u24701_img" src="images/alfiler.png" alt="" width="53" height="50"/>
      </div>
     </div>
     </a>
     <div class="grpelem" id="u24700-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-3" data-mu-ie-matrix-dy="-8"><!-- rasterized frame -->
      <img id="u24700-4_img" alt="Jogos" width="129" height="55" src="images/u24700-4.png"/>
     </div>
    </div>
    <div class="clip_frame colelem" id="u24803"><!-- image -->
     <img class="block" id="u24803_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u24705"><!-- simple frame --></div>
    <div class="clearfix colelem" id="ppu24714"><!-- group -->
     <div class="clearfix grpelem" id="pu24714"><!-- group -->
      <div class="clip_frame grpelem" id="u24714" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.309,M12=0.9511,M21=-0.9511,M22=0.309,SizingMethod='auto expand')" data-mu-ie-matrix-dx="9" data-mu-ie-matrix-dy="-22"><!-- image -->
       <img class="block" id="u24714_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
      </div>
      <img class="grpelem" id="u24698" alt="" width="573" height="582" src="images/sem%20t%c3%adtulo-1-u24698.png"/><!-- rasterized frame -->
      <div id="u5778-9">
             <div id="divDescricao" class="tipografiaDescricao">
                  <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
<br><?=$tblEmpresa['descricao_EMPRESA'];?> <br><br>
          <a href="sobre-nos.php"><font face="Berlin Sans FB" size="5pt"> Continuar lendo...  </font> </a>
      </div>
         </div>
     </div>
     <img class="grpelem" id="u24790" alt="" width="191" height="211" src="images/4-u24790.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u24685-5" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9816,M12=-0.1908,M21=0.1908,M22=0.9816,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-10"><!-- rasterized frame -->
      <img id="u24685-5_img" alt="Sobre Nós
" width="116" height="140" src="images/u24685-5.png"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu24731"><!-- group -->
     <a class="nonblock nontext mse_pre_init ose_pre_init" id="u24731" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u24731_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u24731.png"/></a>
     <img class="mse_pre_init ose_pre_init" id="u24689" alt="" width="35" height="24" src="images/folha%20com%20corte-u24689.png"/><!-- rasterized frame -->
     <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u24802"><!-- simple frame --></div>
     <a class="nonblock nontext mse_pre_init ose_pre_init" id="u24703" href="help/index.php"><!-- rasterized frame --><img id="u24703_img" alt="" width="164" height="149" src="images/le%c3%a3o%20final-u24703.png"/></a>
    </div>
    <div class="clip_frame colelem" id="u24691"><!-- image -->
     <img class="block" id="u24691_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
    </div>
    <div class="shadow rounded-corners colelem" id="u24693"><!-- simple frame --></div>
    <div class="clearfix colelem" id="pu24710"><!-- group -->
     <img class="grpelem" id="u24710" alt="" width="734" height="519" src="images/tablet_png8592-u24710.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u24793"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/index.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>
    </div>
    <div class="clip_frame colelem" id="u24863"><!-- image -->
     <img class="block" id="u24863_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u24712" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u24712_img" alt="" width="1459" height="869" src="images/paper10-u24712.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u24860-a.png" alt=""/>
   <img class="preload" src="images/u24831-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u24846-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u24851-a.png" alt=""/>
   <img class="preload" src="images/u24818-a.png" alt=""/>
   <img class="preload" src="images/u24743-a.png" alt=""/>
   <img class="preload" src="images/u24750-a.png" alt=""/>
   <img class="preload" src="images/u24789-a.png" alt=""/>
   <img class="preload" src="images/u24766-a.png" alt=""/>
   <img class="preload" src="images/u24772-a.png" alt=""/>
   <img class="preload" src="images/jogo-u24727-a-fr.jpg" alt=""/>
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
$('#u24795').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48]},{"speed":[0,0],"in":[48,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu24805').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34]},{"speed":[0,0],"in":[34,Infinity]}]);/* scroll effect */
$('#menuu24805').registerOpacityScrollEffect([{"in":[-Infinity,34],"fade":0.05,"opacity":100},{"opacity":100,"in":[34,34]},{"in":[34,Infinity],"fade":1,"opacity":0}]);/* scroll effect */
$('#u24694').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35]},{"speed":[0,0],"in":[35,Infinity]}]);/* scroll effect */
$('#u24694').registerOpacityScrollEffect([{"in":[-Infinity,35],"fade":0,"opacity":100},{"opacity":100,"in":[35,35]},{"in":[35,Infinity],"fade":2,"opacity":0}]);/* scroll effect */
$('#u24706').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38]},{"speed":[0,0],"in":[38,Infinity]}]);/* scroll effect */
$('#u24706').registerOpacityScrollEffect([{"in":[-Infinity,38],"fade":2,"opacity":0},{"opacity":100,"in":[38,38]},{"in":[38,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#menuu24733').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53]},{"speed":[0,0],"in":[53,Infinity]}]);/* scroll effect */
$('#menuu24733').registerOpacityScrollEffect([{"in":[-Infinity,53],"fade":20,"opacity":0},{"opacity":100,"in":[53,53]},{"in":[53,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
Muse.Utils.initWidget('#pamphletu24716', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'none',autoPlay:true,displayInterval:3000,transitionStyle:'fading',transitionDuration:300,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu24716 */
$('#u25255').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25256').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25257').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25258').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u25259').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u24731').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,700.63]},{"speed":[0,0],"in":[700.63,Infinity]}]);/* scroll effect */
$('#u24731').registerOpacityScrollEffect([{"in":[-Infinity,700.63],"fade":285.4,"opacity":0},{"opacity":100,"in":[700.63,700.63]},{"in":[700.63,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u24689').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,685.07]},{"speed":[0,0],"in":[685.07,Infinity]}]);/* scroll effect */
$('#u24689').registerOpacityScrollEffect([{"in":[-Infinity,685.07],"fade":319.75,"opacity":0},{"opacity":100,"in":[685.07,685.07]},{"in":[685.07,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u24802').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,685.07]},{"speed":[0,0],"in":[685.07,Infinity]}]);/* scroll effect */
$('#u24802').registerOpacityScrollEffect([{"in":[-Infinity,685.07],"fade":401,"opacity":0},{"opacity":100,"in":[685.07,685.07]},{"in":[685.07,Infinity],"fade":50,"opacity":100}]);/* scroll effect */
$('#u24703').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,688.17]},{"speed":[0,0],"in":[688.17,Infinity]}]);/* scroll effect */
$('#u24703').registerOpacityScrollEffect([{"in":[-Infinity,688.17],"fade":346.1,"opacity":0},{"opacity":100,"in":[688.17,688.17]},{"in":[688.17,Infinity],"fade":0,"opacity":100}]);/* scroll effect */
$('#u24712').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,2762.97]},{"speed":[0,0],"in":[2762.97,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
