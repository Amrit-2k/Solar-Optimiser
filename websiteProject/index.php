<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="styles/styles.css">   
    <link rel="stylesheet" href="styles/circuits.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/main-display.css"> 
    <script type="text/javascript" src="scripts/time.js"></script>
    
    <script>
            function ajaxpost () {
              // (A) GET FORM DATA
              var form = document.getElementById("myForm");
              var data = new FormData(form);
        
              // (B) AJAX
              var xhr = new XMLHttpRequest();
              xhr.open("POST", "0-dummy.php");
              // What to do when server responds
              xhr.onload = function () { console.log(this.response); };
              xhr.send(data);
        
            }
            </script>
    <
   
    
</head>
<body onload="timeFunction()">
<?php include  'scripts/displayer.php';?>
    <div  class="background-display">
    <form id="myForm" >
        <div class="title">
            SC-110 Solar Optimiser
        </div> 
        <div class="menu">
            <div class="date">                
                <span id="fullDate"></span>
                </div>
            <div class="mode-select">
                <input type="checkbox" id="moder" onclick="setInterval(ajaxpost,5000);" name="modeSelect">
               
            </div>
            <div class="time">
                 <span id="fullTime"></span>
                </div>
        </div>
        <div class="main-display">
            <div class="main-voltage">
                <div class="top-text">
                    MAINS VOLTAGE
                </div>
                <div class="bottom-text">
                <?=$mainVoltage?>
                </div>
            </div>
            <div class="load-power">
                <div class="top-text">
                    LOAD POWER
                </div>
                <div class="bottom-text">
                <?=$loadPower?>
                </div>
            </div>
            <div class="export-power">
                <div class="top-text">
                    EXPORT POWER
                </div>
                <div class="bottom-text">
                <?=$exportPower?>
                </div>
            </div>
            <div class="solar-power">
                <div class="top-text">
                   SOLAR POWER
                </div>
                <div class="bottom-text">
                <?=$solarPower?>
                </div>
            </div>
            <div class="today-power">
                <div class="top-text">
                    TODAY KWH
                </div>
                <div class="bottom-text">
                <?=$todayKwh?>
                </div>
            </div>
            <div class="total-power">
                <div class="top-text">
                    TOTAL-KWH
                </div>
                <div class="bottom-text">
                <?=$totalKwh?>
                </div>
            </div>
        </div>
        <div class="circuits">
                <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitOne">              
            </div>
                      
            <div class="circuit-2">
                 <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitTwo">
                
            </div>
            <div class="circuit-3">
                <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitThree">
            
            </div>
            <div class="circuit-4">
                <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitFour">
            
            </div>
            <div class="circuit-5">
                <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitFive">
            
            </div>
            <div class="circuit-6">
                <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitSix">
            
            </div>
            <div class="circuit-7">
                <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitSeven">
            
            </div>
            <div class="circuit-8">
                             
                 <input type="checkbox"  onclick="setInterval(ajaxpost,5000);" name="circuitEight">
                                   
                   
                
                
                
            
            </div>
            
            
            </div>  
                     
        </div>

        </form>

    </div>
    <?php
    if ($mode=='on')
    {
        echo $mode;
    }
        ?>
    
    
    
</body>
</html>