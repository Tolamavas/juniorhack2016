<?php
  $t = file_get_contents("data/temperature.txt");
?><!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'> 
    <link rel="stylesheet" href="styles.css" type="text/css">  
  </head>
  <body>
    <div id="stranka">
      <div id="formular">
        <div class="pole">
            <input class="text" type="text" value="Momentální teplota" disabled>
            <input class="text" type="text" value="Požadovaná teplota" disabled>
        </div>               
        <form action="" method="POST">
          <div class="pole">
            <input type="number" name="show" value="<?php echo $t; ?>" disabled>
          </form>
          <form action="" method="GET"> 
            <input type="number" name="change" required min="23" max="40" value="24">
            <input id="hover" type="submit" name="submit">
            
            
          </div>
             
        </form>
      </div>
    </div>
  </body>
</html>



   