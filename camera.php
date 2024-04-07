<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background-color: #232b2b;
        }

        #cameraContainer {
            position: relative;
        }

        #videoPlayer {
            width: 100%;
            max-width: 900px;
            height: 630px;
            border: 2px solid #fff;
            border-radius: 10px;
            background-color: #00000090;
            border: none;
        }

        img.cam {
            width: 50px;
            height: 50px;
            cursor: pointer;
        }

        img.close {
            width: 35px;
            height: 35px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="cameraContainer">
        <img src="Gambar/close.png" onclick="exitCamera()" class="close"><br>
        <video id="videoPlayer" autoplay></video><br>
        <center>
            <!-- <img src="Gambar/camgaleri.png" onclick="downloadImage()" class="cam"> -->
            <img src="Gambar/camphoto.png" onclick="takePhotoCamera()" class="cam" style="margin-left: 17px;margin-right: 10px;" id="photoImg">
            <img src="Gambar/camvideo.png" onclick="takePhotoVideo()" class="cam">
        </center>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Panggil fungsi takePhotoCamera() setelah DOM selesai dimuat
            takePhotoCamera();
        });

        let stream;
        let canvas = document.createElement('canvas');
        let context = canvas.getContext('2d');
        let capturedImage = new Image();
        let cameraAccessRequested = false; // Flag to track camera access

        async function takePhotoCamera() {
            const video = document.getElementById("videoPlayer");
            const photoImg = document.getElementById("photoImg");

            try {
                // Check if camera access has already been requested
                if (!cameraAccessRequested) {
                    // Dapatkan stream dari kamera
                    stream = await navigator.mediaDevices.getUserMedia({ video: true });
                    cameraAccessRequested = true; // Set the flag to true
                }

                // Atur stream sebagai objek sumber video
                video.srcObject = stream;

                // Menunggu sejenak untuk memastikan video telah dimuat sepenuhnya
                await new Promise(resolve => (video.onloadedmetadata = resolve));

                // Atur dimensi canvas sesuai dengan dimensi video
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;

                // Gambar video ke dalam canvas
                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                // Set objek gambar (capturedImage) sebagai data URL dari canvas
                capturedImage.src = canvas.toDataURL('image/png');

                // Panggil fungsi downloadImage() jika elemen photoImg ada
                if (photoImg) {
                    photoImg.addEventListener("click", downloadImage);
                }

            } catch (error) {
                console.error("Error accessing camera", error);
            }
        }

        function exitCamera() {
            if (stream) {
                // Hentikan semua track pada objek stream
                const tracks = stream.getTracks();
                tracks.forEach(track => track.stop());
            }

            setTimeout(function () {
                // Setelah beberapa detik, alihkan ke beranda.php
                window.location.href = 'beranda.php';
            }, 1000);
        }

        function downloadImage() {
            // Buat elemen link
            const downloadLink = document.createElement('a');
            // Atur atribut href ke URL data dari gambar yang diambil
            downloadLink.href = capturedImage.src;
            // Atur atribut download untuk menentukan nama file
            downloadLink.download = 'snapshot.png';
            // Simulasikan klik pada link untuk memicu pengunduhan
            downloadLink.click();
        }
    </script>

</body>

</html>
