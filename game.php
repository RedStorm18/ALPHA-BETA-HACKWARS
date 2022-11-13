<?php
require_once 'config.php';



?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<html lang="en">
<head>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="CSS/variable.css" />
    <title> GAMEPLAY </title>

</head>
<script src="js/logic.js">


  
</script>

<body>
    

<div class = "container-fluid">
        <div class="player-base">
          <div class="P-TAG">PLAYER</div>
            <div class="bench"  ondrop="drop(event)" ondragover="allowDrop(event)">
              <img src="images/C3.png" >
              <img src="images/C1.png">
            </div>
            <div class="active"  ondrop="drop(event)" ondragover="allowDrop(event)">
              <img src="images/E4.png" >

            </div>
            <div class="cards" id="cards" >
                <div id="hand">

                </div>
            </div>
            <div class="deck">
              DECK
              <img src="img/logo.jpg" >

            </div>
        </div>
        
<div class="op-base">
  <div class="O-TAG"> OPPONENT</div>

      <div class="enemy-attack">
        <img src="images/E2.png" class="field">
      </div>

      <div class="enemy-b">
        <img src="images/C4.png" class="field">
        <img src="images/E1.png" class="field">

      </div>
            
        </div>
        
</div>
</body>




</html>
