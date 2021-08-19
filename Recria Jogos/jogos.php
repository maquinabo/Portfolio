<?php session_start();

require_once './classes/JogosVO.php';  
         require_once './classes/JogosDAO.php';
         
         $objBDJogos=new JogosDAO();
         $rsJogos= $objBDJogos->listaJogos("");
         $rsJogo= $objBDJogos->listaJogos("");
         $rsJogo1= $objBDJogos->listaJogos("");
         $rsJogo2= $objBDJogos->listaJogos("");
         
         
?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.scrolleffects.js", "jquery.musemenu.js", "jquery.watch.js", "jogoss.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
 <link rel="shortcut icon" href="images/favicon.ico?3913429556"/> 
 <link rel="shortcut icon" href="images/in%c3%adcio-favicon.ico?3913429556"/>
  <title>Jogos</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  
  <link rel="stylesheet" type="text/css" href="css/jogoss.css" id="pagesheet"/>
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
    <div class="clearfix colelem" id="pu26076"><!-- group -->
     <div class="mse_pre_init" id="u26076" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- rasterized frame -->
      <img id="u26076_img" alt="" width="1200" height="619" src="images/papernovo-u26076.png"/>
     </div>
     <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu26078"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u26100"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26103" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26106" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26079"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26080" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26081" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26086"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26096" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26098" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26099"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u26087"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u26088"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u26089"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26092" href="sobre-os-jogos.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26094-4"><!-- rasterized frame --><div id="u26094-4_clip"><img id="u26094-4_img" alt="Sobre os Jogos" width="156" height="33" src="images/u26094-4.png"/></div></div></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26128"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26129" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26131" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26130"><!-- image --></div></a>
       <div class="SubMenu  MenuLevel1 clearfix" id="u26133"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u26134"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem" id="u26135"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26138" href="sobre-os-personagens.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26139-4"><!-- rasterized frame --><div id="u26139-4_clip"><img id="u26139-4_img" alt="Sobre os Personagens" width="214" height="31" src="images/u26139-4.png"/></div></div></a></li>
        </ul>
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u26114"><!-- vertical box -->
          <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26115" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26117" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
      <div class="MenuItemContainer clearfix grpelem" id="u26121"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26122" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26123" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u26121"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26122" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13809" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         
         <?php } ?>
     </nav>
     <img class="mse_pre_init ose_pre_init" id="u26142" alt="" width="222" height="197" src="images/logo%20mais%20novo%20que%20tudo23-u26142.png"/><!-- rasterized frame -->
     <img class="mse_pre_init ose_pre_init" id="u26144" alt="" width="155" height="139" src="images/logo%20mais%20novo%20que%20tudo23-u26144.png"/><!-- rasterized frame -->
    </div>
       
    <div class="clearfix colelem" id="pu26210-4"><!-- group -->
        <div class="clearfix colelem" id="mi" ><!-- group -->
        <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']== false) { 
       ?>
    </div>
     <a class="nonblock nontext grpelem" id="u26210-4" href="formlogin.php"><!-- rasterized frame --><img id="u26210-4_img" alt="Entrar" width="60" height="32" src="images/u26210-4.png"/></a>
     <a class="nonblock nontext grpelem" id="u26211-4" href="formcadastrar.php"><!-- rasterized frame --><img id="u26211-4_img" alt="Cadastrar" width="98" height="26" src="images/u26211-4.png"/></a>
     <div class="clip_frame grpelem" id="u26212"><!-- image -->
      <img class="block" id="u26212_img" src="images/folha%20com%20corte.png" alt="" width="48" height="23"/>
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
       
    <nav class="MenuBar clearfix ose_pre_init mse_pre_init" id="menuu26146"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u26189"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26190" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26192" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26182"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26183" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26186" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26168"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26169" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26170" alt="Jogos" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26172"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u26173"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u26174"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u26175"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26176" href="sobre-os-jogos.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26178-4"><!-- rasterized frame --><div id="u26178-4_clip"><img id="u26178-4_img" alt="Sobre os Jogos" width="145" height="31" src="images/u26178-4.png"/></div></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26147"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26148" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26149" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --><div class="grpelem" id="u26150"><!-- image --></div></a>
      <div class="SubMenu  MenuLevel1 clearfix" id="u26152"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u26153"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u26154"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u26157" href="sobre-os-personagens.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26160-4"><!-- rasterized frame --><div id="u26160-4_clip"><img id="u26160-4_img" alt="Sobre os Personagens" width="214" height="31" src="images/u26160-4.png"/></div></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u26196"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26199" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26202" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
         <?php
         if($_SESSION['permissao']==5 || $_SESSION['status']==false){
         ?>
        
     <div class="MenuItemContainer clearfix grpelem" id="u26161"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26162" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u26165" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
         <?php }else{ ?>
         <div class="MenuItemContainer clearfix grpelem" id="u26161"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u26162" href="gerenciar.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u13859" alt="Gerenciar" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
         
         <?php } ?>
    </nav>
    <div class="clearfix colelem" id="pu26051"><!-- group -->
     <div class="clip_frame grpelem" id="u26051"><!-- image -->
      <img class="block" id="u26051_img" src="images/a15-azul-bebe.jpg" alt="" width="900" height="540"/>
     </div>
     <img class="grpelem" id="u26053" alt="" width="931" height="632" src="images/television-png-29-u26053.png"/><!-- rasterized frame -->
     <div class="clip_frame grpelem" id="u26214"><!-- image -->
      <img class="block" id="u26214_img" src="images/bcakzngzi.png" alt="" width="188" height="177"/>
     </div>
     <div class="grpelem" id="u26216-5" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9816,M12=-0.1908,M21=0.1908,M22=0.9816,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-9" data-mu-ie-matrix-dy="-14"><!-- rasterized frame -->
      <img id="u26216-5_img" alt="Jogos  " width="153" height="110" src="images/u26216-5.png"/>
     </div>
     <div class="clip_frame grpelem" id="Lu">
         <table>
             <tr>
                 <td>
                     <img class="grpelem" id="u26055-4" alt="2 a 3 anos" width="201" height="48" src="images/u26055-4.png"/><!-- rasterized frame -->
                </td>
             </tr>
             <tr>
                 <td>
                     <?php 
              while ($tblJogos=  mysql_fetch_array($rsJogos)){
                 if($tblJogos['idade_JOGO']==1){ ?> 
                 </td>
             
                        <td width="300px">
                 <a class="nonblock nontext rounded-corners clip_frame grpelem" id="u26067" href="perfiljogo.php?jogo=<?=$tblJogos['codigo_JOGO'];?>"><!-- image --><img class="block" id="u26067_img" src="Sistema/imagesjogos/<?=$tblJogos['imagem_JOGO'];?>" alt="" width="188" height="120"/></a>
                        </td>
             <?php } 
              }?>
                
             </tr>
             <tr>
                 <td><img class="grpelem" id="u26056-4" alt="4 a 5 anos" width="201" height="48" src="images/u26056-4.png"/><!-- rasterized frame -->
                </td>
             </tr>
              <tr>
                 <td>
                     <?php 
              while ($tblJogo=  mysql_fetch_array($rsJogo)){
                 if($tblJogo['idade_JOGO']==2){ ?> 
                 </td>
                        <td width="300px">
                 <a class="nonblock nontext rounded-corners clip_frame grpelem" id="u2606" href="perfiljogo.php?jogo=<?=$tblJogo['codigo_JOGO'];?>"><!-- image --><img class="block" id="u26067_img" src="Sistema/imagesjogos/<?=$tblJogo['imagem_JOGO'];?>" alt="" width="188" height="120"/></a>
                    </td>
             <?php } 
              }?>
                
             </tr>
             <tr>
                 <td><img class="grpelem" id="u26057-4" alt="6 a 7 anos" width="201" height="48" src="images/u26057-4.png"/><!-- rasterized frame -->
                </td>
             </tr>
             <tr>
                 <td>
                     <?php 
              while ($tblJogo1=  mysql_fetch_array($rsJogo1)){
                 if($tblJogo1['idade_JOGO']==3){ ?> 
                 </td>
                        <td width="300px">
                 <a class="nonblock nontext rounded-corners clip_frame grpelem" id="u2606" href="perfiljogo.php?jogo=<?=$tblJogo1['codigo_JOGO'];?>"><!-- image --><img class="block" id="u26067_img" src="Sistema/imagesjogos/<?=$tblJogo1['imagem_JOGO'];?>" alt="" width="188" height="120"/></a>
                    </td>
             <?php } 
              }?>
                
             </tr>
             <tr>
                 <td><img class="grpelem" id="u26058-4" alt="8 a 10 anos" width="230" height="48" src="images/u26058-4.png"/><!-- rasterized frame -->
                </td>
                <tr>
                 <td>
                     <?php 
              while ($tblJogo2=  mysql_fetch_array($rsJogo2)){
                 if($tblJogo2['idade_JOGO']==4){ ?> 
                 </td>
                        <td width="300px">
                 <a class="nonblock nontext rounded-corners clip_frame grpelem" id="u2606" href="perfiljogo.php?jogo=<?=$tblJogo2['codigo_JOGO'];?>"><!-- image --><img class="block" id="u26067_img" src="Sistema/imagesjogos/<?=$tblJogo2['imagem_JOGO'];?>" alt="" width="188" height="120"/></a>
                    </td>
             <?php } 
              }?>
                
             </tr>
             </tr>
         </table>
              
        
     </div>
     <div class="clip_frame grpelem" id="u26074"><!-- image -->
      <img class="block" id="u26074_img" src="images/folha%20com%20corte.png" alt="" width="72" height="34"/>
     </div>
    <div class="clearfix colelem" id="pu26217"><!-- column -->
     <div class="position_content" id="pu26217_position_content">
      <div class="mse_pre_init" id="u26217"><!-- simple frame --></div>
      <a class="nonblock nontext rounded-corners mse_pre_init" id="u26218" href="https://www.facebook.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u26219" href="https://twitter.com/recriajogos"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u26220" href="https://www.youtube.com/channel/UCy1YqCHq2qD1-eH30qrFOlA"><!-- simple frame --></a>
      <a class="nonblock nontext museBGSize mse_pre_init" id="u26221" href="https://recriajogos.wordpress.com/"><!-- simple frame --></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu26061"><!-- group -->
      <img class="grpelem" id="u26069" alt="" width="734" height="519" src="images/tablet_png8592-u26069.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u26071"><!-- custom html -->
      
<div class="fb-comments" data-href="recriajogos.com.br/jogos.php" data-width="503" data-colorscheme="light" data-action="comment" data-num-posts="1" data-order_by="reverse_time"></div>

</div>  
    </div>
      <div class="shadow rounded-corners grpelem" id="u26073"><!-- simple frame --></div>
    <div class="clearfix colelem" id="pu26046"><!-- group -->
     <a class="nonblock nontext mse_pre_init ose_pre_init" id="u26046" href="help/index.php" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9925,M12=0.1219,M21=-0.1219,M22=0.9925,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-8" data-mu-ie-matrix-dy="-8"><!-- rasterized frame --><img id="u26046_img" alt="" width="107" height="113" src="images/brushe-balao-de-fala-pfs-u26046.png"/></a>
     <img class="mse_pre_init ose_pre_init" id="u26044" alt="" width="35" height="24" src="images/folha%20com%20corte-u26044.png"/><!-- rasterized frame -->
     <div class="shadow rounded-corners ose_pre_init mse_pre_init" id="u26048"><!-- simple frame --></div>
     <a class="nonblock nontext mse_pre_init ose_pre_init" id="u26049" href="help/index.php"><!-- rasterized frame --><img id="u26049_img" alt="" width="164" height="149" src="images/le%c3%a3o%20final-u26049.png"/></a>
    </div>
    <div class="clip_frame colelem" id="u26042"><!-- image -->
     <img class="block" id="u26042_img" src="images/folha%20com%20corte.png" alt="" width="71" height="34"/>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u26040" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-22" data-mu-ie-matrix-dy="-38"><!-- rasterized frame -->
     <img id="u26040_img" alt="" width="1459" height="869" src="images/paper10-u26040.png"/>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u26106-a.png" alt=""/>
   <img class="preload" src="images/u26081-a.png" alt=""/>
   <img class="preload" src="images/u26098-a.png" alt=""/>
   <img class="preload" src="images/paper10.png" alt=""/>
   <img class="preload" src="images/u26131-a.png" alt=""/>
   <img class="preload" src="images/paper102.png" alt=""/>
   <img class="preload" src="images/u26117-a.png" alt=""/>
   <img class="preload" src="images/u26123-a.png" alt=""/>
   <img class="preload" src="images/u26192-a.png" alt=""/>
   <img class="preload" src="images/u26186-a.png" alt=""/>
   <img class="preload" src="images/u26170-a.png" alt=""/>
   <img class="preload" src="images/u26149-a.png" alt=""/>
   <img class="preload" src="images/u26202-a.png" alt=""/>
   <img class="preload" src="images/u26165-a.png" alt=""/>
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
$('#u26076').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,48.38]},{"speed":[0,0],"in":[48.38,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#menuu26078').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,34.38]},{"speed":[0,0],"in":[34.38,Infinity]}]);/* scroll effect */
$('#menuu26078').registerOpacityScrollEffect([{"fade":0.05,"in":[-Infinity,34.38],"opacity":100},{"opacity":100,"in":[34.38,34.38]},{"fade":1,"in":[34.38,Infinity],"opacity":0}]);/* scroll effect */
$('#u26142').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,35.38]},{"speed":[0,0],"in":[35.38,Infinity]}]);/* scroll effect */
$('#u26142').registerOpacityScrollEffect([{"fade":0,"in":[-Infinity,35.38],"opacity":100},{"opacity":100,"in":[35.38,35.38]},{"fade":2,"in":[35.38,Infinity],"opacity":0}]);/* scroll effect */
$('#u26144').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,38.38]},{"speed":[0,0],"in":[38.38,Infinity]}]);/* scroll effect */
$('#u26144').registerOpacityScrollEffect([{"fade":2,"in":[-Infinity,38.38],"opacity":0},{"opacity":100,"in":[38.38,38.38]},{"fade":0,"in":[38.38,Infinity],"opacity":100}]);/* scroll effect */
$('#menuu26146').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,53.38]},{"speed":[0,0],"in":[53.38,Infinity]}]);/* scroll effect */
$('#menuu26146').registerOpacityScrollEffect([{"fade":20,"in":[-Infinity,53.38],"opacity":0},{"opacity":100,"in":[53.38,53.38]},{"fade":0,"in":[53.38,Infinity],"opacity":100}]);/* scroll effect */
$('#u26217').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26218').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26219').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26220').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26221').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,-68]},{"speed":[0,0],"in":[-68,Infinity]}]);/* scroll effect */
$('#u26046').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,663.54]},{"speed":[0,0],"in":[663.54,Infinity]}]);/* scroll effect */
$('#u26046').registerOpacityScrollEffect([{"fade":285.4,"in":[-Infinity,663.54],"opacity":0},{"opacity":100,"in":[663.54,663.54]},{"fade":50,"in":[663.54,Infinity],"opacity":100}]);/* scroll effect */
$('#u26044').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,647.98]},{"speed":[0,0],"in":[647.98,Infinity]}]);/* scroll effect */
$('#u26044').registerOpacityScrollEffect([{"fade":319.75,"in":[-Infinity,647.98],"opacity":0},{"opacity":100,"in":[647.98,647.98]},{"fade":50,"in":[647.98,Infinity],"opacity":100}]);/* scroll effect */
$('#u26048').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,647.98]},{"speed":[0,0],"in":[647.98,Infinity]}]);/* scroll effect */
$('#u26048').registerOpacityScrollEffect([{"fade":401,"in":[-Infinity,647.98],"opacity":0},{"opacity":100,"in":[647.98,647.98]},{"fade":50,"in":[647.98,Infinity],"opacity":100}]);/* scroll effect */
$('#u26049').registerPositionScrollEffect([{"speed":[0,0],"in":[-Infinity,651.08]},{"speed":[0,0],"in":[651.08,Infinity]}]);/* scroll effect */
$('#u26049').registerOpacityScrollEffect([{"fade":346.1,"in":[-Infinity,651.08],"opacity":0},{"opacity":100,"in":[651.08,651.08]},{"fade":0,"in":[651.08,Infinity],"opacity":100}]);/* scroll effect */
$('#u26040').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1966.11]},{"speed":[0,0],"in":[1966.11,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
