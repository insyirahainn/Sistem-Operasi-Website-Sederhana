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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notepad</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.0/html2pdf.bundle.js"></script> -->
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
  integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>

  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-color: #f0f0f0;
      font-family: 'Arial', sans-serif;
    }

    .notepad-container {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .notepad-tabs {
      display: flex;
      position: sticky;
      top: 0;
      z-index: 1;
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }

    .notepad-tabs-title {
      display: flex;
      position: sticky;
      top: 0;
      z-index: 1;
      padding: 15px;
      border-bottom: 1px solid #ccc;
      background-color: #91a3b0;
      font-weight: bold;
      justify-content: space-between;
      align-items: center;
    }

    .notepad-tab {
      cursor: pointer;
      padding: 5px 10px;
      margin-right: 5px;
      border: 1px solid #ccc;
      border-radius: 5px 5px 0 0;
    }

    .notepad-tab.active {
      background-color: #f0f0f0;
    }

    .add-tab-button {
      cursor: pointer;
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .notepad {
      flex: 1;
      width: 100%;
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    #editor {
      flex: 1;
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: none;
      outline: none;
      font-size: 14px;
      line-height: 1.5;
      resize: none;
      overflow-y: auto;
      font-family: consolas;
      margin-top: 20px;
      margin-bottom: 20px;
      padding-left: 15px;
      padding-right: 15px;
    }

    .notepad-tabs .title {
      font-size: 20px;
      font-weight: bold;
      padding: 10px;
      font-family: arial;
    }

    .btn-txt {
      color: black;
      font-size: 15px;
    }

    .btn-txt span {
      width: 30px;
      padding-top: 5px;
      padding-bottom: 5px;
    }

    button {
      margin-right: 10px;
      cursor: pointer;
    }

    .notepad-tabs-title button {
      margin-right: 15px;
      border-color: #ffffff00;
    }

    .notepad-tabs-title button:hover {
      color: #ffffff;
      border-color: #ffffff00;
      background-color: #232b2b;
      transition: ease-in .5s;
    }

    .notepad button {
      border-radius: 8px;
    }

    .notepad button:hover {
      background-color: #708090;
      color: white;
    }

    #fileNameInput {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      z-index: 2;
      padding-left: 40px;
      padding-right: 30px;
      padding-top: 30px;
      padding-bottom: 30px;
    }

    #fileNameInput input {
      margin-top: 10px;
      height: 25px;
    }

    #fileNameInput button {
      padding: 5px;
    }

  </style>
</head>

<body>

  <div class="notepad-container">
    <div class="notepad-tabs-title" id="notepadTabs">
      <div class="title" style="color: white;font-family: arial black;">NOTEPAD</div>
      <button onclick="closeNotepad()" class="btn-txt"><span class="material-symbols-outlined" onclick="closeNotepad()">close</span></button>
    </div>

    <!-- kolom teks -->
    <div class="notepad">
      <div class="notepad-tabs" id="notepadTabs">
        <button onclick="formatText('bold')" class="btn-txt" style="width: 45px;"><b>B</b></button>
        <button onclick="formatText('underline')" style="text-decoration: underline;width: 45px;" class="btn-txt">U</button>
        <button onclick="formatText('italic')" style="font-family: times new roman;width: 45px;font-size: 18px;" class="btn-txt"><i>I</i></button>
        <button onclick="alignText('justify')" class="btn-txt"><span class="material-symbols-outlined"
          style="text-align: center;">format_align_justify</span></button>
          <button onclick="alignText('right')" class="btn-txt"><span class="material-symbols-outlined">format_align_right</span></button>
          <button onclick="alignText('center')" class="btn-txt"><span class="material-symbols-outlined">format_align_center</span></button>
          <button onclick="alignText('left')" class="btn-txt"><span class="material-symbols-outlined">format_align_left</span></button>
          <button onclick="del()" class="btn-txt"><span class="material-symbols-outlined">delete</span></button>
          <button onclick="openFileNameInput()" class="btn-txt"><span class="material-symbols-outlined">save</span></button>
        </div>
        <div id="editor" contenteditable="true" spellcheck="false">Write text here...</div>
      </div>

      <!-- Custom input div -->
      <div id="fileNameInput">
        <label for="fileName" style="font-size: 15px;">File name</label>
        <button style="border-color: white;padding: 2px;font-size: 5px;margin-left:115px;"><span class="material-symbols-outlined" onclick="closeFileNameInput()">close</span></button><br>
        <!-- <label for="fileName" style="font-size: 15px;">File name</label><br> -->
        <input type="text" id="fileName" placeholder="notepad_text"></input>
        <button onclick="saveWithCustomName()">Save</button>
      </div>
    </div>

    <script type="text/javascript">
      function formatText(command) {
        document.execCommand(command, false, null);
      }

      function alignText(align) {
        document.execCommand('justify' + align, false, null);
      }

      function openFileNameInput() {
        const fileNameInput = document.getElementById('fileNameInput');
        fileNameInput.style.display = 'block';
      }

      function saveWithCustomName() {
        const fileName = document.getElementById('fileName').value;

        if (fileName.trim() !== "") {
          let textToSave = document.getElementById('editor').innerHTML;
          let textTitle = fileName;

          html2pdf(textToSave, {
            margin: 10,
            filename: `${textTitle}.pdf`,
            image: { type: "jpeg", quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
          });

          const fileNameInput = document.getElementById('fileNameInput');
          fileNameInput.style.display = 'none';
          setTimeout(function () {
            window.location.href = 'beranda.php';
          }, 2000);
        } else {
          alert("Please enter a valid file name.");
        }
      }

      function del() {
        const textEditor = document.getElementById('editor');
        textEditor.innerHTML = '';
      // alert('Teks berhasil dihapus.');
    }

    function closeNotepad() {
      setTimeout(function () {
        window.location.href = 'beranda.php';
      }, 2000);
    }

    function closeFileNameInput(){
      const fileNameInput = document.getElementById('fileNameInput');
      fileNameInput.style.display = 'none';
    }
  </script>

</body>

</html>
