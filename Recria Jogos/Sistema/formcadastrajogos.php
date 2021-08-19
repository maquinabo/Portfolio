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
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "jquery.musemenu.js", "jquery.scrolleffects.js", "webpro.js", "formcadastrajogos.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Cadastrar Jogos</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/formcadastrajogos.css" id="pagesheet"/>
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
   <div class="clearfix grpelem" id="pu9189"><!-- group -->
    <div class="grpelem" id="u9189" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0349,M12=-0.9994,M21=0.9994,M22=0.0349,SizingMethod='auto expand')" data-mu-ie-matrix-dx="211" data-mu-ie-matrix-dy="-235"><!-- rasterized frame -->
     <img id="u9189_img" alt="" width="913" height="459" src="images/paper10-u9189.png"/>
    </div>
    <nav class="MenuBar clearfix grpelem" id="menuu9133"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u9134"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u9137" href="index.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u9138" alt="Início" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u12038"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u12039" href="usu%c3%a1rios.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u12041" alt="Usuários" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u9169"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u9170" href="novidades.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u9171" alt="Novidades" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u11042"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u11043" href="jogos.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u11044" alt="Jogos " src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u11377"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u11378" href="personagens.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u11380" alt="Personagens" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u10887"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u10888" href="sobre-n%c3%b3s.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u10889" alt="Sobre Nós" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix colelem" id="u11114"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u11115" href="compras.html"><!-- horizontal box --><img class="MenuItemLabel grpelem" id="u11116" alt="Compras" src="images/blank.gif"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clip_frame grpelem" id="u9176"><!-- image -->
     <img class="block" id="u9176_img" src="images/logo%20mais%20novo%20que%20tudo23.png" alt="" width="216" height="203"/>
    <STYLE type="text/css">
<!--
a:link {text-decoration: none;color: black}
a:active {text-decoration: none;}
a:visited {text-decoration: none;color: black}
a:hover {text-decoration: none;color: black}
</STYLE>
    <div id="mi1"><a href="Logoff.php" ><font face="Berlin Sans FB" size="6pt"> Sair </font> </a></div>

    </div>
    <img class="grpelem" id="u9178" alt="" width="564" height="725" src="images/caderno-u9178.png"/><!-- rasterized frame -->
    <a class="nonblock nontext clip_frame clearfix grpelem" id="u9185" href="jogos.html" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-0.9903,M12=0.1392,M21=-0.1392,M22=-0.9903,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-1" data-mu-ie-matrix-dy="-6"><!-- image --><img class="position_content" id="u9185_img" src="images/arrow-310611_960_720%20(1)-crop-u9185.png" alt="" width="88" height="27"/></a>
    <form class="form-grp clearfix grpelem" id="widgetu9215" method="post" enctype="multipart/form-data" action="cadastraJogos.php"><!-- none box -->
     <div class="  clearfix grpelem" id="widgetu9216" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u9217" alt="&nbsp;Título do jogo:" src="images/blank.gif" for="widgetu9216_input"><!-- state-based BG images --></label>
      <span class="fld-input NoWrap actAsDiv shadow rounded-corners clearfix grpelem" id="u9218-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu9216_input" name="HTML_titulo_JOGO" tabindex="1" required/></span>
     </div>

     <img class="grpelem" id="u9230" alt="Formulário recebido." src="images/blank.gif"/><!-- state-based BG images -->
     <input class="submit-btn NoWrap grpelem" id="u9231-17" type="submit" value="" tabindex="6"/><!-- state-based BG images -->
     <div class="  clearfix grpelem" id="widgetu10770" data-required="true" data-type="radiogroup"><!-- none box -->
      <label class="fld-label grpelem" id="u10772" alt="&nbsp;Idade focada:" src="images/blank.gif"><!-- state-based BG images --></label>
      <div class="  clearfix grpelem" id="widgetu10774" data-required="false" data-type="radio"><!-- none box -->
       <label class="fld-label grpelem" id="u10776" alt="2 aos 3 anos" src="images/blank.gif" for="widgetu10774_input"><!-- state-based BG images --></label>
       <div class="fld-radiobutton museBGSize grpelem" id="u10777"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="1" spellcheck="false" id="widgetu10774_input"  tabindex="3" name="HTML_idade_JOGO" required/>
        <label for="widgetu10774_input"></label>
       </div>
      </div>
      <div class="  clearfix grpelem" id="widgetu10808" data-required="false" data-type="radio"><!-- none box -->
       <label class="fld-label grpelem" id="u10809" alt="4 aos 5 anos" src="images/blank.gif" for="widgetu10808_input"><!-- state-based BG images --></label>
       <div class="fld-radiobutton museBGSize grpelem" id="u10810"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="2" spellcheck="false" id="widgetu10808_input" tabindex="3" name="HTML_idade_JOGO" required/>
        <label for="widgetu10808_input"></label>
       </div>
      </div>
      <div class="  clearfix grpelem" id="widgetu10816" data-required="false" data-type="radio"><!-- none box -->
       <label class="fld-label grpelem" id="u10817" alt="6 aos 7 anos" src="images/blank.gif" for="widgetu10816_input"><!-- state-based BG images --></label>
       <div class="fld-radiobutton museBGSize grpelem" id="u10818"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="3" spellcheck="false" id="widgetu10816_input" tabindex="3" name="HTML_idade_JOGO" required/>
        <label for="widgetu10816_input"></label>
       </div>
      </div>
      <div class="  clearfix grpelem" id="widgetu10819" data-required="false" data-type="radio"><!-- none box -->
       <label class="fld-label grpelem" id="u10820" alt="8 aos 10 anos" src="images/blank.gif" for="widgetu10819_input"><!-- state-based BG images --></label>
       <div class="fld-radiobutton museBGSize grpelem" id="u10821"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="4" spellcheck="false" id="widgetu10819_input" tabindex="3" name="HTML_idade_JOGO" required/>
        <label for="widgetu10819_input"></label>
       </div>
      </div>
     </div>
     <div class="  clearfix grpelem" id="widgetu12755" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u12758" alt="Url do Jogo:" src="images/blank.gif" for="widgetu12755_input"><!-- state-based BG images --></label>
      <span class="fld-input NoWrap actAsDiv shadow rounded-corners clearfix grpelem" id="u12756-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu12755_input" name="HTML_inteiro_JOGO" tabindex="4" required/></span>
     </div>
     <div class="  clearfix grpelem" id="widgetu12765" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u12768" alt="Url da Demo:" src="images/blank.gif" for="widgetu12765_input"><!-- state-based BG images --></label>
      <span class="fld-input NoWrap actAsDiv shadow rounded-corners clearfix grpelem" id="u12767-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu12765_input" name="HTML_demo_JOGO" tabindex="5" required/></span>
     </div>
     <div class="  clearfix grpelem" id="widgetu12793" data-required="true"><!-- none box -->
      <label class="fld-label grpelem" id="u12795" alt="&nbsp;Sobre os Jogos:" src="images/blank.gif" for="widgetu12793_input"><!-- state-based BG images --></label>
      <span class="fld-textarea actAsDiv shadow rounded-corners clearfix grpelem" id="u12794-5"><!-- content --><textarea class="wrapped-input" id="widgetu12793_input" name="custom_U12793" tabindex="2"><?=$tblEmpresa['descricao_EMPRESA']?></textarea></span>
     </div>
     <div class="grpelem" id="u9234"><!-- custom html -->    
    <label> Imagem ilustrativa: </label> &nbsp &nbsp
    <input type="file" name="HTML_imagem_USUARIO" required />
    </div>
    </form>
   </div>
   <div class="grpelem" id="u9191" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.0698,M12=-0.9976,M21=0.9976,M22=0.0698,SizingMethod='auto expand')" data-mu-ie-matrix-dx="282" data-mu-ie-matrix-dy="-308"><!-- rasterized frame -->
    <img id="u9191_img" alt="" width="684" height="72" src="images/pencil-23648_960_720-u9191.png"/>
   </div>
   <div class="clearfix grpelem" id="ppu11212"><!-- column -->
    <div class="clearfix colelem" id="pu11212"><!-- group -->
     <div class="grpelem" id="u11212" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9945,M12=0.1045,M21=-0.1045,M22=0.9945,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-11"><!-- rasterized frame -->
      <img id="u11212_img" alt="" width="214" height="238" src="images/4-u11212.png"/>
     </div>
     <div class="grpelem" id="u11215-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9962,M12=0.0872,M21=-0.0872,M22=0.9962,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-2" data-mu-ie-matrix-dy="-8"><!-- rasterized frame -->
      <img id="u11215-4_img" alt="Jogos" width="179" height="59" src="images/u11215-4.png"/>
     </div>
    </div>
    <div class="colelem" id="u9187" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.2419,M12=-0.9703,M21=0.9703,M22=0.2419,SizingMethod='auto expand')" data-mu-ie-matrix-dx="33" data-mu-ie-matrix-dy="-66"><!-- rasterized frame -->
     <img id="u9187_img" alt="" width="210" height="95" src="images/p993518-u9187.png"/>
    </div>
   </div>
   <div class="verticalspacer"></div>
   <div class="mse_pre_init" id="u9193" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9986,M12=0.0523,M21=-0.0523,M22=0.9986,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-7" data-mu-ie-matrix-dy="-36"><!-- rasterized frame -->
    <img id="u9193_img" alt="" width="1376" height="313" src="images/paper10-u9193.png"/>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u9138-a.png" alt=""/>
   <img class="preload" src="images/u12041-a.png" alt=""/>
   <img class="preload" src="images/u9171-a.png" alt=""/>
   <img class="preload" src="images/u11044-a.png" alt=""/>
   <img class="preload" src="images/u11380-a.png" alt=""/>
   <img class="preload" src="images/u10889-a.png" alt=""/>
   <img class="preload" src="images/u11116-a.png" alt=""/>
   <img class="preload" src="images/u9217-ferr.png" alt=""/>
   <img class="preload" src="images/u9230-fss.png" alt=""/>
   <img class="preload" src="images/u9231-17-r.png" alt=""/>
   <img class="preload" src="images/u9231-17-m.png" alt=""/>
   <img class="preload" src="images/u9231-17-fs.png" alt=""/>
   <img class="preload" src="images/u10772-ferr.png" alt=""/>
   <img class="preload" src="images/u10776-ferr.png" alt=""/>
   <img class="preload" src="images/radiobuttonunchecked.png" alt=""/>
   <img class="preload" src="images/radiobuttonuncheckedrollover.png" alt=""/>
   <img class="preload" src="images/radiobuttonuncheckedmousedown.png" alt=""/>
   <img class="preload" src="images/radiobuttonchecked.png" alt=""/>
   <img class="preload" src="images/radiobuttoncheckedrollover.png" alt=""/>
   <img class="preload" src="images/radiobuttoncheckedmousedown.png" alt=""/>
   <img class="preload" src="images/u10809-ferr.png" alt=""/>
   <img class="preload" src="images/u10817-ferr.png" alt=""/>
   <img class="preload" src="images/u10820-ferr.png" alt=""/>
   <img class="preload" src="images/u12758-ferr.png" alt=""/>
   <img class="preload" src="images/u12768-ferr.png" alt=""/>
   <img class="preload" src="images/u12795-ferr.png" alt=""/>
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
  <script src="scripts/webpro.js?3803554875" type="text/javascript"></script>
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
Muse.Utils.initWidget('#widgetu9215', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu9215 */
$('#u9193').registerPositionScrollEffect([{"in":[-Infinity,1354.43],"speed":[0,1]},{"in":[1354.43,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
