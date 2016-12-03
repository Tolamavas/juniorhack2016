<?php
  $lines = file("data/temperature.txt");
    if($_POST) {file_put_contents("data/temperature.txt", $_POST["change"]); header("location: index.php");}
?><!DOCTYPE html>
<html lang='cs'>
  <head>
  <script src="jquery-3.1.1.min.js"></script>
 <script>
    $(document).ready(function(){
        setInterval(function(){
            refreshData();
        }, 1000);
    });
    function refreshData(){
        $.ajax({
            url: "temperature.php",
            dataType: "json",
            success:  function( data ) { 
              $( "#temp" ).val(data);
            }
        });            
    }
</script>
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
            <input name="show" value="<?php echo trim(end($lines)); ?>" disabled id="temp">
         
         
            <input type="number" name="change" required min="23" max="40" value="<?php echo $t; ?>">
            <input id="hover" type="submit" name="submit">
            
            
          </div>
             
        </form>
      </div>
    </div>
  </body>
</html>



   