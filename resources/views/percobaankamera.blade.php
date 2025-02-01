<!-- resources/views/camera.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambil Foto</title>
</head>
<body>

    <button id="openCameraBtn">Buka Kamera</button>
    <video id="video" width="100%" height="auto" autoplay></video>
    <button id="captureBtn">Ambil Foto</button>
    <canvas id="canvas" style="display:none;"></canvas>
    <img id="photo" alt="Hasil Foto" style="display:none;"/>

    <script>
        // Mendapatkan elemen dari DOM
        const videoElement = document.getElementById('video');
        const captureButton = document.getElementById('captureBtn');
        const canvasElement = document.getElementById('canvas');
        const photoElement = document.getElementById('photo');

        // Fungsi untuk membuka kamera depan
        async function openCamera() {
            const constraints = {
                video: {
                    facingMode: 'user' // Kamera depan
                }
            };

            try {
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                videoElement.srcObject = stream;
            } catch (error) {
                console.error('Error accessing camera: ', error);
            }
        }

        // Fungsi untuk menangkap foto
        function capturePhoto() {
            const context = canvasElement.getContext('2d');
            canvasElement.width = videoElement.videoWidth;
            canvasElement.height = videoElement.videoHeight;

            // Menyalin gambar dari video ke canvas
            context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
            
            // Menyimpan gambar dari canvas sebagai data URL
            const photoDataUrl = canvasElement.toDataURL('image/png');
            photoElement.src = photoDataUrl;
            photoElement.style.display = 'block';
        }

        // Event listener untuk tombol membuka kamera
        document.getElementById('openCameraBtn').addEventListener('click', openCamera);

        // Event listener untuk tombol mengambil foto
        captureButton.addEventListener('click', capturePhoto);
    </script>

</body>
</html>
