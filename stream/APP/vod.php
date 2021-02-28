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
    <div id="screen">
<?php

///////////DEF
  $dir1="../";
  $dabn= 0;
  $datab= $dir1.'VOD/'.$_GET['play'].'/DB';

///////////MOTOR.DB

/////////API

  if(!empty($_GET['play'])){
   echo'<img src="/www.itv.net/stream/IOD/dvb/'.$_GET['ch'].'.png" style="margin-top:2%;margin-left:2%;float:left;position:fixed;color:white;max-height:12%;">';
    print'<iframe width="100%" height="100%" src="?stby=1" frameborder="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen name="screen" style="position:fixed;background-color:black; width:100%; height:100%; border:none; margin-top:0px;margin-bottom:0px; padding: 0px; display:block;"></iframe>
    
';
    
    print'<a href="#">=</a>';

    print'<div id="sidebar" style="max-width:150px;position:fixed;">';
    
  
 
  }
  elseif(!empty($_GET['stby'])){
    echo'<center><h1>itv.VOD</h1>video On Demand
    </center>';
  }
  elseif(!empty($_GET['s'])){
   
    if($_GET['t']=='2'){
      
	echo'
<img src="/www.itv.net/stream/IOD/dvb/'.$_GET['ch'].'.png" style="margin-top:2%;margin-left:2%;float:left;position:fixed;color:white;max-height:12%;" title="'.$_GET['ch'].'">
sdsdsd';
    
	echo'
<video controls autoplay height="100%" width="100%" >
      <source src="'.$_GET['l'].'">
      <track src="'.$_GET['l'].'.vtt">
  </video>
      ';
    /*  
    
    echo'<iframe src="../DVB/?s='.$_GET['s'].'&ch='.$_GET['ch'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen frameborder="0" width=100% height="100%"></iframe>
    
    ';
    */
   }
   else{
    echo'<img src="/www.itv.net/stream/IOD/dvb/'.$_GET['ch'].'.png" style="margin-top:2%;margin-left:2%;float:left;position:fixed;color:white;max-height:12%;">';
    echo'<iframe src="'.$_GET['l'].'" width="100%" height="100%" frameborder="0" scrolling="no" sandbox="allow-popups allow-scripts allow-same-origin" webkitallowfullscreen mozallowfullscreen frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    ';
  }
   
}
  else{
    //PAGINA PRINCIPAL
    $path = $dir1.'VOD/';
    print'<center>
    <ul style="height:90%;max-width:100%; margin-top:0px;margin-bottom:0px;overflow-y:auto;height:90%; margin-top:0px;margin-bottom:0px;position:fixed;height:90%;overflow-x:none;overflow-y:auto;">
';
 
    $blacklist = array('.', '..', 'Intimo', 'ctrl','index.html', 'index.php', 'DB', '.DB');

    // get everything except hidden files
    $files = preg_grep('/^([^.])/', scandir($path)); 

    if(!empty($dir1)){
      foreach ($files as $file) {
        if (!in_array($file, $blacklist)) {
          echo '<span style="float:left;font-size:20px;font-weight:bold;"><a href="?play='.$file.'"><img src="/www.itv.net/stream/IOD/dvb/'.$file.'.png" bgcolor="grey" height="80px" alt="'.$file.'" title="'.$file.'"></a></span>';
        }
      }
    }
echo'</ul></center>';
  }
?>
  </div>
  <div id="header"> <a href="#menu">=</a></div>

  
    <?php
     if(!empty($_GET['play'])){
        echo'<div id="sidebar" style="width:30%;height:80%;">
          <h1 style="margin-top:0px;margin-bottom:0px;"><span style="color:teal;">i</span>tv<br> </h1>
          <a href="index.php?home=1">home</a>/
          <a href="?home=1" title="Video On Demand">VOD</a>
          <a href="?play='.$_GET['play'].'" title="canal">'.$_GET['play'].'</a><hr style="margin-top:0px;margin-bottom:0px;">
        ';

  
  
    $myfile = fopen($datab, "r") or die("Unable to open file!");
		$files = fread($myfile,filesize($datab));
		$files1 = explode(']',$files);		
		$dab = explode('||',$files1[1]);
		$j = count($files1,0);

    echo'<sidebar style="position:fixed;width:30%;height:80%;overflow:auto;">
    <ul style="width:100%;overflow:1px;">';
    echo'<li><a href="http://tv.giphy.com/'.$_GET['play'].'" target="screen">'.$_GET['play'].'</a></li>';
	    for($i=0; $i < $j; $i++){
	    	$pub = explode('||',$files1[$i]);


		if(!empty($pub[2])){
			echo'<li><a href="?s=1&t='.$pub[2].'&ch='.$_GET['play'].'&l='.$pub[2].'" target="screen">'.$pub[1].'</a></li><hr>';
		}
		else{}
		if(!empty($pub[3])){
			echo'<li><a href="?s=1&t='.$pub[3].'&ch='.$_GET['play'].'&l='.$pub[3].'" target="screen">'.$pub[1].'</a></li>';
		}
		else{}
              

      }

      $path = '../VOD/'.$_GET['play'];
    $blacklist = array('.', '..', 'DB', '.DB', '*.txt', '.srt');

    // get everything except hidden files
    $files = preg_grep('/^([^.])/', scandir($path)); 

    foreach ($files as $file) {
      if (!in_array($file, $blacklist)|| !empty($_GET['play'])) {
        echo'<li style="margin-left:-20px;"><a href="?s=2&t=2&ch='.$_GET['play'].'&l='.$path.'/'.$file.'" target="screen">'.$file.'</a></li>';   
    }
}

    }
    else{}
    
 
    echo'</ul>
    </sidebar>	
    </div>
    </div>
  ';
  ?>	






    
  
  
  <!--div id="footer">Este es el contenido de la etiqueta Div de diseño "footer"</div-->
</div>
</body>
</html>

