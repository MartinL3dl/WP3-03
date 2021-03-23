<html>
  <head>
    <title>WP3-03</title>
  </head>
  <body>
   <?php 
     $hp = 200;
     for ($i=0;($hp > 0) && ($i <= 10); $i++){
       echo "<h2>Loď vyjela z Apalu</h2>";
      for ($Y=0; $Y<5; $Y++){ 
        $damage = rand(0,5);
        $hp = $hp - $damage;
        echo "<br> Piráti vystřelili a udělili poškození v hodnotě $damage HP";
       }
       echo "<br> HP zásobovací lodě: <b>$hp</b>";     
       if($hp < 0){
        echo "<h1>Loď byla zničena!</h1>";
        } 
     } ?>
  </body>
</html>