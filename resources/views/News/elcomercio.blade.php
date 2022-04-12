<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <title>El-Comercio</title>
</head>
<body style="background: #000;">
    <?php
    //    2021-12-19T18:47:26-0500
$link_ini = "https://i.prcdn.co/img?file=eaaj";
$link_fin =  "00000000001001&ticket=&scale=179";

$link_page = "&page=";



$num_page = 1;


$link_fin_bg =  "00000000001001&ticket=&scale=179&layer=bg";
$link_fin_fg =  "00000000001001&ticket=&scale=135&layer=fg";


$link_fin_fg1 = "00000000001001&ticket=&scale=52&layer=fg";


            //Moment.php
            $m = new \Moment\Moment('now', 'America/Lima');           
            $dia = $m->format();
                       
                   $dia1 = substr_replace($dia, '', 4, 1);
                   $dia2 = substr_replace($dia1, '', 6, 1);
                   $fecha = substr_replace($dia2, '', 8, 14);


                  $link_completo = "$link_ini".$fecha."$link_fin"."$link_page";
            
                  $link_completo_bg = "$link_ini".$fecha."$link_fin_bg"."$link_page";
                  $link_completo_fg = "$link_ini".$fecha."$link_fin_fg"."$link_page";

                  $link_completo_fg1 = "$link_ini".$fecha."$link_fin_fg1"."$link_page";

                  //2021-12-19T18:47:26-0500 -> Formato original

                  //Link Normal
                  $archivo = "$link_completo";
                  $type = pathinfo($archivo, PATHINFO_EXTENSION);

              

         
                  //Pages
                  $data = file_get_contents($archivo."1");
                  $base64_1 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                  
                  try{
                  $data = file_get_contents($archivo."2");
                  $base64_2 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  }
                  catch(Exception $e){
    //
}
                  try{
                  $data = file_get_contents($archivo."3");
                  $base64_3 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  }
                  catch(Exception $e){
    //
}
          try{
                  $data = file_get_contents($archivo."4");
                  $base64_4 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."5");
                  $base64_5 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}
                  try{
                  $data = file_get_contents($archivo."6");
                  $base64_6 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."7");
                  $base64_7 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."8");
                  $base64_8 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."9");
                  $base64_9 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."10");
                  $base64_10 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."11");
                  $base64_11 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}
try{
                  $data = file_get_contents($archivo."12");
                  $base64_12 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."13");
                  $base64_13 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."14");
                  $base64_14 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."15");
                  $base64_15 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."16");
                  $base64_16 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."17");
                  $base64_17 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."18");
                  $base64_18 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."19");
                  $base64_19 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{                  $data = file_get_contents($archivo."20");
                  $base64_20 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."21");
                  $base64_21 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."22");
                  $base64_22 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."23");
                  $base64_23 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."24");
                  $base64_24 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{                  $data = file_get_contents($archivo."25");
                  $base64_25 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."26");
                  $base64_26 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."27");
                  $base64_27 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."28");
                  $base64_28 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."29");
                  $base64_29 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."30");
                  $base64_30 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."31");
                  $base64_31 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}try{
                  $data = file_get_contents($archivo."32");
                  $base64_32 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                }
                  catch(Exception $e){
    //
}

                  try{
                  $data = file_get_contents($archivo."33");
                  $base64_33 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."34");
                  $base64_34 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."35");
                  $base64_35 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."36");
                  $base64_36 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."37");
                  $base64_37 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."38");
                  $base64_38 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."39");
                  $base64_39 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."40");
                  $base64_40 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."41");
                  $base64_41 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."42");
                  $base64_42 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."43");
                  $base64_43 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."44");
                  $base64_44 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                  $data = file_get_contents($archivo."45");
                  $base64_45 = 'data:image/' . $type . ';base64,' . base64_encode($data); 

                  }
                  catch(Exception $e){
    //
}
try{

                  $archivobg = $link_completo_bg;
                  $typebg = pathinfo($archivobg, PATHINFO_EXTENSION);

               
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
                  $databg = file_get_contents($archivobg."36");
                  $base64bg_36 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."37");
                  $base64bg_37 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."38");
                  $base64bg_38 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."39");
                  $base64bg_39 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."40");
                  $base64bg_40 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."41");
                  $base64bg_41 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."42");
                  $base64bg_42 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."43");
                  $base64bg_43 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."44");
                  $base64bg_44 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  $databg = file_get_contents($archivobg."45");
                  $base64bg_45 = 'data:image/' . $typebg . ';base64,' . base64_encode($databg); 
                  

                }

catch(Exception $e){
    //
}
          
                 //Link layer bg
               
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
                  $datafg = file_get_contents($archivofg."36");
                  $base64fg_36 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."37");
                  $base64fg_37 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."38");
                  $base64fg_38 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."39");
                  $base64fg_39 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."40");
                  $base64fg_40 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."41");
                  $base64fg_41 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."42");
                  $base64fg_42 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."43");
                  $base64fg_43 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg); 
                  $datafg = file_get_contents($archivofg."44");
                  $base64fg_44 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
                  $datafg = file_get_contents($archivofg."45");
                  $base64fg_45 = 'data:image/' . $typefg . ';base64,' . base64_encode($datafg);
           

}

                  catch(Exception $e){
                      //
                  }

/*
                  $archivo2 = "$link_fin_fg1";
                  $typea = pathinfo($archivo2, PATHINFO_EXTENSION);

                 try{
                  $dataa = file_get_contents($archivo2."1");
                  $base64_1a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                 

                  $dataa = file_get_contents($archivo2."2");
                  $base64_2a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 

                  $dataa = file_get_contents($archivo2."3");
                  $base64_3a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 

                  $dataa = file_get_contents($archivo2."4");
                  $base64_4a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 

                  $dataa = file_get_contents($archivo2."5");
                  $base64_5a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
         
                  $dataa = file_get_contents($archivo2."6");
                  $base64_6a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 

              
                  $dataa = file_get_contents($archivo2."7"); 
                  $base64_7a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."8");
                  $base64_8a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."9");
                  $base64_9a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."10");
                  $base64_10a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."11");
                  $base64_11a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."12");
                  $base64_12a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."13");
                  $base64_13a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."14");
                  $base64_14a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."15");
                  $base64_15a = 'data:image/' . $typea. ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."16");
                  $base64_16a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."17");
                  $base64_17a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."18");
                  $base64_18a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."19");
                  $base64_19a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."20");
                  $base64_20a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."21");
                  $base64_21a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."22");
                  $base64_22a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."23");
                  $base64_23a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."24");
                  $base64_24a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."25");
                  $base64_25a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."26");
                  $base64_26a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."27");
                  $base64_27a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."28");
                  $base64_28a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."29");
                  $base64_29a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."30");
                  $base64_30a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."31");
                  $base64_31a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."32");
                  $base64_32a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa= file_get_contents($archivo2."33");
                  $base64_33a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."34");
                  $base64_34a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."35");
                  $base64_35a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."36");
                  $base64_36a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."37");
                  $base64_37a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."38");
                  $base64_38a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."39");
                  $base64_39a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa= file_get_contents($archivo2."40");
                  $base64_40a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."41");
                  $base64_41a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."42");
                  $base64_42a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."43");
                  $base64_43a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."44");
                  $base64_44a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 
                  $dataa = file_get_contents($archivo2."45");
                  $base64_45a = 'data:image/' . $typea . ';base64,' . base64_encode($dataa); 

                }   catch(Exception $e){
                      //
                  }
*/

                  //Link aux


            ?>


    <div class="contimg"> <div class="xfg"></div> <?php if (@getimagesize($base64_1)) { echo "<img src= $base64_1 ?>";  } elseif(@getimagesize($base64bg_1)&& @getimagesize($base64fg_1)){ echo "<img src= $base64bg_1 ?>"; echo "<img src= $base64fg_1 ?>"; }else if(@getimagesize($base64bg_1) && @getimagesize($base64_1a)) { echo "<img src= $base64bg_1 ?>";  echo " <img src= $base64_1a ?>"; }  else{ echo '<img src=" ">'; } ?> </div> <br>
   
    
  

   


    ?>

    <script>
    
    let box = document.getElementsByClassName('contimg');
    for(let i=0; i<box.length;i++){

        if(box[i].children[1].naturalWidth == 0 ){
            box[i].style.display = 'none';

        }

    }


    </script>

    
</body>
</html>