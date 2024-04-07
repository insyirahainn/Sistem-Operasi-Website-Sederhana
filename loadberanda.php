<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Loading..</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lora:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
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
      background-position: center; 
      /* Tetapkan warna latar belakang jika gambar tidak dimuat atau transparan */
      /*background-color: #ffffff80;*/
      /* Sesuaikan tinggi minimum */
      min-height: 100vh;
      /* Menghapus margin dan padding default */
      margin: 0;
      padding: 0;
      backdrop-filter: blur(3px);
    }

    #btnpower{
      color: #000000;
      padding: 8px;
      padding-left: 30px;
      padding-right: 30px;
      cursor: pointer;
      font-size: 12px;
      font-weight: bold;
      top: 260px;
      position: relative;
      border-radius: 7px;
      border-color: #ffffff00;
      background-color: #d3d3d3;
      font-family: 'Lora', sans-serif;
    }
    #btnpower:hover{
      color: #ffffff;
      border-color: #ffffff00;
      background-color: #232b2b;
      /*background-color: #bebebe ;*/
      transition: ease-in .5s;
    }
    h1 {
      font-family: sans-serif;
      position: relative;
      font-size: 25px;
      top: 225px;
      color: #ffffff;
      font-weight: bold;
    }

    img {
      width: 170px;
      height: 170px;
      position: relative;
      top: 205px;
      color: #ffffff50;
    }

  </style>
</head>

<body>
  <center>
    <img src="gambar/profile.png">
    <h1>Selamat Datang</h1>

  </center>
  <script>
      setTimeout(function() {
        window.location.href = 'beranda.php';
      }, 3000);
  </script>
</body>

