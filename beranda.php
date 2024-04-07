<?php
session_start();
include "koneksi.php";
if ($_SESSION['status'] != "login") {
  header("location:login_akun.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SHERA OS</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
    * {
      padding: 0px;
      margin: 0px;
    }
    body {
      background-image: url('Gambar/background4.jpeg'); 
      background-size: cover; 
      background-repeat: no-repeat; 
      background-position: center center; 
      /* Tetapkan warna latar belakang jika gambar tidak dimuat atau transparan */
      background-color: #ffffff80;
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }
    html {
      font-family: "Montserrat", sans-serif;
    }
    section {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container-calc {
      width: 90%;
      max-width: 300px;
      background-color: rgb(39, 55, 59);
      border-radius: 10px;
      overflow: hidden;
    }
    .display-calc {
      background-color: #f0f8ff;
      height: 100px;
      width: 93%;
      text-align: right;
      padding: 10px;
      font-size: 30px;
      position: relative;
      margin-bottom: 5px;
      /*margin-top: 40px;*/
      margin-left: 10px;
      margin-right: 10px;
    }
    .display-1 {
      opacity: 0.4;
      font-size: 20px;
      height: 20px;
      overflow: hidden;
    }
    .display-2 {
      font-size: 40px;
      height: 50px;
      overflow: hidden;
    }
    .temp-result {
      position: absolute;
      bottom: 0;
      left: 10;
      font-size: 20px;
      opacity: 0.3;
    }
    .all_button {
      color: whitesmoke;
      display: grid;
      background-color: #536878;
      grid-template: repeat(4, 1fr) / repeat(4, 1fr);
      margin-bottom: 10px;
      margin-left: 10px;
      margin-right: 10px;
    }
    .button {
      border: 2px solid rgba(92, 92, 92, 0.137);
      display: inline-block;
      height: 70px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      cursor: pointer;
      font-weight: bold;
      border-color: #414a4c;
    }
    .button:hover {
      background-color: #708090;
    }
    .btn-0 {
      grid-column: 1/3;
    }
    #btnpower {
      color: white;
      cursor: pointer;
    }
    img.apk {
      margin-left: 20px;
      margin-top: 20px;
      height: 70px;
      width: 80px;
    }
    img.apk:hover {
      cursor: pointer;
    }
    .dropbtn {
      background-color: #ffffff00;
      color: white;
      padding: 10px 10px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }
    .dropdown {
      width: 50px;
      display: inline-block;
      border-radius: 5px;
    }
    .dropdown-content {
      text-align: left;
      display: none;
      /*background-color: #f9f9f9;*/
      background-color: #414a4c;
      font-weight: bold;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      position: absolute;
      bottom: 100%;
      right: 0;
      border-radius: 5px;
    }
    .dropdown-content a {
      color: white;
      padding: 15px 12px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      /*background-color: #f1f1f1;*/
      background-color: #808080;
      border-radius: 3px;
    }
    .dropdown:hover .dropdown-content {
      display: block;
      /*background-color: #414a4c;*/
    }
    .dropdown:hover .dropbtn {
      background-color: #ffffff30;
      color: white;
    }
    #footer {
      height: 50px;
      position: fixed; 
      bottom: 0; 
      width: 100%;
      padding: 10px;
      background-color: #343a40;
      color: white;
      display: flex;
      justify-content: right;
      align-items: center;
    }
    .footer p {
      color: white;
      padding-top: 11px;
      margin-right: 7px;
    }
    .calendar {
      position: absolute;
      width: 272px;
      left: 50%;
      top: 50%;
      margin: -200px 0px 0px -150px;
      background: #404040;
      border-radius: 4px;
      overflow: hidden;
      display: none;
    }
    .ui-datepicker-header {
      height: 50px;
      line-height: 50px;
      color: #b0aead;
      background: #e9e5e3;
      margin-bottom: 10px;
    }
    .ui-datepicker-prev,
    .ui-datepicker-next,
    .close-calendar {
      width: 30px;
      height: 30px;
      text-indent: 9999px;
      border: 2px solid #b0aead;
      border-radius: 50%;
      cursor: pointer;
      overflow: hidden;
      margin-top: 10px;
    }
    .ui-datepicker-prev:after,
    .ui-datepicker-next:after,
    .close-calendar:after {
      content: '';
      position: absolute;
      display: block;
      width: 6px;
      height: 6px;
      border-left: 2px solid #b0aead;
      border-bottom: 2px solid #b0aead;
    }
    .ui-datepicker-prev:hover,
    .ui-datepicker-next:hover,
    .ui-datepicker-prev:hover:after,
    .ui-datepicker-next:hover:after,
    .close-calendar:hover:after {
      border-color: #5ed1cc;
    }
    .ui-datepicker-title {
      text-align: center;
    }
    .ui-datepicker-calendar {
      width: 100px;
      text-align: center;
    }
    .ui-datepicker-calendar thead tr th span {
      display: block;
      width: 20px;
      color: #00a8b2;
      margin-bottom: 5px;
      font-size: 13px;
    }
    .ui-state-default {
      display: block;
      text-decoration: none;
      color: #b5b5b5;
      line-height: 40px;
      font-size: 12px;
    }
    .ui-state-default:hover {
      background: rgba(0, 0, 0, 0.02);
    }
    .ui-state-highlight {
      color: #8dd391;
    }
    .ui-state-active {
      color: #5ed1cc;
    }
    .ui-datepicker-unselectable .ui-state-default {
      color: #eee;
      border: 2px solid transparent;
    }
    #close:hover{
      cursor: pointer;
    }
    .ui-datepicker-prev,
    .ui-datepicker-next {
      background-color: transparent; 
      border: none;
      text-indent: 0;
    }
    .ui-datepicker-prev:after,
    .ui-datepicker-next:after {
      border: none;
    }
    .ui-datepicker-prev:hover,
    .ui-datepicker-next:hover {
      background-color: transparent;
      border-color: grey;
    }
    .ui-datepicker-calendar .ui-state-active {
      background-color: #00000090;
      border-color: #00000090;
      color: white;
    }
    .ui-datepicker-today .ui-state-default {
      background-color: #00000050; 
      border-color: #00000090;
      color: white;
    }
    span.img-label {
      color: white;
      font-size: 14px;
      margin-top: 5px;
      display: block;
      max-width: 90px;
      text-align: center;
      margin-left: 20px;
    }
    .container-apk {
      display: flex;
      flex-direction: row;
    }
    div.img-container span {
      cursor: pointer;
    }
            #battery-container {
            text-align: center;
            border-color: white;
        }
        #battery-icon {
            width: 20px;
            height: 11px;
            background-color: #838996;
            /*background-color: #343a40;*/
            position: relative;
            margin-bottom: 3px;
            border-radius: 2px;
            margin-right: 5px;
            border-color: white;
        }
        #battery-level {
            height: 100%;
            background-color: white; 
            position: absolute;
            bottom: 0;
            border-radius: 2px;
            cursor: pointer;
        }
        #charging-icon {
            width: 10px; 
            height: 10px; 
            position: absolute;
            top: -2px;
            right: 12px;
        }
        .charging-icon {
            width: 10px;
            height: 12px;
            position: absolute;
            right: 12px;
        }
        .battery-level {
            position: absolute;
            bottom: 30px;
            right: -100px;
            background-color: #000000;
            width: 200px;
            padding: 5px; 
            border-radius: 2px;
            cursor: pointer;
        }
            #battery-text,
    #battery-percentage {
        display: none;
        cursor: pointer;
    }

    #battery-container:hover #battery-text,
    #battery-container:hover #battery-percentage {
        display: block;
        cursor: pointer;
    }
    #wifi-icon-div {
            width: 20px;
            height: 10px;
            position: relative;
            bottom: 5px;
            border-radius: 2px;
            margin-right: 3px;
            border-color: white;
            cursor: pointer;
    }
    #speaker-icon {
            width: 20px;
            height: 10px;
            position: relative;
            bottom: 7px;
            border-radius: 2px;
            margin-right: 5px;
            border-color: white;
            cursor: pointer;
    }
            #wifi-icon {
            font-size: 17px;
            display: block;
            color: white;
        }
</style>
</head>
<body>
<!--   <div>
    <iframe src="https://docs.google.com/document/d/1xw7Y5hxIy7LrNCOctQw1PArGXD0KUrYPPh5JWkh1b4c/edit" id="google-web" style="display: none;width:100%;margin-top: 0px; position: fixed;height: 93.5%;"></iframe>
  </div> -->

<!--     <div>
    <iframe src="https://www.google.com/" id="google-web" style="display: none;width:100%;margin-top: 0px; position: fixed;height: 93.5%;"></iframe>
  </div> -->
<div>
  <div class="container-apk">
    <!--       <div class="img-container">
        <img src="Gambar/music.png" class="apk" onclick="music()">
        <span class="img-label" style=";font-family: arial black;color: white;" onclick="music()">Music</span>
      </div> -->
<!--     <div class="img-container">
      <img src="Gambar/youtube.png" class="apk" onclick="youtube()">
      <span class="img-label" style=";font-family: arial black;color: white;" onclick="youtube()">Youtube</span>
    </div> -->
    <div class="img-container">
      <img src="Gambar/calculator.png" class="apk" onclick="calc()">
      <span class="img-label" style=";font-family: arial black;color: white;" onclick="calc()">Calculator</span>
    </div>
    <div class="img-container">
      <img src="Gambar/camera.png" class="apk" onclick="cam()">
      <span class="img-label" style=";font-family: arial black;color: white;" onclick="cam()">Camera</span>
    </div>
    <div class="img-container">
      <img src="Gambar/calender.png" class="apk" onclick="date()">
      <span class="img-label" style=";font-family: arial black;color: white;" onclick="date()">Calender</span>
    </div>
    <div class="img-container">
      <img src="Gambar/notepad.png" class="apk" onclick="docs()">
      <span class="img-label" style=";font-family: arial black;color: white;" onclick="docs()" id="docs">Notepad</span>
    </div> 
    <div class="img-container">
      <img src="Gambar/google.png" class="apk" onclick="google()" style="height: 72px;" id="google">
      <span class="img-label" style=";font-family: arial black;color: white;" onclick="google()" id="google">Google</span>
    </div>
  </div> 
  <div id="footer">

    <div id="wifi-container">
      <div id="wifi-icon-div">
        <div style="margin-right: 15px;"><span id="wifi-icon" class="material-symbols-outlined" style="font-size: 18px;">wifi</span></div>
      </div>
    </div>
    <div id="speaker-container">
      <div id="speaker-icon">
        <div id="speaker" style="margin-right: 15px;"><span class="material-symbols-outlined" style="font-size: 20px;">volume_up</span></div>
      </div>
    </div>

    <div id="battery-container">
      <div id="battery-icon">
        <div id="battery-level"></div>
        <img id="charging-icon" src="https://cdn.icon-icons.com/icons2/2644/PNG/512/lightning_fill_icon_159485.png" alt="Charging icon" class="battery-bar">
        <div id="battery-text" class="battery-level" style="margin-right: 15px;">Battery status: <span id="battery-percentage">0%</span></div>
      </div>
    </div>
    <div class="footer">
      <p>
        <span id="date"></span>
      </p>
    </div>
    <div class="dropdown">
      <button class="dropbtn"><span class="material-symbols-outlined" id="btnpower">power_settings_new</span></button>
      <div class="dropdown-content">
        <a href="restart.php">Restart</a>
        <!-- <a href="sleep.html"><span class="material-symbols-outlined">bedtime</span>Sleep</a> -->
        <a href="#" onclick="sleep()">Sleep</a>
        <a href="#" onclick="shutdown()">Shutdown</a>
        <!-- <a href="index.html" onclick="shutdown()">Shutdown</a> -->
      </div>
    </div>
  </div>
</div>
<div id="datepicker" class="calendar">
  <span class="material-symbols-outlined" onclick="closeCalendar()" id="close" style="color: #a99a86;font-weight: bold;margin-left: 4px;margin-top: 4px;">cancel</span>
</div>
<div>
  <div id="calculator" style="display: none;">
    <section>
    <div class="container-calc">
      <div class="calculator">
        <span class="material-symbols-outlined" onclick="closeCalc()" id="close-calc" style="color: #dcdcdc;font-weight: bold;margin-left: 4px;margin-top: 4px;cursor: pointer;">cancel</span>
        <div class="display-calc">
          <div class="display-1">0</div>
          <div class="display-2">0</div>
          <div class="temp-result"></div>
        </div>
        <div class="all_button">
          <div class="button all-clear">C</div>
          <div class="button last-entity-clear"><span class="material-symbols-outlined" style="font-size: 33px;">backspace</span></div>
          <div class="button operation">%</div>
          <div class="button operation">/</div>
          <div class="button number">7</div>
          <div class="button number">8</div>
          <div class="button number">9</div>
          <div class="button operation">x</div>
          <div class="button number">4</div>
          <div class="button number">5</div>
          <div class="button number">6</div>
          <div class="button operation">-</div>
          <div class="button number">1</div>
          <div class="button number">2</div>
          <div class="button number">3</div>
          <div class="button operation">+</div>
          <div class="button btn-0 number">0</div>
          <div class="button number dot">.</div>
          <div class="button equal">=</div>
        </div>
      </div>
    </div>
    </section>
  </div>
</div>
<script>
  //Menampilkan tanggal dan jam
    const d = new Date();
    let yyyy = d.getFullYear();
    let mn = d.getMonth() + 1;
    let dd = d.getDate();
    let hh = d.getHours();
    let mm = d.getMinutes();
    if (mn < 10) mn = '0' + mn;
    if (dd < 10) dd = '0' + dd;
    if (hh < 10) hh = '0' + hh;
    if (mm < 10) mm = '0' + mm;
    let apm = hh < 12 ? 'AM' : 'PM';
    hh = hh % 12;
    let dt = dd + "/" + mn + "/" + yyyy + " " + hh + ":" + mm + " " + apm;
    document.getElementById("date").innerHTML = dt;
    ////////////////

    function cam() {
      setTimeout(function() {
      window.location.href = 'camera.php';
    }, 1000);
    }

    function youtube() {
      setTimeout(function() {
      window.location.href = 'https://www.youtube.com/';
    }, 1000);
    } 

    function google() {
      setTimeout(function() {
      window.location.href = 'https://www.google.com/';
    }, 1000);
    }

    function date() { // show the calendar 
      $("#datepicker").datepicker({
        firstDay: 1
      });
      $("#datepicker").show(); 
    }

    function closeCalendar() { // hide the calendar 
      $("#datepicker").hide(); 
    }

    function closeCalc() { // hide the calculator
      calculator.style.display = "none";
    }

    function calc() {
      const calculator = document.getElementById("calculator");
      if (calculator.style.display === "none" || calculator.style.display === "") {
        // Show the calculator
        const display1El = document.querySelector(".display-1");
        const display2El = document.querySelector(".display-2");
        const tempResultEl = document.querySelector(".temp-result");
        const numbersEl = document.querySelectorAll(".number");
        const operationEl = document.querySelectorAll(".operation");
        const equalEl = document.querySelector(".equal");
        const clearAllEl = document.querySelector(".all-clear");
        const clearLastEl = document.querySelector(".last-entity-clear");
        let dis1Num = "";
        let dis2Num = "";
        let result = null;
        let lastOperation = "";
        let haveDot = false;
        numbersEl.forEach((number) => {
          number.addEventListener("click", (e) => {
            if (e.target.innerText === "." && !haveDot) {
              haveDot = true;
            } else if (e.target.innerText === "." && haveDot) {
              return;
            }
            dis2Num += e.target.innerText;
            display2El.innerText = dis2Num;
          });
        });
        operationEl.forEach((operation) => {
          operation.addEventListener("click", (e) => {
            if (!dis2Num) return;
            haveDot = false;
            const operationName = e.target.innerText;
            if (dis1Num && dis2Num && lastOperation) {
              mathOperation();
            } else {
              result = parseFloat(dis2Num);
            }
            clearVar(operationName);
            lastOperation = operationName;
            console.log(result);
          });
        });
        function clearVar(name = "") {
          dis1Num += dis2Num + " " + name + " ";
          display1El.innerText = dis1Num;
          display2El.innerText = "";
          dis2Num = "";
          tempResultEl.innerText = result;
        }
        function mathOperation() {
          if (lastOperation === "x") {
            result = parseFloat(result) * parseFloat(dis2Num);
          } else if (lastOperation === "+") {
            result = parseFloat(result) + parseFloat(dis2Num);
          } else if (lastOperation === "-") {
            result = parseFloat(result) - parseFloat(dis2Num);
          } else if (lastOperation === "/") {
            result = parseFloat(result) / parseFloat(dis2Num);
          } else if (lastOperation === "%") {
            result = parseFloat(result) % parseFloat(dis2Num);
          }
        }
// Operasi matematika pada kalkulator
equalEl.addEventListener("click", () => {
  if (!dis2Num || !dis1Num) return;
  haveDot = false;
  mathOperation();
  clearVar();
  display2El.innerText = result;
  tempResultEl.innerText = "";
  dis2Num = result;
  dis1Num = "";
});
clearAllEl.addEventListener("click", () => {
  dis1Num = "";
  dis2Num = "";
  display1El.innerText = "";
  display2El.innerText = "";
  result = "";
  tempResultEl.innerText = "";
});
clearLastEl.addEventListener("click", () => {
  display2El.innerText = "";
  dis2Num = "";
});
window.addEventListener("keydown", (e) => {
  if (
    e.key === "0" ||
    e.key === "1" ||
    e.key === "2" ||
    e.key === "3" ||
    e.key === "4" ||
    e.key === "5" ||
    e.key === "6" ||
    e.key === "7" ||
    e.key === "8" ||
    e.key === "9" ||
    e.key === "."
    ) {
    clickButtonEl(e.key);
    // console.log(e.key)
  } else if (e.key === "+" || e.key === "-" || e.key === "/" || e.key === "%") {
    clickOperation(e.key);
  } else if (e.key === "*") {
    clickOperation("x");
    // console.log(e.key)
  } else if (e.key == "Enter" || e.key === "=") {
    clickEqual();
  }
  // console.log(e.key)
});
function clickButtonEl(key) {
  numbersEl.forEach((button) => {
    if (button.innerText === key) {
      button.click();
    }
  });
}
function clickOperation(key) {
  operationEl.forEach((operation) => {
    if (operation.innerText === key) {
      operation.click();
    }
  });
}
function clickEqual() {
  equalEl.click();
}
calculator.style.display = "block";
} else {
    calculator.style.display = "none";
  }
}

// IFRAME GOOGLE DOCUMENT
    //     var docsButton = document.getElementById('docs');
    //     var googleDocsIframe = document.getElementById('google-docs');
    //     docsButton.addEventListener('click', function() {
    //         if (googleDocsIframe.style.display === 'none') {
    //             googleDocsIframe.style.display = 'block';
    //         } else {
    //             googleDocsIframe.style.display = 'none';
    //         }
    //     });

//IFRAME GOOGLE
    // var docsButton = document.getElementById('google');
    // var googleDocsIframe = document.getElementById('google-web');
    // docsButton.addEventListener('click', function() {
    //     if (googleDocsIframe.style.display === 'none') {
    //         googleDocsIframe.style.display = 'block';
    //     } else {
    //         googleDocsIframe.style.display = 'none';
    //     }
    // });


    function shutdown(){
      setTimeout(function() {
        window.location.href = 'logout.php';
      }, 3000);
    }
    function sleep(){
      setTimeout(function() {
        window.location.href = 'loading_sleep.php';
      }, 3000);
    }
    function docs(){
      setTimeout(function() {
        window.location.href = 'notepad.php';
      }, 1000);
    }


    // Fungsi untuk memperbarui tampilan baterai
    function updateBatteryStatus() {
        var batteryLevelElement = document.getElementById('battery-level');
        var batteryPercentageElement = document.getElementById('battery-percentage');
        var chargingIcon = document.getElementById('charging-icon');
        var batteryText = document.getElementById('battery-text');

        navigator.getBattery().then(function (battery) {
            batteryLevelElement.style.width = (battery.level * 100) + '%';
            batteryPercentageElement.innerText = Math.floor(battery.level * 100) + '%';
            chargingIcon.style.display = battery.charging ? 'block' : 'none';
            batteryText.innerText = 'Battery status: ' + Math.floor(battery.level * 100) + '%';
        });
    }
    updateBatteryStatus();
    // Tambahkan event listener untuk memantau perubahan status baterai
    navigator.getBattery().then(function (battery) {
        battery.addEventListener('chargingchange', updateBatteryStatus);
        battery.addEventListener('levelchange', updateBatteryStatus);
    });
    //////////////////////////

    //Fungsi untuk memperbarui tampilan wifi jika terkoneksi dan tidak
        document.addEventListener("DOMContentLoaded", function () {
            const wifiIcon = document.getElementById('wifi-icon');

            function updateWifiStatus() {
                const online = navigator.onLine;

                if (online) {
                    wifiIcon.style.color = 'white';
                    wifiIcon.textContent = 'wifi';
                } else {
                    wifiIcon.style.color = 'white';
                    wifiIcon.textContent = 'language';
                }
            }

            updateWifiStatus();
            setInterval(updateWifiStatus, 1000);
        });
  </script>
</body>