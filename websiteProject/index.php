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
        function ajaxpost() {
            // (A) GET FORM DATA
            var form = document.getElementById("myForm");
            var data = new FormData(form);

            // (B) AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "0-dummy.php");
            // What to do when server responds
            xhr.onload = function() {
                console.log(this.response);
            };
            xhr.send(data);

        }

        function get_component_states() {
            // get request using XMLHttpRequest, get all the component states from scripts/displayer.php
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "scripts/displayer.php", true);
            xmlhttp.send();
            // show the response in the console
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // update the form with the new values
                    var response = JSON.parse(this.responseText);
                    // update the form with the new values
                    document.getElementsByName("modeSelect")[0].checked = response.mode;
                    document.getElementsByClassName("time")[0].value = response.time;
                    document.getElementsByClassName("date")[0].value = response.date;
                    document.getElementsByName("mainVoltage")[0].value = response.mainVoltage;
                    document.getElementsByName("loadPower")[0].value = response.loadPower;
                    document.getElementsByName("exportPower")[0].value = response.exportPower;
                    document.getElementsByName("solarPower")[0].value = response.solarPower;
                    document.getElementsByName("todayKwh")[0].value = response.todayKwh;
                    document.getElementsByName("totalKwh")[0].value = response.totalKwh;
                    document.getElementsByName("circuit1")[0].checked = response.circuit1;
                    document.getElementsByName("circuit2")[0].checked = response.circuit2;
                    document.getElementsByName("circuit3")[0].checked = response.circuit3;
                    document.getElementsByName("circuit4")[0].checked = response.circuit4;
                    document.getElementsByName("circuit5")[0].checked = response.circuit5;
                    document.getElementsByName("circuit6")[0].checked = response.circuit6;
                    document.getElementsByName("circuit7")[0].checked = response.circuit7;
                    document.getElementsByName("circuit8")[0].checked = response.circuit8;
                }
            };


        }

        function on_load() {
            // get the component states from scripts/displayer.php
            get_component_states();
            // set the time
            timeFunction();
        }
    </script>
    </head>


<body onload="on_load()">
    <div class="background-display">
        <form id="myForm">
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
                    <div class="bottom-text" name = "mainVoltage">
                        <?= $mainVoltage ?>
                    </div>
                </div>
                <div class="load-power">
                    <div class="top-text">
                        LOAD POWER
                    </div>
                    <div class="bottom-text" name = "loadPower">
                        <?= $loadPower ?>
                    </div>
                </div>
                <div class="export-power">
                    <div class="top-text">
                        EXPORT POWER
                    </div>
                    <div class="bottom-text" name = "exportPower">
                        <?= $exportPower ?>
                    </div>
                </div>
                <div class="solar-power">
                    <div class="top-text">
                        SOLAR POWER
                    </div>
                    <div class="bottom-text" name="solarPower">
                        <?= $solarPower ?>
                    </div>
                </div>
                <div class="today-power">
                    <div class="top-text">
                        TODAY KWH
                    </div>
                    <div class="bottom-text" name="todayKwh">
                        <?= $todayKwh ?>
                    </div>
                </div>
                <div class="total-power">
                    <div class="top-text">
                        TOTAL-KWH
                    </div>
                    <div class="bottom-text" name = "totalKwh">
                        <?= $totalKwh ?>
                    </div>
                </div>
            </div>
            <div class="circuits">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit1">
            </div>

            <div class="circuit-2">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit2">

            </div>
            <div class="circuit-3">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit3">

            </div>
            <div class="circuit-4">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit4">

            </div>
            <div class="circuit-5">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit5">

            </div>
            <div class="circuit-6">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit6">

            </div>
            <div class="circuit-7">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit7">

            </div>
            <div class="circuit-8">
                <input type="checkbox" onclick="setInterval(ajaxpost,5000);" name="circuit8">
            </div>
    </div>
    </div>
    </form>
    </div>
</body>

</html>