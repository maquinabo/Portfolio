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
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "jquery.scrolleffects.js", "jquery.watch.js", "webpro.js", "sobre-n_s.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Sobre Nós</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
    <link rel="shortcut icon" href="images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/sobre-n_s.css?29095342" id="pagesheet"/>
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
   <div class="clearfix grpelem" id="pu9885"><!-- group -->
    <img class="grpelem" id="u9885" alt="" width="564" height="725" src="images/caderno-u9885.png"/><!-- rasterized frame -->
    <form class="form-grp clearfix grpelem" id="widgetu9824" method="post" enctype="multipart/form-data" action="alteraSobreNos.php"><!-- none box -->
     <div class="fld-grp clearfix grpelem" id="widgetu9826" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u9828" alt="&nbsp;Título:
" src="images/blank.gif" for="widgetu9826_input"><!-- state-based BG images --></label>
         <span class="fld-input NoWrap actAsDiv shadow rounded-corners clearfix grpelem" id="u9829-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu9826_input" name="custom_U9826" tabindex="1" value="<?=$tblEmpresa['titulo_EMPRESA']?>"/><label class="wrapped-input fld-prompt" id="widgetu9826_prompt" for="widgetu9826_input"><span class="actAsPara"></span></label></span>
     </div>

     <img class="grpelem" id="u9831" alt="Formulário recebido." src="images/blank.gif"/><!-- state-based BG images -->
     <input class="submit-btn NoWrap grpelem" id="u9832-17" type="submit" value="" tabindex="4"/><!-- state-based BG images -->
     <div class="fld-grp clearfix grpelem" id="widgetu9837" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u9840" alt="Colaboradores:" src="images/blank.gif" for="widgetu9837_input"><!-- state-based BG images --></label>
      <span class="fld-textarea actAsDiv shadow rounded-corners clearfix grpelem" id="u9839-4"><!-- content --><textarea class="wrapped-input" id="widgetu9837_input" name="custom_U9837" tabindex="3"><?=$tblEmpresa['colaboradores_EMPRESA']?></textarea><label class="wrapped-input fld-prompt" id="widgetu9837_prompt" for="widgetu9837_input"><span class="actAsPara"></span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu12501" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u12503" alt="Conteúdo:" src="images/blank.gif" for="widgetu12501_input"><!-- state-based BG images --></label>
      <span class="fld-textarea actAsDiv shadow rounded-corners clearfix grpelem" id="u12504-5"><!-- content --><textarea class="wrapped-input" id="widgetu12501_input" name="custom_U12501" tabindex="2"><?=$tblEmpresa['descricao_EMPRESA']?></textarea><label class="wrapped-input fld-prompt" id="widgetu12501_prompt" for="widgetu12501_input"><span class="actAsPara"></span></label></span>
     </div>
    </form>
    <div class="grpelem" id="u10664"><!-- custom html -->
     <form action="script/url/to/process" method="post">
<label> Insira a imagem: </label>
<input type="file" />

</form>
</div>
    <div class="grpelem" id="u12287" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0349,M12=-0.9994,M21=0.9994,M22=0.0349,SizingMethod='auto expand')" data-mu-ie-matrix-dx="210" data-mu-ie-matrix-dy="-234"><!-- rasterized frame -->
     <img id="u12287_img" alt="" width="910" height="457" src="images/paper10-u12287.png"/>
    </div>
    <nav class="MenuBar clearfix grpelem" id="menuu12289"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u12318"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12319" href="index.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12320" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12297"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12300" href="usuarios.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12302" alt="Usuários" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12304"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12305" href="novidades.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12307" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12325"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12326" href="jogos.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12328" alt="Jogos " src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12290"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12293" href="personagens.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12295" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12332"><!-- horizontal box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u12333" href="sobre-nos.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u12335-4"><!-- rasterized frame --><div id="u12335-4_clip"><img id="u12335-4_img" alt="Sobre Nós" width="160" height="32" src="images/u12335-4-a.png"/></div></div></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12311"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12312" href="compras.php"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12313" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clip_frame grpelem" id="u12339"><!-- image -->
     <img class="block" id="u12339_img" src="images/logo%20mais%20novo%20que%20tudo23.png" alt="" width="216" height="203"/>
     <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
    <div id="mi1"><a href="Logoff.php" ><font face="Berlin Sans FB" size="6pt"> Sair </font> </a></div>

    </div>
    <div class="grpelem" id="u12341"><!-- image --></div>
   </div>
   <div class="grpelem" id="u9819" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0698,M12=-0.9976,M21=0.9976,M22=0.0698,SizingMethod='auto expand')" data-mu-ie-matrix-dx="283" data-mu-ie-matrix-dy="-308"><!-- rasterized frame -->
    <img id="u9819_img" alt="" width="680" height="67" src="images/pencil-23648_960_720-u9819.png"/>
   </div>
   <div class="clearfix grpelem" id="ppu10676"><!-- column -->
    <div class="clearfix colelem" id="pu10676"><!-- group -->
     <img class="grpelem" id="u10676" alt="" width="195" height="220" src="images/2-u10676.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u10678-6" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9962,M12=0.0872,M21=-0.0872,M22=0.9962,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-4" data-mu-ie-matrix-dy="-8"><!-- rasterized frame -->
      <img id="u10678-6_img" alt="Sobre
Nós" width="180" height="94" src="images/u10678-6.png"/>
     </div>
    </div>
    <div class="colelem" id="u9887" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.2419,M12=-0.9703,M21=0.9703,M22=0.2419,SizingMethod='auto expand')" data-mu-ie-matrix-dx="33" data-mu-ie-matrix-dy="-66"><!-- rasterized frame -->
     <img id="u9887_img" alt="" width="211" height="96" src="images/p993518-u9887.png"/>
    </div>
   </div>
   <div class="verticalspacer"></div>
   <div class="mse_pre_init" id="u9883" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-7" data-mu-ie-matrix-dy="-36"><!-- rasterized frame -->
    <img id="u9883_img" alt="" width="1376" height="313" src="images/paper10-u9883.png"/>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u9828-ferr.png" alt=""/>
   <img class="preload" src="images/u9831-fss.png" alt=""/>
   <img class="preload" src="images/u9832-17-r.png" alt=""/>
   <img class="preload" src="images/u9832-17-m.png" alt=""/>
   <img class="preload" src="images/u9832-17-fs.png" alt=""/>
   <img class="preload" src="images/u9840-ferr.png" alt=""/>
   <img class="preload" src="images/u12503-ferr.png" alt=""/>
   <img class="preload" src="images/u12320-a.png" alt=""/>
   <img class="preload" src="images/u12302-a.png" alt=""/>
   <img class="preload" src="images/u12307-a.png" alt=""/>
   <img class="preload" src="images/u12328-a.png" alt=""/>
   <img class="preload" src="images/u12295-a.png" alt=""/>
   <img class="preload" src="images/u12313-a.png" alt=""/>
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
  <script src="scripts/webpro.js?3803554875" type="text/javascript"></script>
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
Muse.Utils.initWidget('#widgetu9824', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu9824 */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$('#u9883').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1349.4]},{"speed":[0,0],"in":[1349.4,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
