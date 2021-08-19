<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="pt-BR">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "jquery.scrolleffects.js", "jquery.watch.js", "jogos.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <link rel="shortcut icon" href="images/favicon.ico"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Jogos </title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/jogos.css" id="pagesheet"/>
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
   <div class="clearfix grpelem" id="pu9347"><!-- group -->
    <img class="grpelem" id="u9347" alt="" width="564" height="725" src="images/caderno-u9347.png"/><!-- rasterized frame -->
    <div class="rounded-corners grpelem" id="u9733"><!-- simple frame --></div>
    <a class="nonblock nontext grpelem" id="u10733-5" href="formcadastrajogos.php"><!-- rasterized frame --><img id="u10733-5_img" alt="+ Adicionar
" width="132" height="53" src="images/u10733-5.png"/></a>
    <div class="grpelem" id="u12405" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0349,M12=-0.9994,M21=0.9994,M22=0.0349,SizingMethod='auto expand')" data-mu-ie-matrix-dx="210" data-mu-ie-matrix-dy="-234"><!-- rasterized frame -->
     <img id="u12405_img" alt="" width="910" height="457" src="images/paper10-u12405.png"/>
    </div>
    <nav class="MenuBar clearfix grpelem" id="menuu12407"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u12436"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12437" href="index.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12438" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12415"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12418" href="usuarios.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12420" alt="Usuários" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12422"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12423" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12425" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12443"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u12444" href="jogos.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u12446-4"><!-- rasterized frame --><div id="u12446-4_clip"><img id="u12446-4_img" alt="Jogos " width="160" height="33" src="images/u12446-4-a.png"/></div></div></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12408"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12411" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12413" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12450"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12451" href="sobre-nos.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12453" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12429"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12430" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12431" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clip_frame grpelem" id="u12457"><!-- image -->
     <img class="block" id="u12457_img" src="images/logo%20mais%20novo%20que%20tudo23.png" alt="" width="216" height="203"/>
    <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
    <div id="mi1"><a href="Logoff.php" ><font face="Berlin Sans FB" size="6pt"> Sair </font> </a></div>

    </div>
    <div class="grpelem" id="u12459"><!-- image -->
        <div id="divLista">
           <?php 
         require_once './classes/JogosVO.php';  
         require_once './classes/JogosDAO.php';
         
         $objBDJogos=new JogosDAO();
         $rsJogos= $objBDJogos->listaJogo("");
         
         
           ?> 
           <table  width="415">
    <tr height="40" >
        <td class="tipografia">Nome</td>
        <td class="tipografia">Idade</td>

    </tr>
    
    <?php while($tblJogos= mysql_fetch_array($rsJogos)){?>
    
    <tr height="40" >
        <td><?=$tblJogos['titulo_JOGO'];?></td>
        <td><?php
        if($tblJogos['idade_JOGO']==1){
            ?> 
                2 aos 3 anos <?php
        }elseif($tblJogos['idade_JOGO']==2){
            ?> 
                4 aos 5 anos <?php
        }
        elseif($tblJogos['idade_JOGO']==3){
            ?> 
                6 aos 7 anos <?php
        }
        elseif($tblJogos['idade_JOGO']==4){
            ?> 
                8 aos 10 anos <?php
        }
        
        ?></td>
    </tr>
    <?php } ?>
        </table>
        
        </div>
    </div>
   </div>
   <div class="grpelem" id="u9281" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0698,M12=-0.9976,M21=0.9976,M22=0.0698,SizingMethod='auto expand')" data-mu-ie-matrix-dx="280" data-mu-ie-matrix-dy="-306"><!-- rasterized frame -->
    <img id="u9281_img" alt="" width="679" height="71" src="images/pencil-23648_960_720-u9281.png"/>
   </div>
   <div class="clearfix grpelem" id="ppu11237"><!-- column -->
    <div class="clearfix colelem" id="pu11237"><!-- group -->
     <div class="grpelem" id="u11237" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9945,M12=0.1045,M21=-0.1045,M22=0.9945,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-11"><!-- rasterized frame -->
      <img id="u11237_img" alt="" width="214" height="238" src="images/4-u11237.png"/>
     </div>
     <div class="grpelem" id="u11239-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9962,M12=0.0872,M21=-0.0872,M22=0.9962,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-2" data-mu-ie-matrix-dy="-8"><!-- rasterized frame -->
      <img id="u11239-4_img" alt="Jogos" width="179" height="59" src="images/u11239-4.png"/>
     </div>
    </div>
    <div class="colelem" id="u9349" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.2419,M12=-0.9703,M21=0.9703,M22=0.2419,SizingMethod='auto expand')" data-mu-ie-matrix-dx="33" data-mu-ie-matrix-dy="-66"><!-- rasterized frame -->
     <img id="u9349_img" alt="" width="211" height="96" src="images/p993518-u9349.png"/>
    </div>
   </div>
   <div class="verticalspacer"></div>
   <div class="mse_pre_init" id="u9345" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-7" data-mu-ie-matrix-dy="-36"><!-- rasterized frame -->
    <img id="u9345_img" alt="" width="1376" height="313" src="images/paper10-u9345.png"/>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u12438-a.png" alt=""/>
   <img class="preload" src="images/u12420-a.png" alt=""/>
   <img class="preload" src="images/u12425-a.png" alt=""/>
   <img class="preload" src="images/u12413-a.png" alt=""/>
   <img class="preload" src="images/u12453-a.png" alt=""/>
   <img class="preload" src="images/u12431-a.png" alt=""/>
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
$('#u9345').registerPositionScrollEffect([{"in":[-Infinity,1348.39],"speed":[0,1]},{"in":[1348.39,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
