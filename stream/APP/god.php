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
    	
	<title>GOD - itv</title>
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
<script type="text/javascript">


    $(window).load(function(){
      
var audio;
var playlist;
var tracks;
var current;

init();
function init(){
    current = 0;
    audio = $('audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length - 1;
    
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
}

    });

</script>
</head>
<body>
<div class="gridContainer clearfix">
<?php

///DEF
$album = $_GET['play'];
$path = '../GOD/';
$year = explode('.',$file);
$today = date('Y');
$album1 = explode('.', $_GET['play']);


///////////MOTOR.DB
$god = $path.'/DB';
$file = fopen($god, "r") or die("Unable to DB file!");
$files = fread($file,filesize($god));
$files1 = explode(']',$files);			
  #$post=substr($pub[4], 0, 40);
$j = count($files1,0);
    $i = 0; 
    $k= $i;
    $dabn= $_GET[$i];


///API
  if(!empty($_GET['play'])){
   # if(file_exists($path.$album.'/DB')){
    if(!empty($_GET['l'])){

  ///////////MOTOR.DB
    $god1 = '../GOD/DB';
    $file = fopen($god1, "r") or die("Unable to DB file!");
    $files = fread($file,filesize($god1));
    $files1 = explode(']',$files);			
    #$post=substr($pub[4], 0, 40);
    $j = count($files1,0);
    $i = 0; 
    $k= $i;
    $dabn= $i;
    $l = $_GET['l'];

      $pub = explode('||',$files1[$l]);
     
     
      echo'
  <div id="screen">
  <!--img src="'.$pub[4].'" frameborder="0" height="100%" width="100%"-->
  <!--iframe src="'.$pub[4].'" width="100%" height="460px" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe-->


';
	if(!empty($_GET['l'])){
echo'<embed src="'.$_GET['l'].'" frameborder="0" height="100%" width="100%" style="position:center;"></embed>';

}
else{
    echo'<iframe src="'.$path.'/'.$album.'/" frameborder="0" height="100%" width="100%"></iframe>';
 }
echo'
  
</div>
  <div id="header"> <a href="#menu">=</a></div>

  <div id="sidebar"><h3>itv</h3>
    <a href="index.php?home=1">home</a> /   
    <a href="?home=1">GOD</a> / 
    <a href="?play='.$_GET['play'].'">'.$_GET['play'].'</a>
   <hr>
<br>';

// LIST ALBUM
  
echo'<center>

<li><b>game</b>:'.$album1[1].
'<li><b>year</b>:'.$album1[0];

echo'<br><hr>';

  
   
  


  echo'</div>
  <div id="footer">
  <iframe src="'.$pub[5].'" width="500" height="30" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>
</div>';


    }
    else{//LOCAL ALBUNS
  echo'
  <div id="screen">
';
	if(!empty($_GET['l'])){
echo'<iframe src="'.$_GET['l'].'" frameborder="0" height="100%" width="100%"></iframe>';

}
else{
    echo'<iframe src="'.$path.'/'.$album.'/" frameborder="0" height="100%" width="100%"></iframe>';
 }
echo'
 </div>
  <div id="header"> <a href="#menu">=</a></div>

  <div id="sidebar"><h3>itv</h3>
    <a href="index.php?home=1">home</a> /   
    <a href="?home=1">GOD</a> / 
    <a href="?play='.$_GET['play'].'">'.$_GET['play'].'</a>
   <hr>
<br>';

// LIST ALBUM
  
echo'<center>

<li><b>album</b>:'.$album1[2].
'<li><b>artista</b>:'.$album1[1].
'<li><b>year</b>:'.$album1[0];

echo'<br><hr>';
echo'<ol id="playlist" style="">';

$thumbs = glob('../GOD/'.$_GET['play'].'/*.{wav,mp3,ogg,aac,m4a}', GLOB_BRACE) ;
    
    if(count($thumbs)) {
      natcasesort($thumbs);
      foreach($thumbs as $thumb) {
      
$Thumbs1 = explode('.',basename($thumb));

       echo' <li> &nbsp;<a href="'.$thumb.'">'.$Thumbs1[1].'</a></li>
	';
  
        }
   } 
   else {
          echo "Sorry, no media to display!";
        }
  


  echo'</div>
  <div id="footer">
  <!--audio id="audio" autoplay preload="auto" tabindex="0" controls="" type="audio/mpeg">
  <source type="audio/mp3" src="'.$thumb.'">
  <embed src="GOD/god.m3u?play='.$_GET['play'].'">Sorry, your browser does not support HTML5 audio.
</audio-->

</div>';
  
      }
  }

  else{  



   


    
    
    print'<center><div style="height:100%;max-width:100%; margin-top:0px;margin-bottom:0px;position:fixed;height:100%;overflow-x:none;overflow-y:auto;">';
 
     #LIST ALBUM ONLINE

     for ($i = 0; $i <$j; $i++){
    	$pub = explode('||',$files1[$i]);
      if(!empty($pub[1])){
    echo '<span style="width:150px;float:left;font-size:20px;font-weight:bold;"><a href="?play='. $pub[1].'&l='.$pub[2].'"><img src="'. $pub[2].'" bgcolor="grey" height="150px" alt="'. $pub[1].'" title="'. $pub[1].'"></a></span>';
  }
  else{}
    }
#LIST LOCAL ALBUNS
    $blacklist = array('.', '..', 'Intimo', 'ctrl','index.html', 'index.php', 'DB', '.DB');

    // get everything except hidden files
    $files = preg_grep('/^([^.])/', scandir($path));
    

    if(!empty($path)){
      foreach ($files as $file) {
        if (!in_array($file, $blacklist)) {
         #check se ano album menor hoje
         $today1 = date('Y'); 
    $yearf = explode('.',$file);
          if($yearf[0]<=$today1){
          echo '<span style="width:150px;float:left;font-size:20px;font-weight:bold;"><a href="?play='.$file.'"><img src="/www.itv.net/stream/GOD/'.$file.'/folder.jpg" bgcolor="grey" height="150px" alt="'.$file.'" title="'.$file.'"></a></span>';
        
        }
        else{}
        }
      }
    }
    else{}
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
