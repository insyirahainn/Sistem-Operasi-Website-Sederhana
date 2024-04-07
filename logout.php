<?php
session_start(); // memulai session
session_destroy(); // menghapus semua data session
echo "<script>window.location='shutdown.php'</script>";
?>