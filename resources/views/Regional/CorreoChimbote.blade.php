<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <title>Document</title>
</head>
<body style="background: #000;">
    <?php
    //    2021-12-19T18:47:26-0500
$link_ini = "https://i.prcdn.co/img?file=eagn";
$link_fin = "00000000001001&ticket=&scale=179";
$link_page = "&page=";


$num_page = 1;


$link_fin_bg = "00000000001001&ticket=&scale=179&layer=bg";
$link_fin_fg = "00000000001001&ticket=&scale=197&layer=fg";

            //Moment.php
            $m = new \Moment\Moment('now', 'America/Lima');           
            $dia = $m->format();
                       
                   $dia1 = substr_replace($dia, '', 4, 1);
                   $dia2 = substr_replace($dia1, '', 6, 1);
                   $fecha = substr_replace($dia2, '', 8, 14);


                  $link_completo = "$link_ini".$fecha."$link_fin"."$link_page";
                  $link_completo_bg = "$link_ini".$fecha."$link_fin_bg"."$link_page";
                  $link_completo_fg = "$link_ini".$fecha."$link_fin_fg"."$link_page";

                  //2021-12-19T18:47:26-0500 -> Formato original

                  //Link Normal
                  $archivo = "$link_completo";
                  $type = pathinfo($archivo, PATHINFO_EXTENSION);

                  try{
                  //Pages
                  $data = file_get_contents($archivo."1");
                  $base64_1 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."2");
                  $base64_2 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."3");
                  $base64_3 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."4");
                  $base64_4 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."5");
                  $base64_5 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."6");
                  $base64_6 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."7");
                  $base64_7 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."8");
                  $base64_8 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."9");
                  $base64_9 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."10");
                  $base64_10 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."11");
                  $base64_11 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."12");
                  $base64_12 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."13");
                  $base64_13 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."14");
                  $base64_14 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."15");
                  $base64_15 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."16");
                  $base64_16 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."17");
                  $base64_17 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."18");
                  $base64_18 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."19");
                  $base64_19 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."20");
                  $base64_20 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."21");
                  $base64_21 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."22");
                  $base64_22 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."23");
                  $base64_23 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."24");
                  $base64_24 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."25");
                  $base64_25 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."26");
                  $base64_26 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."27");
                  $base64_27 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."28");
                  $base64_28 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
        
                  }
                  catch(Exception $e){
                      //
                  }






                 //Link layer bg
                 $archivobg = $link_completo_bg;
                  $typebg = pathinfo($archivobg, PATHINFO_EXTENSION);
                  try{
                  $databg = file_get_contents($archivobg."1");
                  $base64bg_1 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivobg."2");
                  $base64bg_2 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."3");
                  $base64bg_3 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."4");
                  $base64bg_4 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."5");
                  $base64bg_5 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."6");
                  $base64bg_6 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."7");
                  $base64bg_7 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."8");
                  $base64bg_8 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."9");
                  $base64bg_9 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."10");
                  $base64bg_10 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."11");
                  $base64bg_11 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."12");
                  $base64bg_12 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."13");
                  $base64bg_13 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."14");
                  $base64bg_14 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."15");
                  $base64bg_15 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivobg."16");
                  $base64bg_16 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."17");
                  $base64bg_17 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."18");
                  $base64bg_18 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."19");
                  $base64bg_19 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."20");
                  $base64bg_20 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."21");
                  $base64bg_21 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."22");
                  $base64bg_22 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."23");
                  $base64bg_23 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."24");
                  $base64bg_24 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."25");
                  $base64bg_25 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."26");
                  $base64bg_26 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."27");
                  $base64bg_27 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."28");
                  $base64bg_28 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 


                  }
                  catch(Exception $e){
                      //
                  }
                 //Link layer fg

           

                  $archivofg = $link_completo_fg;
                  $typefg = pathinfo($archivofg, PATHINFO_EXTENSION);
                  try{
                  $datafg = file_get_contents($archivofg."1");
                  $base64fg_1 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg); 
                  $datafg = file_get_contents($archivofg."2");
                  $base64fg_2 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."3");
                  $base64fg_3 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."4");
                  $base64fg_4 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."5");
                  $base64fg_5 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."6");
                  $base64fg_6 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."7");
                  $base64fg_7 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."8");
                  $base64fg_8 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."9");
                  $base64fg_9 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."10");
                  $base64fg_10 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."11");
                  $base64fg_11 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."12");
                  $base64fg_12 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."13");
                  $base64fg_13 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."14");
                  $base64fg_14 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."15");
                  $base64fg_15 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg); 
                  $datafg = file_get_contents($archivofg."16");
                  $base64fg_16 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."17");
                  $base64fg_17 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."18");
                  $base64fg_18 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."19");
                  $base64fg_19 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."20");
                  $base64fg_20 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."21");
                  $base64fg_21 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."22");
                  $base64fg_22 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."23");
                  $base64fg_23 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."24");
                  $base64fg_24 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."25");
                  $base64fg_25 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."26");
                  $base64fg_26 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."27");
                  $base64fg_27 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."28");
                  $base64fg_28 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);



                  }

                  catch(Exception $e){


                  }
            ?>


    <div class="contimgs"> <?php if (@getimagesize($base64_1)) { echo "<img src= $base64_1 ?>"; } else if(@getimagesize($base64bg_1)&& @getimagesize($base64fg_1)){ echo "<img src= $base64bg_1 ?>"; echo "<img src= $base64fg_1 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_2)) { echo "<img src= $base64_2 ?>"; } else if(@getimagesize($base64bg_2)&& @getimagesize($base64fg_2)){ echo "<img src= $base64bg_2 ?>"; echo "<img src= $base64fg_2 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_3)) { echo "<img src= $base64_3 ?>"; } else if(@getimagesize($base64bg_3)&& @getimagesize($base64fg_3)){ echo "<img src= $base64bg_3 ?>"; echo "<img src= $base64fg_3 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_4)) { echo "<img src= $base64_4 ?>"; } else if(@getimagesize($base64bg_4)&& @getimagesize($base64fg_4)){ echo "<img src= $base64bg_4 ?>"; echo "<img src= $base64fg_4 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_5)) { echo "<img src= $base64_5 ?>"; } else if(@getimagesize($base64bg_5)&& @getimagesize($base64fg_5)){ echo "<img src= $base64bg_5 ?>"; echo "<img src= $base64fg_5 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_6)) { echo "<img src= $base64_6 ?>"; } else if(@getimagesize($base64bg_6)&& @getimagesize($base64fg_6)){ echo "<img src= $base64bg_6 ?>"; echo "<img src= $base64fg_6 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_7)) { echo "<img src= $base64_7 ?>"; } else if(@getimagesize($base64bg_7)&& @getimagesize($base64fg_7)){ echo "<img src= $base64bg_7 ?>"; echo "<img src= $base64fg_7 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_8)) { echo "<img src= $base64_8 ?>"; } else if(@getimagesize($base64bg_8)&& @getimagesize($base64fg_8)){ echo "<img src= $base64bg_8 ?>"; echo "<img src= $base64fg_8 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_9)) { echo "<img src= $base64_9 ?>"; } else if(@getimagesize($base64bg_9)&& @getimagesize($base64fg_9)){ echo "<img src= $base64bg_9 ?>"; echo "<img src= $base64fg_9 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_10)) { echo "<img src= $base64_10 ?>"; } else if(@getimagesize($base64bg_10)&& @getimagesize($base64fg_10)){ echo "<img src= $base64bg_10 ?>"; echo "<img src= $base64fg_10 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_11)) { echo "<img src= $base64_11 ?>"; } else if(@getimagesize($base64bg_11)&& @getimagesize($base64fg_11)){ echo "<img src= $base64bg_11 ?>"; echo "<img src= $base64fg_11 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_12)) { echo "<img src= $base64_12 ?>"; } else if(@getimagesize($base64bg_12)&& @getimagesize($base64fg_12)){ echo "<img src= $base64bg_12 ?>"; echo "<img src= $base64fg_12 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_13)) { echo "<img src= $base64_13 ?>"; } else if(@getimagesize($base64bg_13)&& @getimagesize($base64fg_13)){ echo "<img src= $base64bg_13 ?>"; echo "<img src= $base64fg_13 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_14)) { echo "<img src= $base64_14 ?>"; } else if(@getimagesize($base64bg_14)&& @getimagesize($base64fg_14)){ echo "<img src= $base64bg_14 ?>"; echo "<img src= $base64fg_14 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_15)) { echo "<img src= $base64_15 ?>"; } else if(@getimagesize($base64bg_15)&& @getimagesize($base64fg_15)){ echo "<img src= $base64bg_15 ?>"; echo "<img src= $base64fg_15 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_16)) { echo "<img src= $base64_16 ?>"; } else if(@getimagesize($base64bg_16)&& @getimagesize($base64fg_16)){ echo "<img src= $base64bg_16 ?>"; echo "<img src= $base64fg_16 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_17)) { echo "<img src= $base64_17 ?>"; } else if(@getimagesize($base64bg_17)&& @getimagesize($base64fg_17)){ echo "<img src= $base64bg_17 ?>"; echo "<img src= $base64fg_17 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_18)) { echo "<img src= $base64_18 ?>"; } else if(@getimagesize($base64bg_18)&& @getimagesize($base64fg_18)){ echo "<img src= $base64bg_18 ?>"; echo "<img src= $base64fg_18 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_19)) { echo "<img src= $base64_19 ?>"; } else if(@getimagesize($base64bg_19)&& @getimagesize($base64fg_19)){ echo "<img src= $base64bg_19 ?>"; echo "<img src= $base64fg_19 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_20)) { echo "<img src= $base64_20 ?>"; } else if(@getimagesize($base64bg_20)&& @getimagesize($base64fg_20)){ echo "<img src= $base64bg_20 ?>"; echo "<img src= $base64fg_20 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_21)) { echo "<img src= $base64_21 ?>"; } else if(@getimagesize($base64bg_21)&& @getimagesize($base64fg_21)){ echo "<img src= $base64bg_21 ?>"; echo "<img src= $base64fg_21 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_22)) { echo "<img src= $base64_22 ?>"; } else if(@getimagesize($base64bg_22)&& @getimagesize($base64fg_22)){ echo "<img src= $base64bg_22 ?>"; echo "<img src= $base64fg_22 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_23)) { echo "<img src= $base64_23 ?>"; } else if(@getimagesize($base64bg_23)&& @getimagesize($base64fg_23)){ echo "<img src= $base64bg_23 ?>"; echo "<img src= $base64fg_13 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_24)) { echo "<img src= $base64_24 ?>"; } else if(@getimagesize($base64bg_24)&& @getimagesize($base64fg_24)){ echo "<img src= $base64bg_24 ?>"; echo "<img src= $base64fg_24 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_25)) { echo "<img src= $base64_25 ?>"; } else if(@getimagesize($base64bg_25)&& @getimagesize($base64fg_25)){ echo "<img src= $base64bg_25 ?>"; echo "<img src= $base64fg_25 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>


    <div class="contimgs"> <?php if (@getimagesize($base64_26)) { echo "<img src= $base64_26 ?>"; } else if(@getimagesize($base64bg_26)&& @getimagesize($base64fg_26)){ echo "<img src= $base64bg_26 ?>"; echo "<img src= $base64fg_26 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_27)) { echo "<img src= $base64_27 ?>"; } else if(@getimagesize($base64bg_27)&& @getimagesize($base64fg_27)){ echo "<img src= $base64bg_27 ?>"; echo "<img src= $base64fg_27 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"> <?php if (@getimagesize($base64_28)) { echo "<img src= $base64_28 ?>"; } else if(@getimagesize($base64bg_28)&& @getimagesize($base64fg_28)){ echo "<img src= $base64bg_28 ?>"; echo "<img src= $base64fg_28 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>

 ?>

    
</body>
</html>

