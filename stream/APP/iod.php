<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>itv</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet"  type="text/css">
<link rel="stylesheet" type="text/css" href="/www.itv.net/css/main.css">
<script type="text/javascript" src="/www.itv.net/js/jquery-1.7.js"></script>
    	<link rel="stylesheet" type="text/css" href="/www.itv.net/css/main.css">
    	
	<title>IOD - itv</title>
	<meta name="generator" content="Geany 1.29" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#FFFFFF"><link rel="shortcut icon" href="/www.itv.net/favicon.png" type="image/x-icon" />
<!-- 
Para obtener más información sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
  
Haga lo siguiente si usa su compilación personalizada de modernizr (http://www.modernizr.com/):
* inserte el vínculo del código js aquí
* elimine el vínculo situado debajo para html5shiv
* añada la clase "no-js" a las etiquetas html en la parte superior
* también puede eliminar el vínculo con respond.min.js si ha incluido MQ Polyfill en su compilación de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>

</head>
<body>
<div class="gridContainer clearfix">
<?php

///DEF
$album = $_GET['play'];
$path = '../IOD/';
$iod = $path.$album.'/DB';
$year = explode('.',$file);
$today = date('Y');



///////////MOTOR.DB
  $file = fopen($iod, "r") or die("Unable to DB file!");
	$files = fread($file,filesize($iod));
	$files1 = explode(']',$files);			
    #$post=substr($pub[4], 0, 40);
	$j = count($files1,0);
    	$i = 0; 
    	$k= $i;
      $dabn= $_GET['s'];


/////////API
  if(!empty($_GET['play'])){
  echo'
  <div id="screen">
 <iframe align="center" width="100%" height="100%" src="?stby=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen" autoplay="true" stretch="true" loop="true" controls="true" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen name="screen" style="position:fixed;background-color:black; border:none; margin-top:0px;margin-bottom:0px;margin-left:auto;margin-right:auto; padding: 0px; display:block;"></iframe>
  ';
  print'';
  print'<a href="#">=</a>';

  print'<div id="sidebar" style="max-width:150px;position:fixed;">
  
  </div>
  <div id="header"> <a href="#menu">=</a></div>

  <div id="sidebar"><h3>itv</h3>
    <a href="index.php?home=1">home</a> /   
    <a href="?home=1">IOD</a> / 
    <a href="?play='.$_GET['play'].'">'.$_GET['play'].'</a>
   <hr>
<br>';

// LIST ALBUM
  
echo'<center>

<li><b>Galeria Imagens</b>:
<img src="/www.itv.net/stream/IOD/dvb/'.$album1[0].'.png" width="70px" bgcolor="grey"  alt="'.$album1[0].'" title="'.$album1[0].'">';
echo'<br>'.$album1[0].'<hr>';



  echo'</div>
  <div id="footer" style="max-height:70px;">
 

      <ul style="white-space: nowrap;
      overflow-x: visible;
      overflow-y: hidden;
      width: 95%;margin: 1em 0;
      padding: 0 0 0 40px;">
   
 ';

$thumbs = glob($path.$_GET['play'].'/*.{bmp,gif,jpg,jpeg,png,webp}', GLOB_BRACE) ;
    
    if(count($thumbs)) {
      natcasesort($thumbs);
      foreach($thumbs as $thumb) {
      
$Thumbs1 = explode('.',basename($thumb));

       echo' <li style="display: inline-block;"> &nbsp;<a target="screen" href="?s='.$thumb.'"><img src="'.$thumb.'" height="50px"alt="'.$Thumbs1[0].$Thumbs1[1].'" title="'.$Thumbs1[0].$Thumbs1[1].'"></a></li>
	';
  
        }
//URL.DB
for ($i = 0; $i <$j; $i++){
  $pub = explode('||',$files1[$i]);
  #$post=substr($pub[4], 0, 40);
  if($pub[1] != ''){
    echo' <li style="display: inline-block;"> &nbsp;<a target="screen" href="?s='.$pub[2].'&type='.$pub[0].'"><img src="'.$pub[1].'&type='.$pub[0].'" height="50px"alt="'.$pub[1].'" title="'.$pub[1].'"></a></li>
    ';

  }
  else {
    echo "";
  }
        
   } 
  }
   
 

   else {
          echo "";
        }
  

echo'</ul></div></div>';
  

  }
  elseif(!empty($_GET['stby'])){
    echo'<center><h1>itv.IOD</h1>Image On Demand
    </center>';
  }
  elseif(!empty($_GET['s'])){

    if($_GET['type']== '1'){
echo '<iframe src="'.$_GET['s'].'" type="" style="height:100%;   min-height: 100%;
min-width: 40%;
width: auto;
height: auto;
margin: 0;
padding: 0;
" alt=""></iframe>';
    }
  else{
    echo'<center>
<img src="'.$_GET['s'].'" style="height:100%;   min-height: 100%;
min-width: 40%;
width: auto;
height: auto;
margin: 0;
padding: 0;
" alt="">
';
  }


  }
  else{

    #LIST ALL ALBUNS
    
    print'<center><div style="height:100%;max-width:95%; margin-top:0px;margin-bottom:0px;position:fixed;height:100%;overflow-x:none;overflow-y:auto;">';
 
    $blacklist = array('.', '..', 'Intimo', 'ctrl','index.html', 'index.php', 'dvb', '.DB');

    // get everything except hidden files
    $files = preg_grep('/^([^.])/', scandir($path)); 

    if(!empty($path)){
      foreach ($files as $file) {
        if (!in_array($file, $blacklist)) {
         #check se ano album menor hoje
          if($year[0]<=$today){
          echo '<span style="width:150px;float:left;font-size:20px;font-weight:bold;margin:10px;"><a href="?play='.$file.'">
          <img src="/www.itv.net/stream/IOD/dvb/'.$file.'.png" bgcolor="grey"  alt="'.$file.'" title="'.$file.'"></a>
          </span>';
        }
        else{}
        }
      }
    }
echo'</div></center>
</div>';

  }

  ?>
  
  
</div>
<script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "vkMqR"
      }], "*")
    }
  </script>
</body>
</html>
