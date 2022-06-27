<!DOCTYPE html>
<html lang="es">
    
<head>
    
    <meta charset="UTF-8">


    <meta name="robots" content="noindex, nofollow">
    <meta name="referrer" content="never">
    <meta name="referrer" content="no-referrer">

    <link href="https://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/4.12/video.js"></script>
    <style type="text/css">
        .vjs-default-skin .vjs-big-play-button { font-size: 2em; }
    </style>

    <title>C3</title>
</head>

    
  
<body>


<?php




$json = file_get_contents("https://tomatomatela.com/details.php?v=OVYvaHNtaUVKOHM1anAxaWxiVEdubURFQk1HdkdTYlZqZlk5aXdMMDBmRWpZWHNBZ1hRNWlzUjg2NXBrc0wxUGJPSTZXaFF0Sm9ObCs0bzdGNWdSczV1QXh3aUc1Mmk5bTJGSitHaGE3TWM9&r");
$obj = json_decode($json);
echo $obj->file;

?>

    



    <video id="MY_VIDEO_1" class="video-js vjs-default-skin" style="margin-bottom: 15px;" controls preload="none" width="500" height="260"  data-setup="{}">
        <source src= '<?php echo $obj->file ?>' type='video/mp4'>
     
     <p id="text1">'<?php echo $obj->file ?>'</p>
     


     </video>
 

</body>
</html>
