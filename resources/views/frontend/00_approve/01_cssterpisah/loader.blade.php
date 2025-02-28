    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

        .loader p {
            font-size: 24px;
            font-weight: 600;
            color: #004b8d;
            animation: fadeIn 2s infinite alternate;
        }


        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes fadeIn {
            0% { opacity: 0.5; }
            100% { opacity: 1; }
        }
    </style>

<div class="loader">
        <div class="spinner"></div>
        <p>Dinas PUPR Kab Blora</p>
    </div>

<div id="pre-loader">
    <div id="loader-logo"></div><!-- loader-logo -->
    <div id="loader-circle"></div><!-- loader-circle -->
    <div class="loader-section section-left"></div><!-- loader-section -->
    <div class="loader-section section-right"></div><!-- loader-section -->
</div><!-- pre-loader -->
