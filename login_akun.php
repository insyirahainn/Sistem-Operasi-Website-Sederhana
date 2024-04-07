<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
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
      padding-left: 25px;
      padding-right: 25px;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      top: 260px;
      position: relative;
      border-radius: 10px;
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
      font-size: 30px;
      top: 225px;
      color: #ffffff;
    }

    img {
      width: 170px;
      height: 170px;
      position: relative;
      top: 205px;
      color: #ffffff50;
    }
    input.inp-pw {
      width: 215px;
      height: 30px;
      position: relative;
      top: 230px;
      color: #000000;
      background-color: #f2f3f4;
      font-size: 15px;
      padding: 5px 5px;
      border-color: black;
      padding-left: 10px;
      padding-right: 28px;
    }
    .inp-login {

    }
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24;
      color: black;
      position: relative;
      top: 188px;
      cursor: pointer;
      margin-left: 221px;
      font-size: 20px;
      border-color: none;
      border: none;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-right: 5px;
      padding-left: 5px;
      background-color: #f2f3f4;
    }
    .material-symbols-outlined:hover {
      background-color: #00000010;
    }

  </style>
</head>

<body>
  <center>
    <img src="gambar/profile.png">
    <h1>LENOVO</h1>

    <form method="post" action="proses_login.php" class="inp-login" onsubmit="return validateForm()">
      <input type="password" name="password" class="inp-pw" id="password" placeholder="PIN" required=""><br>
      <input type="submit" class="material-symbols-outlined" name="login" value="Login">
    </form>

<!--     <form class="inp-login">
      <input type="password" name="password" class="inp-pw" id="password" placeholder="PIN" required=""><br>
      <input type="submit" class="material-symbols-outlined" name="login" value="Login">
    </form> -->


  </center>
  <script>
    function validateForm() {
      var password = document.getElementById("password").value;
      if (password == "" ) {
        alert("Data tidak boleh kosong");
        return false;
      }
    }
  </script>
</body>

