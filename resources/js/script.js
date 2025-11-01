const menu = document.querySelector(".menu");
const mobileMenu = document.querySelector(".toggle-products");
const product = document.getElementById("products");

const keranjangBtn = document.querySelector(".keranjang"); // Ganti dengan ID ikon keranjang Anda
const keranjangContainer = document.getElementById("keranjang-container");
const tutupBtn = keranjangContainer.querySelector("svg"); // Mengambil SVG ikon silang

keranjangBtn.addEventListener("click", function () {
    keranjangContainer.classList.remove("hidden");
    setTimeout(() => {
        keranjangContainer.classList.remove("translate-x-full");
    }, 50);
});

tutupBtn.addEventListener("click", function () {
    keranjangContainer.classList.add("translate-x-full");
    setTimeout(() => {
        keranjangContainer.classList.add("hidden");
    }, 300);
});

const about = document.querySelector(".about");
const aboutView = document.querySelector(".aboutView");


window.addEventListener("scroll", () => {
    const posisi = about.getBoundingClientRect().top;
    const tinggiLayar = window.innerHeight;

    
 

    if (posisi < tinggiLayar - 200) {
        aboutView.classList.remove("hidden");
        setTimeout(() => {
            aboutView.classList.remove("translate-y-full");
            aboutView.classList.add("translate-y-0");
        }, 100);
    }

});

// document.querySelectorAll(".tombol").forEach((tumb) => {
//     tumb.addEventListener("click", function (e) {
//         const tumbs = document.querySelectorAll(".tombol");
//         tumbs.forEach((tumm) => {
//             tumm.classList.remove("bg-gray-600", "text-white");
//         });

//         e.target.classList.add(
//             "focus:bg-gray-600",
//             "bg-gray-600",
//             "text-white"
//         );
//     });
// });

mobileMenu.addEventListener("click", function () {
    if (product.hasAttribute("hidden")) {
        product.removeAttribute("hidden"); // tampilkan
    } else {
        product.setAttribute("hidden", ""); // sembunyikan
    }
});

const formKeranjang = document.getElementById("formKeranjang");
const savekeranjang = document.getElementById("keranjang");
let jumlahElement = document.getElementById("jumlah");
let jumlah = parseInt(jumlahElement.innerHTML) || 0;
document.querySelector(".tambah").addEventListener("click", function () {
    jumlah += 1;

    jumlahElement.innerHTML = jumlah;

    const kode_product = savekeranjang.getAttribute("data-kode");

    formKeranjang.innerHTML += `
    <input type="hidden" value=${jumlah} name="jumlah">
    <input type="hidden" value=${kode_product} name="kode_product">`;
});

document.querySelector(".kurangi").addEventListener("click", function () {
    if (jumlah == 0) {
        return;
    } else {
        jumlah -= 1;
    }

    jumlahElement.innerHTML = jumlah;
});

document.addEventListener("DOMContentLoaded", () => {
    // kode kamu di sini
});

savekeranjang.addEventListener("click", function (event) {
    if (jumlah == 0) {
        alert("Masukkan jumlah terlebih dahulu");
        event.preventDefault();
    }
    if (jumlah !== 0) {
    }
});
