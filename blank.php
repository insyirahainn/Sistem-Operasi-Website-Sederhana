<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHERA OS</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #000000;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    #content {
      height: 100%;
      width: 100%;
      text-align: center;
    }

    #content:hover {
      cursor: pointer;
      background-color: #000000;
    }
  </style>
</head>

<body>
  <div id="content" onclick="redirectToOtherPage()">
    <h1 style="top: 50%;display: flex;position: relative;text-align: center;"></h1>
  </div>

  <script>
    function redirectToOtherPage() {
      // session_start(); // memulai session
      // session_destroy(); // menghapus semua data session
      window.location.href = 'login.php';
    }
</script>
</body>

</html>
