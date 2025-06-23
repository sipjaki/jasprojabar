<style>
.button-abgblora {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif; /* Tambah font Poppins */
    font-weight: 600; /* Tebal, bisa diganti 700 jika lebih tebal lagi */
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s;
    background: linear-gradient(120deg, navy, white, navy);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

    .button-abgblora:hover {
        color: black;
        background: white;
    }

   .button-fungsi {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease-in-out;
    background: linear-gradient(120deg, #0606e7, #c5b1b1, #0606e7);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.button-fungsi:hover {
    color: black;
    background: white;
    background-size: initial;
    animation: none;
    border: 1px solid #0606e7;
    transform: translateY(-2px);
}

/* Gradient animation */
@keyframes gradientMove {
    0% {
        background-position: 0% center;
    }
    100% {
        background-position: 200% center;
    }
}


</style>


<style>
    .button-belakang {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #b0e7b0, white, #b0e7b0);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-belakang:hover {
        color: black;
        background: white;
    }

    .button-kembali {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #6c757d, white, #6c757d);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-kembali:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
 .button-validasinew {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #4b5563, #9ca3af, #4b5563);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

@keyframes gradientMove {
    0% {
        background-position: 0% center;
    }
    100% {
        background-position: 200% center;
    }
}

.button-validasinew:hover {
    background-color: white !important;
    color: #00ccff !important;
    background-image: none !important;
}

   .button-lolos {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight: bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #28a745, #d4edda, #28a745); /* hijau modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-lolos:hover {
    color: black;
    background: white;
    animation: none; /* supaya animasi background berhenti saat hover */
}

    .button-create {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #28a745, #d4edda, #28a745); /* hijau modern */
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-create:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
    .button-dikembalikan {
        border: none;
        padding: 8px 20px;
        border-radius: 15px;
        font-size: 14px;
        color: white;
        font-weight:bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, red, white, red);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-dikembalikan:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>

<style>
    .button-pilih {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s, background-color 0.3s, border 0.3s;
        background: linear-gradient(120deg, rgb(2, 88, 248), silver, whitesmoke);
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
    }

    .button-pilih:hover {
        color: midnightblue;
        background: white;
        border: 1px solid midnightblue;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
    /* BUTTON PILIH (navy-silver) */
    /* BUTTON SUDAH (green elegant) */
    .button-sudah {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        font-weight:bold;
        background: linear-gradient(120deg, #006400, #32CD32, #90EE90); /* darkgreen to limegreen */
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
        text-decoration: none;
        transition: background 0.3s, color 0.3s, border 0.3s;
        display: flex;
        align-items: center;
    }

    .button-sudah:hover {
        color: #006400;
        background: white;
        border: 1px solid #006400;
    }

    /* BUTTON BELUM (red elegant) */
    .button-belum {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        font-weight:bold;
        background: linear-gradient(120deg, #8B0000, #FF6347, #FFA07A); /* darkred to light salmon */
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
        text-decoration: none;
        transition: background 0.3s, color 0.3s, border 0.3s;
        display: flex;
        align-items: center;
    }

    .button-belum:hover {
        color: #8B0000;
        background: white;
        border: 1px solid #8B0000;
    }

    /* Animasi gradasi */
    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }


    .button-download {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight:bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #001f4d, #004080, #001f4d); /* navy modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-download:hover {
    color: black;          /* tulisan jadi hitam */
    background: white;     /* background jadi putih */
}

.button-statistika {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight:bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #dbba00, #ffffff, #dbba00); /* navy modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-statistika:hover {
    color: black;          /* tulisan jadi hitam */
    background: white;     /* background jadi putih */
}


/* Jika animasi gradientMove belum ada, tambahkan contoh animasinya: */
@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 200% 50%;
    }
}

</style>
