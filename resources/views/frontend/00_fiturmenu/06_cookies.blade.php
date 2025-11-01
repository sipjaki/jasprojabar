{{-- ===== COOKIES CONSENT BANNER ===== --}}
<div id="cookieBanner"
     style="
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #ffffff;
        box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
        padding: 15px 20px;
        display: none;
        z-index: 9999;
        font-family: 'Poppins', sans-serif;
    ">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start" style="gap: 10px;">
        <p class="mb-2 mb-md-0" style="color: #333; font-size: 15px;">
            🍪 Kami menggunakan cookies untuk memastikan Anda mendapatkan pengalaman terbaik di website ini.
        </p>
        <button id="acceptCookiesBtn"
                class="btn btn-primary px-4 py-2"
                style="border-radius: 6px; font-weight: 500; transition: all 0.3s;">
            Saya Setuju
        </button>
    </div>
</div>

<style>
/* Hover putih dengan teks biru */
#acceptCookiesBtn:hover {
    background-color: #ffffff !important;
    color: #0d6efd !important; /* biru Bootstrap */
    border: 1px solid #0d6efd !important;
}
</style>

{{-- ===== SCRIPT COOKIES ===== --}}
<script>
function setCookie(name, value, days = 30) {
    const d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = `${name}=${value};expires=${d.toUTCString()};path=/`;
}

function getCookie(name) {
    const cname = name + "=";
    const decoded = decodeURIComponent(document.cookie);
    const ca = decoded.split(';');
    for (let c of ca) {
        c = c.trim();
        if (c.indexOf(cname) === 0) return c.substring(cname.length, c.length);
    }
    return "";
}

document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("cookieBanner");
    const btn = document.getElementById("acceptCookiesBtn");

    // Munculkan banner kalau cookie belum disetujui
    if (getCookie("acceptCookies") !== "true") {
        banner.style.display = "block";
    }

    // Saat tombol diklik
    btn.addEventListener("click", () => {
        setCookie("acceptCookies", "true", 30);
        banner.style.transition = "all 0.4s ease";
        banner.style.transform = "translateY(100%)";
        banner.style.opacity = "0";
        setTimeout(() => banner.style.display = "none", 400);
    });
});
</script>
