function fadeInElement() {
    var element = document.querySelector(".beranda-left");
    var elementPosition = element.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3; // Sesuaikan dengan posisi tampilan yang diinginkan

    if (elementPosition < screenPosition) {
        element.classList.add("show");
    }
}

function throttle(func, delay) {
    var timer = null;
    return function () {
        var context = this,
            args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            func.apply(context, args);
        }, delay);
    };
}

function checkFadeIn() {
    fadeInElement();
}

window.addEventListener("scroll", throttle(checkFadeIn, 200)); // Menggunakan throttle untuk membatasi frekuensi pemanggilan
window.addEventListener("resize", throttle(checkFadeIn, 200));

// Panggil fungsi fadeInElement() untuk memeriksa elemen saat halaman dimuat
fadeInElement();
