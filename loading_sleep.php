<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LOADING..</title>

  <style type="text/css">
    * {
        padding: 0px;
        margin: 0px;
    }
    body {
    display: flex;
    justify-content: center;
    /*background: #00000020;*/
    background-color: #000000;
}
img {
  display: flex;
  position: relative;
  width: 70px;
  height: 70px;
  top: 300px;
}

  </style>
</head>
<body>
  <center>


    <img src="Gambar/loading.gif">

  </center>
<script>
    setTimeout(function() {
      // Setelah beberapa detik, alihkan ke beranda.php
      window.location.href = 'blank.php';
    }, 4000);
  
</script>
</body>
</html>