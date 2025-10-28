const container = document.querySelector(".container");
const keranjang = document.querySelector(".keranjang");
const menu = document.querySelector(".menu");
const mobileMenu = document.querySelector(".toggle-products");
const product = document.getElementById("products");
const icon = document.querySelector(".icon-silang");
icon.addEventListener("click", function () {
    container.classList.toggle("togle");
    keranjang.classList.remove("outline-2", "outline-indigo-500");
});

keranjang.addEventListener("click", function () {
    keranjang.classList.add("outline-2", "outline-indigo-500");
    container.classList.add("togle");
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


document.addEventListener('DOMContentLoaded', () => {
    // kode kamu di sini
});


savekeranjang.addEventListener("click", function (event) {
    
    if (jumlah == 0) {
        alert("Masukkan jumlah terlebih dahulu");
        event.preventDefault();
    
    } 
    if(jumlah !== 0){
      



    }
    
});
