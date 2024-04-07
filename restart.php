<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SHERA OS</title>

  <style type="text/css">
  	* {
  		padding: 0px;
  		margin: 0px;
  	}
	body {
    display: flex;
    justify-content: center;
    background: #000000;
}
img {
  display: flex;
  position: relative;
  width: 230px;
  height: 230px;
  top: 250px;
}

.container-restart {
  display: flex;
  flex-direction: column;

}

  </style>
</head>
<body>
  <center>
    <div class="container-restart">
        <div><img src="Gambar/loadingrestart.gif"></div><br>
        <div><p style="color: white;font-size: 18px;font-family: sans-serif;font-weight: bold; top: 180px; position: relative;">Restarting</p></div>
    </div>
  </center>
<script>
    setTimeout(function() {
      window.location.href = 'blank-restart.php';
    }, 5000); 
  
</script>
</body>
</html>