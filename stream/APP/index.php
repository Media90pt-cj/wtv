<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="manifest" href="./manifest.json">

	<script type="text/javascript" src="https://gist.githubusercontent.com/boopathi/57b7e8b6d657d55bdc7d/raw/f692ba2b968ebee39eca21e1e86a3cf702d9b227/sw.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#FFFFFF">
	<link rel="shortcut icon" href="/www.itv.net/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/www.itv.net/css/main.css">
	<script src="https://freebitco.in/cdn-cgi/apps/head/Atl_8fFL5zobJB3-DjBVOnRViDs.js"></script>	
	<script type="text/javascript" src="/www.itv.net/js/jquery-1.7.js"></script>
 	

<title>itv</title>


</head>
<body bgcolor="black" text="silver" link="aqua" vspace="0" hspace="0" topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>

<?php

if(!empty($_GET['home'])){

echo'
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<center>
	<h1>
		
	<a href="dab.php?play=1" alt="Digital Audio Broadcast">DAB</a> 
	<a href="dvb.php?play=1" alt="Digital Video Broadcast">DVB</a> 
	<a href="mod.php?home=1" alt="Music on Demand">MOD</a> 
	<a href="vod.php?home=1" alt="Video on Demand">VOD</a> 
	<a href="iod.php?home=1" alt="Image on Demand">IOD</a> 
	<a href="bod.php?home=1" alt="Book on Demand">BOD</a>
	<a href="god.php?home=1" alt="Games on Demand">GOD</a> 

</h1>
';

}
elseif(!empty($_GET['usr'])){
echo'
<h1>user</h1>
';

}
elseif(!empty($_GET['dab'])){

    $dvb = "../DAB/DAB";

 	if(!empty(!empty($_GET['ch']))){

	$file = fopen($dvb, "r") or die("Unable to DB file!");
	$files = fread($file,filesize($dvb));
	$files1 = explode(']',$files);			
    #$post=substr($pub[4], 0, 40);
	$j = count($files1,0);
    	$i = 0; 
    	$k= $i;
 
   	for ($i = 0; $i <$j; $i++){
    	$pub = explode('||',$files1[$i]);
	#$post=substr($pub[4], 0, 40);
	if($pub[1] == $_GET['dvb']){

echo '
        	<div style="margin-left:0px;margin-top:0px;width:200px;height:90%;position:fixed;float:left;z-index:-0;border:0px;">
itv
<a href="./">home</a> | <a href="?dvb=home">DVB</a>
<!--a href="?dvb='.$pub[1].'&ch='.$i.'" style="background-color:black;" >
img bgcolor="black" style="background-color:black;" src="../IOD/dvb/'.$pub[1].'.png" height="80px" title="'.$pub[1].'" alt="'.$pub[1].'" ></a--></div>=';

echo'
<span data-player-id="cad9d975-ccae-4757-88a3-a65ebb7419f8" style="height:95%;z-index:-2;" >
  <script src="//cdn.flowplayer.com/players/ed1cc6dd-bf33-4ec1-94e0-669c3180ce75/7/flowplayer.async.js">
    {
    "token": "",
    "autoplay": true,
    "hls": {
        "native": true
    },
    "src": "'.$pub[2].'",
    "ima": {
        "ads": [
            {
                "time": 0,
                "adTag": "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator="
            }
        ]
    },
    "subtitles": {
        "tracks": [
            {
                "src": "https://flowplayer.com/demos/configuration-builder/sample-en.vtt",
                "label": "English",
                "is_default": true
            },
            {
                "src": "https://flowplayer.com/demos/configuration-builder/sample-pt.vtt",
                "label": "Portuguese"
            }
        ]
    },
    "plugins": [
        "ads",
        "subtitles",
        "qsel",
        "keyboard",
        "chromecast",
        "airplay"
    ]
}
  </script>




  <video autoplay="true" stretch="true" autoplay controls style="width:100%; height:90%;z-index:-0;">
	<tv src="'. $pub[2].'"></tv>
         <source type="application/x-mpegurl" src="'. $pub[2].'">
	<source type="video/mp4" src="'. $pub[2].'">
      </video>   
   
</span>

';

 	
   
#http://rtp-pull-live-h1bnxvdk20183-proprtp-app-wrtp.hls.adaptive.level3.net/liverepeater/rtp2_5ch3h264.stream/playlist.m3u8'
    
}
	else{}
}

}
 else{ 

echo'<div style="overflow:auto;width:100%;height:100%;">';


$file = fopen($dvb, "r") or die("Unable to DB file!");
	$files = fread($file,filesize($dvb));
	$files1 = explode(']',$files);			
    #$post=substr($pub[4], 0, 40);
	$j = count($files1,0);
    $i = 0; 
    $k= $i;
 
   for ($i = 0; $i <$j; $i++){
    $pub = explode('||',$files1[$i]);
	#$post=substr($pub[4], 0, 40);
 echo '
      <li style="float:left;">
<a href="?dvb='.$pub[1].'&ch='.$i.'" style="background-color:black;" >
<img bgcolor="black" style="background-color:black;border:1px solid grey;" src="../IOD/dvb/'.$pub[1].'.png" height="80px" title="'.$pub[1].'" alt="'.$pub[1].'" ></a></li>
';
       
}
echo'</div>';        
 # closedir($dvb);


}

}
elseif(!empty($_GET['dvb'])){
$dvb = "../DVB/DVB";

 	if(!empty(!empty($_GET['ch']))){

	$file = fopen($dvb, "r") or die("Unable to DB file!");
	$files = fread($file,filesize($dvb));
	$files1 = explode(']',$files);			
    #$post=substr($pub[4], 0, 40);
	$j = count($files1,0);
    	$i = 0; 
    	$k= $i;
 
   	for ($i = 0; $i <$j; $i++){
    	$pub = explode('||',$files1[$i]);
	#$post=substr($pub[4], 0, 40);
	if($pub[1] == $_GET['dvb']){

echo '
        	<div style="margin-left:0px;margin-top:0px;width:200px;height:90%;position:fixed;float:left;z-index:-0;border:0px;">
itv
<a href="./">home</a> | <a href="?dvb=home">DVB</a>
<!--a href="?dvb='.$pub[1].'&ch='.$i.'" style="background-color:black;" >
img bgcolor="black" style="background-color:black;" src="../IOD/dvb/'.$pub[1].'.png" height="80px" title="'.$pub[1].'" alt="'.$pub[1].'" ></a--></div>=';

echo'
<span data-player-id="cad9d975-ccae-4757-88a3-a65ebb7419f8" style="height:95%;z-index:-2;" >
  <script src="//cdn.flowplayer.com/players/ed1cc6dd-bf33-4ec1-94e0-669c3180ce75/7/flowplayer.async.js">
    {
    "token": "",
    "autoplay": true,
    "hls": {
        "native": true
    },
    "src": "'.$pub[2].'",
    "ima": {
        "ads": [
            {
                "time": 0,
                "adTag": "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator="
            }
        ]
    },
    "subtitles": {
        "tracks": [
            {
                "src": "https://flowplayer.com/demos/configuration-builder/sample-en.vtt",
                "label": "English",
                "is_default": true
            },
            {
                "src": "https://flowplayer.com/demos/configuration-builder/sample-pt.vtt",
                "label": "Portuguese"
            }
        ]
    },
    "plugins": [
        "ads",
        "subtitles",
        "qsel",
        "keyboard",
        "chromecast",
        "airplay"
    ]
}
  </script>




  <video autoplay="true" stretch="true" autoplay controls style="width:100%; height:90%;z-index:-0;">
	<tv src="'. $pub[2].'"></tv>
         <source type="application/x-mpegurl" src="'. $pub[2].'">
	<source type="video/mp4" src="'. $pub[2].'">
      </video>   
   
</span>

';

 	
   
#http://rtp-pull-live-h1bnxvdk20183-proprtp-app-wrtp.hls.adaptive.level3.net/liverepeater/rtp2_5ch3h264.stream/playlist.m3u8'
    
}
	else{}
}

}
 else{ 

echo'<div style="overflow:auto;width:100%;height:100%;">';


$file = fopen($dvb, "r") or die("Unable to DB file!");
	$files = fread($file,filesize($dvb));
	$files1 = explode(']',$files);			
    #$post=substr($pub[4], 0, 40);
	$j = count($files1,0);
    $i = 0; 
    $k= $i;
 
   for ($i = 0; $i <$j; $i++){
    $pub = explode('||',$files1[$i]);
	#$post=substr($pub[4], 0, 40);
 echo '
 <li style="float:left;">
<a href="?dvb='.$pub[1].'&ch='.$i.'" style="background-color:black;" >
<img bgcolor="black" style="background-color:black;border:1px solid grey;" src="../IOD/dvb/'.$pub[1].'.png" height="80px" title="'.$pub[1].'" alt="'.$pub[1].'" ></a></li>
';
       
}
echo'</div>';        
 # closedir($dvb);


}

}
elseif(!empty($_GET['mod'])){
echo'
<h1 style="POSITION:FIXED;">MOD</h1>
';

//////


	if(!empty($_GET['play'])){

    echo'<center>
    <div style="margin-top:0%;width:90%;overflow-y:auto;height:800px;background-image:url(/www.itv.net/imgs/glass.png);left:10%;">';

	



  
	
	$dabn= 0;
	$datab= '../MOD/'.$_GET['vod'].'/DB';
	$dir1="../stream/";


	if (file_exists($datab)) {
   echo'<iframe style="background-color:transparent; height:60%;width:100%;border:0px;" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen name="content"></iframe>
'; 
    
    
#    echo "The file $datab exists";
$myfile = fopen($datab, "r") or die("Unable to open file!");
		$files = fread($myfile,filesize($datab));
		$files1 = explode(']',$files);		
		$dab = explode('||',$files1[1]);
		$j = count($files1,0);
echo'<div style="height:100px;overflow:auto;">';
	
		

} 
else {
   # echo 'The file '.$datab.' does not exist';




echo'<b>'.$_GET['mod'].'</b><br>';
echo'<img src="../MOD/'.$_GET['mod'].'/folder.jpg" height="300px">';
echo'<ol id="playlist" style="">';


$thumbs = glob('../MOD/'.$_GET['mod'].'/*.mp3'); 
    
    if(count($thumbs)) {
      natcasesort($thumbs);
      foreach($thumbs as $thumb) {
      


       echo' <li align=right> &nbsp;<a href="'.$thumb.'">'.basename($thumb).'</a></li>
	';
  
        }
   } 
   else {
          echo "Sorry, no media to display!";
        }

echo'</ol></div>';

/*
        <li class="active"><a href="http://www.archive.org/download/bolero_69/Bolero.mp3">Ravel Bolero</a></li>
        <li><a href="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.mp3">Moonlight Sonata - Beethoven</a></li>
        <li><a href="http://www.archive.org/download/CanonInD_261/CanoninD.mp3">Canon in D Pachabel</a></li>
        <li><a href="http://www.archive.org/download/PatrikbkarlChamberSymph/PatrikbkarlChamberSymph_vbr_mp3.zip">patrikbkarl chamber symph</a></li>

*/

echo'
<audio id="audio" autoplay preload="auto" tabindex="0" controls="" type="audio/mp4" style="width:100%;">
        <source type="audio/mp4" src="'.$thumb.'">
        <embed src="'.$dir1.'/MOD/mod.m3u?play='.$_GET['play'].'">Sorry, your browser does not support HTML5 audio.
    </audio>	

';
}

		
	
  		

echo'</div>';

}

else{
echo'<center><div style="width:90%;overflow-y:auto;max-height:700px;background-image:url(/www.itv.net/imgs/glass.png);left:10%;">';
	$thumbs = glob('../'.$dir1.'MOD/*.*'); 
    

          foreach(glob('../'.$dir1.'MOD/*', GLOB_ONLYDIR) as $dir) {
    $dir = str_replace('../'.$dir1.'MOD/', '', $dir);
    echo' <a href="?mod='.$dir.'&play=1"><img src="../'.$dir1.'MOD/'.$dir.'/folder.jpg" alt="'.$dir.'" height=100px></a>';
  
}
     
     

echo'</div>';

}

}
elseif(!empty($_GET['vod'])){
echo'
<p>VOD '.$_GET['vod'].'</p>

';

echo '<img src="/www.itv.net/stream/IOD/dvb/'.$_GET['vod'].'.png" width=50px    style="position:fixed;float:left;margin-top:5%;margin-left:5%;">';

//////


	if(!empty($_GET['play'])){

	echo'<center><div style="margin-top:0%;width:90%;overflow-y:auto;height:800px;background-image:url(/www.itv.net/imgs/glass.png);left:10%;">';

	



  
	
	$dabn= 0;
	$datab= '../VOD/'.$_GET['vod'].'/DB';
	$dir1="../stream/";


	if (file_exists($datab)) {
   echo'<iframe style="background-color:transparent; height:60%;width:100%;border:0px;" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen name="content"></iframe>
'; 
    
    
#    echo "The file $datab exists";
$myfile = fopen($datab, "r") or die("Unable to open file!");
		$files = fread($myfile,filesize($datab));
		$files1 = explode(']',$files);		
		$dab = explode('||',$files1[1]);
		$j = count($files1,0);
echo'<div style="height:100px;overflow:auto;">';
	
		

} 
else {
   # echo 'The file '.$datab.' does not exist';




echo'<b>'.$_GET['play'].'</b>';

echo'<ol id="playlist" style="">';


$thumbs = glob('../VOD/'.$_GET['vod'].'/*.mp4'); 
    
    if(count($thumbs)) {
      natcasesort($thumbs);
      foreach($thumbs as $thumb) {
      


       echo' <li align=right> &nbsp;<a href="'.$thumb.'">'.basename($thumb).'</a></li>
	';
  
        }
   } 
   else {
          echo "Sorry, no media to display!";
        }

echo'</ol></div>';

/*
        <li class="active"><a href="http://www.archive.org/download/bolero_69/Bolero.mp3">Ravel Bolero</a></li>
        <li><a href="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.mp3">Moonlight Sonata - Beethoven</a></li>
        <li><a href="http://www.archive.org/download/CanonInD_261/CanoninD.mp3">Canon in D Pachabel</a></li>
        <li><a href="http://www.archive.org/download/PatrikbkarlChamberSymph/PatrikbkarlChamberSymph_vbr_mp3.zip">patrikbkarl chamber symph</a></li>

*/

echo'
<video id="audio" autoplay preload="auto" tabindex="0" controls="" type="audio/mp4" style="width:50%;">
        <source type="audio/mp4" src="'.$thumb.'">
        <embed src="'.$dir1.'/VOD/mod.m3u?play='.$_GET['play'].'">Sorry, your browser does not support HTML5 audio.
    </video>	

';
}

		
	
  		

echo'</div>';

}

else{
echo'<center><div style="width:90%;overflow-y:auto;max-height:700px;background-image:url(/www.itv.net/imgs/glass.png);left:10%;">';
	$thumbs = glob('../'.$dir1.'VOD/*.*'); 
    

          foreach(glob('../'.$dir1.'VOD/*', GLOB_ONLYDIR) as $dir) {
    $dir = str_replace('../'.$dir1.'VOD/', '', $dir);
    echo' <a href="?vod='.$dir.'&play=1"><img src="../'.$dir1.'IOD/dvb/'.$dir.'.png" alt="'.$dir.'" height=100px></a>';
  
}
     
     

echo'</div>';

}


///////////////
}
elseif(!empty($_GET['iod'])){

echo'
<h1>iOD</h1>
';

echo'
<p>IOD '.$_GET['iod'].'</p>

';

echo '<img src="/www.itv.net/stream/IOD/dvb/'.$_GET['vod'].'.png" width=50px    style="position:fixed;float:left;margin-top:5%;margin-left:5%;">';

//////


	if(!empty($_GET['play'])){

	echo'<center><div style="margin-top:0%;width:90%;overflow-y:auto;height:800px;background-image:url(/www.itv.net/imgs/glass.png);left:10%;">';

	



  
	
	$dabn= 0;
	$datab= '../VOD/'.$_GET['vod'].'/DB';
	$dir1="../stream/";


	if (file_exists($datab)) {
   echo'<iframe style="background-color:transparent; height:60%;width:100%;border:0px;" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen name="content"></iframe>
'; 
    
    
#    echo "The file $datab exists";
$myfile = fopen($datab, "r") or die("Unable to open file!");
		$files = fread($myfile,filesize($datab));
		$files1 = explode(']',$files);		
		$dab = explode('||',$files1[1]);
		$j = count($files1,0);
echo'<div style="height:100px;overflow:auto;">';
	
		

} 
else {
   # echo 'The file '.$datab.' does not exist';




echo'<b>'.$_GET['play'].'</b>';

echo'<ol id="playlist" style="">';


$thumbs = glob('../VOD/'.$_GET['vod'].'/*.mp4'); 
    
    if(count($thumbs)) {
      natcasesort($thumbs);
      foreach($thumbs as $thumb) {
      


       echo' <li align=right> &nbsp;<a href="'.$thumb.'">'.basename($thumb).'</a></li>
	';
  
        }
   } 
   else {
          echo "Sorry, no media to display!";
        }

echo'</ol></div>';

/*
        <li class="active"><a href="http://www.archive.org/download/bolero_69/Bolero.mp3">Ravel Bolero</a></li>
        <li><a href="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.mp3">Moonlight Sonata - Beethoven</a></li>
        <li><a href="http://www.archive.org/download/CanonInD_261/CanoninD.mp3">Canon in D Pachabel</a></li>
        <li><a href="http://www.archive.org/download/PatrikbkarlChamberSymph/PatrikbkarlChamberSymph_vbr_mp3.zip">patrikbkarl chamber symph</a></li>

*/

echo'
<video id="audio" autoplay preload="auto" tabindex="0" controls="" type="audio/mp4" style="width:50%;">
        <source type="audio/mp4" src="'.$thumb.'">
        <embed src="'.$dir1.'/VOD/mod.m3u?play='.$_GET['play'].'">Sorry, your browser does not support HTML5 audio.
    </video>	

';
}

		
	
  		

echo'</div>';

}

else{
echo'<center><div style="width:90%;overflow-y:auto;max-height:700px;background-image:url(/www.itv.net/imgs/glass.png);left:10%;">';
	$thumbs = glob('../'.$dir1.'VOD/*.*'); 
    

          foreach(glob('../'.$dir1.'VOD/*', GLOB_ONLYDIR) as $dir) {
    $dir = str_replace('../'.$dir1.'VOD/', '', $dir);
    echo' <a href="?vod='.$dir.'&play=1"><img src="../'.$dir1.'IOD/dvb/'.$dir.'.png" alt="'.$dir.'" height=100px></a>';
  
}
     
     

echo'</div>';

}

}
elseif(!empty($_GET['bod'])){

echo'
<h1>DAB</h1>
';

}
elseif(!empty($_GET['god'])){

echo'
<p>GOD</p>
';

}
else{

echo'<meta http-equiv="refresh" content="5; url=?home=1"><p>&nbsp;</p><p>&nbsp;</p><center><h1>itv</h1> um momento';

}


?>

</body>
</html>
