    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .loader {
            text-align: center;
            position: relative;
        }

        .loader p {
            font-size: 24px;
            font-weight: 600;
            color: #004b8d;
            animation: fadeIn 2s infinite alternate;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(0, 75, 141, 0.3);
            border-top-color: #004b8d;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 10px auto;
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
