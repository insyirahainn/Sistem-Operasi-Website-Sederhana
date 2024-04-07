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

.container-shutdown {
  display: flex;
  flex-direction: column;

}

  </style>
</head>
<body id="body">
  <center>
    <div class="container-shutdown">
        <div><img src="Gambar/loadingrestart.gif"></div><br>
        <div><p style="color: white;font-size: 18px;font-family: sans-serif;font-weight: bold; top: 180px; position: relative;">Shutdown</p></div>
    </div>
  </center>
<script>
/*          var element = document.getElementById("body");
            element.style.backgroundColor='#000000';*/

   setTimeout(function() {
        window.location.href = 'index.php';
    }, 5000); 
</script>
</body>
</html>