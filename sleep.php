<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SHERA OS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <style type="text/css">
    * {
      padding: 0px;
      margin: 0px;
    }

    body {
      background-image: url('Gambar/background5.jpeg'); 
      background-size: cover; 
      /* Biar gambar tidak diulang */
      background-repeat: no-repeat; 
      /* Pusatkan gambar */
      background-position: center center; 
      /* Tetapkan warna latar belakang jika gambar tidak dimuat atau transparan */
      background-color: #ffffff80;
      /* Sesuaikan tinggi minimum */
      min-height: 100vh;
      /* Menghapus margin dan padding default */
      margin: 0;
      padding: 0;
    }

    #btnpower{
      color: #000000;
      padding: 8px;
      padding-left: 25px;
      padding-right: 25px;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      top: 300px;
      position: relative;
      border-radius: 10px;
      border-color: #ffffff00;
      background-color: #d3d3d3;
      font-family: arial black;
    }
    #btnpower:hover{
      color: #ffffff;
      border-color: #ffffff00;
      background-color: #232b2b;
      /*background-color: #bebebe ;*/
      transition: ease-in .5s;
    }
    h1 {
      font-family: arial black;
      position: relative;
      font-size: 60px;
      top: 250px;
      color: #ffffff50;
    }


  </style>
</head>

<body>
  <center>
    <h1>LENOVO</h1>
    <button id="btnpower" onclick="login()">
      LOGIN
    </button>

  </center>
  <script>
        function shutdown(){
          setTimeout(function() {
      window.location.href = 'beranda.';
    }, 4000);
    }
  </script>
</body>

