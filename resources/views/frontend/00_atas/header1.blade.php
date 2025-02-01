{{-- <header class="top">
    <div class="container"> --}}
        {{-- <p>081321455855</p> --}}
        {{-- <div id="clock-container" style="
        display: flex;
        justify-content: center;
        align-items: center;
        height: 6vh;
        font-family: Arial, sans-serif;"> 
        <p id="jam" style="
            font-size: 14px;
            background: #000000;
            color: #fff;
            padding: 2px 10px;
            border-radius: 15px;
            text-align: center;"></p> --}}
                 {{-- <p style="color: black"></p> --}}
                 {{-- <i class="fas fa-phone mr-2"></i><a href="https://wa.me/6281321455855" style="color: black">+6281 321 455 855</a></p>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const day = now.getDate().toString().padStart(2, '0');
            const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
            const year = now.getFullYear();

            const timeString = `${hours}:${minutes}:${seconds}`;
            const dateString = `${day}/${month}/${year}`;
            document.getElementById('jam').textContent = `${dateString} ${timeString}`;
        }

        setInterval(updateClock, 1000); // Update every second
        updateClock(); // Initial call to set the time immediately
    </script> --}}
     {{-- <p>support@Construct.com</p> --}}
     {{-- <p>Senin-Jumat 9:00-16:00</p> --}}
     {{-- <style>
        .marquee-container {
            width: 250px;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            border: 1px solid #000;
            width: 375px;
            padding: 5px 10px;
            margin-top: 2.5px;
            margin-bottom: 2px;
            border-radius: 20px;
            background: #000000;
            
        }
        .marquee {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
    </style>
     <div class="marquee-container" style="margin-left: 150px;">
        <div class="marquee" style="color: white">Selamat Datang ! di Web Resmi Mas Jaki Dinas Pekerjaan Umum & Penataan Ruang Blora, Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Blora Provinsi Jawa Tengah</div>
    </div>
        <div class="social">
            <a href="/" title=""><i class="fas fa-envelope"></i></a>
            <a href="/" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="/" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="/" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="/" title="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="/" title="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="/login">
                <i class="fa-solid fa-sign-in-alt" ></i>
            </a>

        </div>
    </div>
</header> --}}


<header class="top">
    <div class="container">
        <!-- Jam dan tanggal -->
        <div id="clock-container">
            <p id="jam"></p>
            <a href="https://wa.me/628132145855" class="phone-link">+6281 321 455 855</a>
        </div>

        <!-- Marquee -->
        <div class="marquee-container">
            <div class="marquee">Selamat Datang ! di Web Resmi Mas Jaki Dinas Pekerjaan Umum & Penataan Ruang Blora, Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Blora Provinsi Jawa Tengah</div>
        </div>

        <!-- Ikon sosial media -->
        <div class="social">
            <a href="/" class="social-icon"><i class="fas fa-envelope"></i></a>
            <a href="/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="/" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="/" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="/" class="social-icon"><i class="fab fa-tiktok"></i></a>
            <a href="/" class="social-icon"><i class="fab fa-youtube"></i></a>
            <a href="/login" class="social-icon"><i class="fa-solid fa-sign-in-alt"></i></a>
        </div>
    </div>
</header>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Jam dan tanggal */
    #clock-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        background-color: #000;
        color: #fff;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 16px;
    }

    #jam {
        font-size: 14px;
    }

    .phone-link {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .phone-link i {
        margin-right: 8px;
    }

    /* Marquee */
    .marquee-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        max-width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .marquee {
        display: inline-block;
        animation: marquee 20s linear infinite;
        white-space: nowrap;
        font-size: 14px;
        color: #fff;
        background: #000;
        padding: 10px;
        border-radius: 15px;
    }

    @keyframes marquee {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(-100%);
        }
    }

    /* Ikon Sosial Media */
    .social {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-top: 20px;
    }

    .social-icon {
        font-size: 24px;
        color: #333;
        transition: color 0.3s ease;
    }

    .social-icon:hover {
        color: #0073e6;
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        #clock-container {
            flex-direction: column;
            font-size: 12px;
        }

        .marquee {
            font-size: 12px;
        }

        .social {
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .social-icon {
            font-size: 20px;
        }
    }

    /* Pemberian jarak pada margin di atas dan bawah marquee */
    .marquee-container {
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>

<script>
    function updateClock() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const day = now.getDate().toString().padStart(2, '0');
        const month = (now.getMonth() + 1).toString().padStart(2, '0');
        const year = now.getFullYear();

        const timeString = `${hours}:${minutes}:${seconds}`;
        const dateString = `${day}/${month}/${year}`;
        document.getElementById('jam').textContent = `${dateString} ${timeString}`;
    }

    setInterval(updateClock, 1000); // Update every second
    updateClock(); // Initial call to set the time immediately
</script>

