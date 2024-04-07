<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LENOVO</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <style type="text/css">
  	* {
  		padding: 0px;
  		margin: 0px;
  	}
/*   body {
    display: flex;
    justify-content: center;
    background: #F0F2F0;  
    background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);  
    background: linear-gradient(to right, #000C40, #F0F2F0); 
  }*/

    body {
      /* Sesuaikan URL dengan lokasi gambar Anda */
      background-image: url('Gambar/bgwindow.jpg'); 
      /* Biar gambar menutupi seluruh layar */
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
    color: white;
    cursor: pointer;
    font-size: 100px;
    font-weight: bold;
    top: 500px;
    position: relative;
  }
  #btnpower:hover{
    color: #ffffff95;
  }
/*  h1 {
    font-family: arial black;
    position: relative;
    font-size: 70px;
    top: 200px;
  }*/
</style>
</head>
<body>
  <center>
    <span class="material-symbols-outlined" id="btnpower" onclick="hidup()">
      power_settings_new
    </span>

  </center>
  <script>
    function hidup(){
      window.location.href = 'loading.php';
    }
  </script>
</body>
</html>