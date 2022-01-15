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
$link_ini = "https://i.prcdn.co/img?file=eag8";
$link_fin = "00000000001001&ticket=&scale=172";
$link_page = "&page=";


$num_page = 1;

//Alternative1 
$link_fin_bg = "00000000001001&ticket=&scale=172&layer=bg";
$link_fin_fg = "00000000001001&ticket=&scale=169&layer=fg";
//Alternative2
$link_fin_bg1 = "00000000001001&ticket=&scale=144&layer=bg";
$link_fin_fg1 = "00000000001001&ticket=&scale=144&layer=fg";

//AlternativeFinal

            //Moment.php
            $m = new \Moment\Moment('now', 'America/Lima');           
            $dia = $m->format();
                       
                   $dia1 = substr_replace($dia, '', 4, 1);
                   $dia2 = substr_replace($dia1, '', 6, 1);
                   $fecha = substr_replace($dia2, '', 8, 14);

                  //Page
                  $link_completo = "$link_ini".$fecha."$link_fin"."$link_page";
                  //Alternative 1
                  $link_completo_bg = "$link_ini".$fecha."$link_fin_bg"."$link_page";
                  $link_completo_fg = "$link_ini".$fecha."$link_fin_fg"."$link_page";
                  //Alternative 2
                  $link_completo_bg1 = "$link_ini".$fecha."$link_fin_bg1"."$link_page";
                  $link_completo_fg1 = "$link_ini".$fecha."$link_fin_fg1"."$link_page";


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
                  $data = file_get_contents($archivo."29");
                  $base64_29 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."30");
                  $base64_30 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."31");
                  $base64_31 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."32");
                  $base64_32 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."33");
                  $base64_33 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."34");
                  $base64_34 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."35");
                  $base64_35 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  }
                  catch(Exception $e){
                      //
                  }






                 //Link layer bg - Alternative 1
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
                  $databg = file_get_contents($archivobg."29");
                  $base64bg_29 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivobg."30");
                  $base64bg_30 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."31");
                  $base64bg_31 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."32");
                  $base64bg_32 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."33");
                  $base64bg_33 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."34");
                  $base64bg_34 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."35");
                  $base64bg_35 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 

                //Alternative 2
                $archivobg1 = $link_completo_bg1;
                  $typebg = pathinfo($archivobg1, PATHINFO_EXTENSION);   //cambiar typebg???

                $databg = file_get_contents($archivobg1."1");
                  $base64bg1_1 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivobg1."2");
                  $base64bg1_2 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."3");
                  $base64bg1_3 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."4");
                  $base64bg1_4 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."5");
                  $base64bg1_5 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."6");
                  $base64bg1_6 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."7");
                  $base64bg1_7 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."8");
                  $base64bg1_8 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."9");
                  $base64bg1_9 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."10");
                  $base64bg1_10 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."11");
                  $base64bg1_11 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."12");
                  $base64bg1_12 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."13");
                  $base64bg1_13 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."14");
                  $base64bg1_14 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."15");
                  $base64bg1_15 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivobg1."16");
                  $base64bg1_16 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."17");
                  $base64bg1_17 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."18");
                  $base64bg1_18 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."19");
                  $base64bg1_19 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."20");
                  $base64bg1_20 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."21");
                  $base64bg1_21 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."22");
                  $base64bg1_22 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."23");
                  $base64bg1_23 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."24");
                  $base64bg1_24 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."25");
                  $base64bg1_25 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."26");
                  $base64bg1_26 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."27");
                  $base64bg1_27 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."28");
                  $base64bg1_28 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."29");
                  $base64bg1_29 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivobg1."30");
                  $base64bg1_30 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."31");
                  $base64bg1_31 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."32");
                  $base64bg1_32 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."33");
                  $base64bg1_33 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."34");
                  $base64bg1_34 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg1."35");
                  $base64bg1_35 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 




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
                  $datafg = file_get_contents($archivofg."29");
                  $base64fg_29 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg); 
                  $datafg = file_get_contents($archivofg."30");
                  $base64fg30 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."31");
                  $base64fg_31 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."32");
                  $base64fg_32 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."33");
                  $base64fg_33 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."34");
                  $base64fg_34 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."35");
                  $base64fg_35 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
// Aleternative 2
                  $archivofg1 = $link_completo_fg1;
                  $typebg = pathinfo($archivofg1, PATHINFO_EXTENSION);   //cambiar typebg ???

                $databg = file_get_contents($archivobfg1."1");
                  $base64fg1_1 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivofg1."2");
                  $base64bg1_2 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."3");
                  $base64fg1_3 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."4");
                  $base64fg1_4 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."5");
                  $base64fg1_5 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."6");
                  $base64fg1_6 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."7");
                  $base64fg1_7 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."8");
                  $base64fg1_8 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."9");
                  $base64fg1_9 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."10");
                  $base64fg1_10 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."11");
                  $base64fg1_11 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."12");
                  $base64fg1_12 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."13");
                  $base64fg1_13 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."14");
                  $base64fg1_14 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."15");
                  $base64fg1_15 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivofg1."16");
                  $base64fg1_16 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."17");
                  $base64fg1_17 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."18");
                  $base64fg1_18 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."19");
                  $base64fg1_19 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."20");
                  $base64fg1_20 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."21");
                  $base64fg1_21 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."22");
                  $base64fg1_22 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."23");
                  $base64fg1_23 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."24");
                  $base64fg1_24 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."25");
                  $base64fg1_25 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."26");
                  $base64fg1_26 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."27");
                  $base64fg1_27 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."28");
                  $base64fg1_28 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."29");
                  $base64fg1_29 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg);
                  $databg = file_get_contents($archivofg1."30");
                  $base64fg1_30 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."31");
                  $base64fg1_31 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."32");
                  $base64fg1_32 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."33");
                  $base64fg1_33 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."34");
                  $base64fg1_34 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivofg1."35");
                  $base64fg1_35 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 





                  }

                  catch(Exception $e){


                  }
            ?>
<!-- else if(@getimagesize($base64bg1_2)&& @getimagesize($base64fg1_2)){ echo "<img src= $base64bg1_2 ?>"; echo "<img src= $base64fg1_2 ?>"; } -->
<!--Colocar alternativas bg1 y fg1-->

    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_1)) { echo "<img src= $base64_1 ?>"; } else if(@getimagesize($base64bg_1)&& @getimagesize($base64fg_1)){ echo "<img src= $base64bg_1 ?>"; echo "<img src= $base64fg_1 ?>"; } else if(@getimagesize($base64bg1_1)&& @getimagesize($base64fg1_1)){ echo "<img src= $base64bg1_1 ?>"; echo "<img src= $base64fg1_1 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_2)) { echo "<img src= $base64_2 ?>"; } else if(@getimagesize($base64bg_2)&& @getimagesize($base64fg_2)){ echo "<img src= $base64bg_2 ?>"; echo "<img src= $base64fg_2 ?>"; } else if(@getimagesize($base64bg1_2)&& @getimagesize($base64fg1_2)){ echo "<img src= $base64bg1_2 ?>"; echo "<img src= $base64fg1_2 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_3)) { echo "<img src= $base64_3 ?>"; } else if(@getimagesize($base64bg_3)&& @getimagesize($base64fg_3)){ echo "<img src= $base64bg_3 ?>"; echo "<img src= $base64fg_3 ?>"; } else if(@getimagesize($base64bg1_3)&& @getimagesize($base64fg1_3)){ echo "<img src= $base64bg1_3 ?>"; echo "<img src= $base64fg1_3 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_4)) { echo "<img src= $base64_4 ?>"; } else if(@getimagesize($base64bg_4)&& @getimagesize($base64fg_4)){ echo "<img src= $base64bg_4 ?>"; echo "<img src= $base64fg_4 ?>"; } else if(@getimagesize($base64bg1_4)&& @getimagesize($base64fg1_4)){ echo "<img src= $base64bg1_4 ?>"; echo "<img src= $base64fg1_4 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_5)) { echo "<img src= $base64_5 ?>"; } else if(@getimagesize($base64bg_5)&& @getimagesize($base64fg_5)){ echo "<img src= $base64bg_5 ?>"; echo "<img src= $base64fg_5 ?>"; }  else if(@getimagesize($base64bg1_5)&& @getimagesize($base64fg1_5)){ echo "<img src= $base64bg1_5 ?>"; echo "<img src= $base64fg1_5 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_6)) { echo "<img src= $base64_6 ?>"; } else if(@getimagesize($base64bg_6)&& @getimagesize($base64fg_6)){ echo "<img src= $base64bg_6 ?>"; echo "<img src= $base64fg_6 ?>"; }  else if(@getimagesize($base64bg1_6)&& @getimagesize($base64fg1_6)){ echo "<img src= $base64bg1_6 ?>"; echo "<img src= $base64fg1_6 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_7)) { echo "<img src= $base64_7 ?>"; } else if(@getimagesize($base64bg_7)&& @getimagesize($base64fg_7)){ echo "<img src= $base64bg_7 ?>"; echo "<img src= $base64fg_7 ?>"; }  else if(@getimagesize($base64bg1_7)&& @getimagesize($base64fg1_7)){ echo "<img src= $base64bg1_7 ?>"; echo "<img src= $base64fg1_7 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_8)) { echo "<img src= $base64_8 ?>"; } else if(@getimagesize($base64bg_8)&& @getimagesize($base64fg_8)){ echo "<img src= $base64bg_8 ?>"; echo "<img src= $base64fg_8 ?>"; } else if(@getimagesize($base64bg1_8)&& @getimagesize($base64fg1_8)){ echo "<img src= $base64bg1_8 ?>"; echo "<img src= $base64fg1_8 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_9)) { echo "<img src= $base64_9 ?>"; } else if(@getimagesize($base64bg_9)&& @getimagesize($base64fg_9)){ echo "<img src= $base64bg_9 ?>"; echo "<img src= $base64fg_9 ?>"; } else if(@getimagesize($base64bg1_9)&& @getimagesize($base64fg1_9)){ echo "<img src= $base64bg1_9 ?>"; echo "<img src= $base64fg1_9 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_10)) { echo "<img src= $base64_10 ?>"; } else if(@getimagesize($base64bg_10)&& @getimagesize($base64fg_10)){ echo "<img src= $base64bg_10 ?>"; echo "<img src= $base64fg_10 ?>"; } else if(@getimagesize($base64bg1_10)&& @getimagesize($base64fg1_10)){ echo "<img src= $base64bg1_10 ?>"; echo "<img src= $base64fg1_10 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_11)) { echo "<img src= $base64_11 ?>"; } else if(@getimagesize($base64bg_11)&& @getimagesize($base64fg_11)){ echo "<img src= $base64bg_11 ?>"; echo "<img src= $base64fg_11 ?>"; } else if(@getimagesize($base64bg1_11)&& @getimagesize($base64fg1_11)){ echo "<img src= $base64bg1_11 ?>"; echo "<img src= $base64fg1_11 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_12)) { echo "<img src= $base64_12 ?>"; } else if(@getimagesize($base64bg_12)&& @getimagesize($base64fg_12)){ echo "<img src= $base64bg_12 ?>"; echo "<img src= $base64fg_12 ?>"; }  else if(@getimagesize($base64bg1_12)&& @getimagesize($base64fg1_12)){ echo "<img src= $base64bg1_12 ?>"; echo "<img src= $base64fg1_12 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_13)) { echo "<img src= $base64_13 ?>"; } else if(@getimagesize($base64bg_13)&& @getimagesize($base64fg_13)){ echo "<img src= $base64bg_13 ?>"; echo "<img src= $base64fg_13 ?>"; }  else if(@getimagesize($base64bg1_13)&& @getimagesize($base64fg1_13)){ echo "<img src= $base64bg1_13 ?>"; echo "<img src= $base64fg1_13 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_14)) { echo "<img src= $base64_14 ?>"; } else if(@getimagesize($base64bg_14)&& @getimagesize($base64fg_14)){ echo "<img src= $base64bg_14 ?>"; echo "<img src= $base64fg_14 ?>"; }  else if(@getimagesize($base64bg1_14)&& @getimagesize($base64fg1_14)){ echo "<img src= $base64bg1_14 ?>"; echo "<img src= $base64fg1_14 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_15)) { echo "<img src= $base64_15 ?>"; } else if(@getimagesize($base64bg_15)&& @getimagesize($base64fg_15)){ echo "<img src= $base64bg_15 ?>"; echo "<img src= $base64fg_15 ?>"; }  else if(@getimagesize($base64bg1_15)&& @getimagesize($base64fg1_15)){ echo "<img src= $base64bg1_15 ?>"; echo "<img src= $base64fg1_15 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_16)) { echo "<img src= $base64_16 ?>"; } else if(@getimagesize($base64bg_16)&& @getimagesize($base64fg_16)){ echo "<img src= $base64bg_16 ?>"; echo "<img src= $base64fg_16 ?>"; }  else if(@getimagesize($base64bg1_16)&& @getimagesize($base64fg1_16)){ echo "<img src= $base64bg1_16 ?>"; echo "<img src= $base64fg1_16 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_17)) { echo "<img src= $base64_17 ?>"; } else if(@getimagesize($base64bg_17)&& @getimagesize($base64fg_17)){ echo "<img src= $base64bg_17 ?>"; echo "<img src= $base64fg_17 ?>"; }  else if(@getimagesize($base64bg1_17)&& @getimagesize($base64fg1_17)){ echo "<img src= $base64bg1_17 ?>"; echo "<img src= $base64fg1_17 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_18)) { echo "<img src= $base64_18 ?>"; } else if(@getimagesize($base64bg_18)&& @getimagesize($base64fg_18)){ echo "<img src= $base64bg_18 ?>"; echo "<img src= $base64fg_18 ?>"; }  else if(@getimagesize($base64bg1_18)&& @getimagesize($base64fg1_18)){ echo "<img src= $base64bg1_18 ?>"; echo "<img src= $base64fg1_18 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_19)) { echo "<img src= $base64_19 ?>"; } else if(@getimagesize($base64bg_19)&& @getimagesize($base64fg_19)){ echo "<img src= $base64bg_19 ?>"; echo "<img src= $base64fg_19 ?>"; }  else if(@getimagesize($base64bg1_19)&& @getimagesize($base64fg1_19)){ echo "<img src= $base64bg1_19?>"; echo "<img src= $base64fg1_19 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_20)) { echo "<img src= $base64_20 ?>"; } else if(@getimagesize($base64bg_20)&& @getimagesize($base64fg_20)){ echo "<img src= $base64bg_20 ?>"; echo "<img src= $base64fg_20 ?>"; }  else if(@getimagesize($base64bg1_20)&& @getimagesize($base64fg1_20)){ echo "<img src= $base64bg1_20 ?>"; echo "<img src= $base64fg1_20 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_21)) { echo "<img src= $base64_21 ?>"; } else if(@getimagesize($base64bg_21)&& @getimagesize($base64fg_21)){ echo "<img src= $base64bg_21 ?>"; echo "<img src= $base64fg_21 ?>"; }  else if(@getimagesize($base64bg1_21)&& @getimagesize($base64fg1_21)){ echo "<img src= $base64bg1_21 ?>"; echo "<img src= $base64fg1_21 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_22)) { echo "<img src= $base64_22 ?>"; } else if(@getimagesize($base64bg_22)&& @getimagesize($base64fg_22)){ echo "<img src= $base64bg_22 ?>"; echo "<img src= $base64fg_22 ?>"; }  else if(@getimagesize($base64bg1_22)&& @getimagesize($base64fg1_22)){ echo "<img src= $base64bg1_22 ?>"; echo "<img src= $base64fg1_22 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_23)) { echo "<img src= $base64_23 ?>"; } else if(@getimagesize($base64bg_23)&& @getimagesize($base64fg_23)){ echo "<img src= $base64bg_23 ?>"; echo "<img src= $base64fg_23 ?>"; } else if(@getimagesize($base64bg1_23)&& @getimagesize($base64fg1_23)){ echo "<img src= $base64bg1_23 ?>"; echo "<img src= $base64fg1_23 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_24)) { echo "<img src= $base64_24 ?>"; } else if(@getimagesize($base64bg_24)&& @getimagesize($base64fg_24)){ echo "<img src= $base64bg_24 ?>"; echo "<img src= $base64fg_24 ?>"; } else if(@getimagesize($base64bg1_24)&& @getimagesize($base64fg1_24)){ echo "<img src= $base64bg1_24 ?>"; echo "<img src= $base64fg1_24 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_25)) { echo "<img src= $base64_25 ?>"; } else if(@getimagesize($base64bg_25)&& @getimagesize($base64fg_25)){ echo "<img src= $base64bg_25 ?>"; echo "<img src= $base64fg_25 ?>"; }  else if(@getimagesize($base64bg1_25)&& @getimagesize($base64fg1_25)){ echo "<img src= $base64bg1_25 ?>"; echo "<img src= $base64fg1_25 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>


    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_26)) { echo "<img src= $base64_26 ?>"; } else if(@getimagesize($base64bg_26)&& @getimagesize($base64fg_26)){ echo "<img src= $base64bg_26 ?>"; echo "<img src= $base64fg_26 ?>"; } else if(@getimagesize($base64bg1_26)&& @getimagesize($base64fg1_26)){ echo "<img src= $base64bg1_26 ?>"; echo "<img src= $base64fg1_26 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_27)) { echo "<img src= $base64_27 ?>"; } else if(@getimagesize($base64bg_27)&& @getimagesize($base64fg_27)){ echo "<img src= $base64bg_27 ?>"; echo "<img src= $base64fg_27 ?>"; } else if(@getimagesize($base64bg1_27)&& @getimagesize($base64fg1_27)){ echo "<img src= $base64bg1_27 ?>"; echo "<img src= $base64fg1_27 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimgs"><div class="xfg"></div> 
 <?php if (@getimagesize($base64_28)) { echo "<img src= $base64_28 ?>"; } else if(@getimagesize($base64bg_28)&& @getimagesize($base64fg_28)){ echo "<img src= $base64bg_28 ?>"; echo "<img src= $base64fg_28 ?>"; } else if(@getimagesize($base64bg1_28)&& @getimagesize($base64fg1_28)){ echo "<img src= $base64bg1_28 ?>"; echo "<img src= $base64fg1_28 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_29)) { echo "<img src= $base64_29 ?>"; } else if(@getimagesize($base64bg_29)&& @getimagesize($base64fg_29)){ echo "<img src= $base64bg_29 ?>"; echo "<img src= $base64fg_29 ?>"; } else if(@getimagesize($base64bg1_29)&& @getimagesize($base64fg1_29)){ echo "<img src= $base64bg1_29 ?>"; echo "<img src= $base64fg1_29 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_30)) { echo "<img src= $base64_30 ?>"; } else if(@getimagesize($base64bg_30)&& @getimagesize($base64fg_30)){ echo "<img src= $base64bg_30 ?>"; echo "<img src= $base64fg_30 ?>"; }  else if(@getimagesize($base64bg1_30)&& @getimagesize($base64fg1_30)){ echo "<img src= $base64bg1_30 ?>"; echo "<img src= $base64fg1_30 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_31)) { echo "<img src= $base64_31 ?>"; } else if(@getimagesize($base64bg_31)&& @getimagesize($base64fg_31)){ echo "<img src= $base64bg_31 ?>"; echo "<img src= $base64fg_31 ?>"; }  else if(@getimagesize($base64bg1_31)&& @getimagesize($base64fg1_31)){ echo "<img src= $base64bg1_31 ?>"; echo "<img src= $base64fg1_31 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_32)) { echo "<img src= $base64_32 ?>"; } else if(@getimagesize($base64bg_32)&& @getimagesize($base64fg_32)){ echo "<img src= $base64bg_32 ?>"; echo "<img src= $base64fg_32 ?>"; }  else if(@getimagesize($base64bg1_32)&& @getimagesize($base64fg1_32)){ echo "<img src= $base64bg1_32 ?>"; echo "<img src= $base64fg1_32 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_33)) { echo "<img src= $base64_33 ?>"; } else if(@getimagesize($base64bg_33)&& @getimagesize($base64fg_33)){ echo "<img src= $base64bg_33 ?>"; echo "<img src= $base64fg_33 ?>"; }  else if(@getimagesize($base64bg1_33)&& @getimagesize($base64fg1_33)){ echo "<img src= $base64bg1_33 ?>"; echo "<img src= $base64fg1_33 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_34)) { echo "<img src= $base64_34 ?>"; } else if(@getimagesize($base64bg_34)&& @getimagesize($base64fg_34)){ echo "<img src= $base64bg_34 ?>"; echo "<img src= $base64fg_34 ?>"; }  else if(@getimagesize($base64bg1_34)&& @getimagesize($base64fg1_34)){ echo "<img src= $base64bg1_34 ?>"; echo "<img src= $base64fg1_34 ?>"; } else{ echo '<img src=" ">'; } ?> </div> <br>
    <div class="contimg"> <?php if (@getimagesize($base64_35)) { echo "<img src= $base64_35 ?>"; } else if(@getimagesize($base64bg_35)&& @getimagesize($base64fg_35)){ echo "<img src= $base64bg_35 ?>"; echo "<img src= $base64fg_35 ?>"; } else if(@getimagesize($base64bg1_35)&& @getimagesize($base64fg1_35)){ echo "<img src= $base64bg1_35 ?>"; echo "<img src= $base64fg1_35 ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
 ?>

    
</body>
</html>

