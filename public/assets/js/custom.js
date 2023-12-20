
  (function ($) {
  
  "use strict";

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });
    var navbarToggler = document.querySelector('.navbar-toggler');
    var navbarCollapse = document.querySelector('.navbar-collapse');
    var navbarTogglerIcon = navbarToggler.querySelector('.navbar-toggler-icon');

    navbarToggler.addEventListener('click', function () {
        if (navbarCollapse.classList.contains('show')) {
            navbarCollapse.classList.remove('show');
            navbarToggler.setAttribute('aria-expanded', 'false');
            navbarTogglerIcon.classList.add('collapsed'); // Menambahkan class 'collapsed' ke ikon
        } else {
            navbarCollapse.classList.add('show');
            navbarToggler.setAttribute('aria-expanded', 'true');
            navbarTogglerIcon.classList.remove('collapsed'); // Menghapus class 'collapsed' dari ikon
        }
    });
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height();
  
      scrollToDiv(elWrapped,header_height);
      return false;
  
      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;
  
        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });
  
  })(window.jQuery);



  //JAVA SCRIPT SECTION PAKET LAYANAN SECTION 5
  
  // Mendapatkan elemen circle untuk layanan katering
  const cateringCircle = document.getElementById('catering');
  // Mendapatkan elemen circle untuk layanan kue ulang tahun
  const birthdayCakeCircle = document.getElementById('birthday-cake');
  // Mendapatkan elemen circle untuk layanan bakery
  const bakeryCircle = document.getElementById('bakery');
  // Mendapatkan elemen circle untuk layanan hampers
  const hampersCircle = document.getElementById('hampers');
  // Mendapatkan elemen circle untuk layanan frozen food
  const frozenFoodCircle = document.getElementById('frozen-food');

  // Mendapatkan elemen popup
  const popup = document.querySelector('.popup');

  // Mendapatkan elemen gambar di popup
  const popupImage = document.getElementById('popup-image-catering');
  // Mendapatkan elemen judul di popup
  const popupTitle = document.getElementById('popup-title-catering');
  // Mendapatkan elemen deskripsi di popup
  const popupDescription = document.getElementById('popup-description-catering');
  // Mendapatkan elemen tombol tutup popup
  const popupClose = document.getElementById('popup-close-catering');

  // Function untuk menampilkan popup dengan konten yang sesuai
  function openPopup(title, description, imageSrc) {
    popupTitle.textContent = title;
    popupDescription.textContent = description;
    popupImage.src = imageSrc;
    popupImage.classList.add('popup-image'); // Tambahkan kelas popup-image
    popup.style.display = 'flex';
}

  // Menambahkan event listener untuk circle layanan katering
  cateringCircle.addEventListener('click', () => {
    openPopup(
        'Layanan Katering',
        'Keamanan dan kualitas makanan adalah prioritas utama kami. Kami menjaga citra positif bisnis catering Anda.',
        'assets/images/tumpeng-mini.jpg'
    );
});


  // Menambahkan event listener untuk circle layanan kue ulang tahun
  birthdayCakeCircle.addEventListener('click', () => {
      openPopup(
          '',
          'Jasa kirim kami mengutamakan keamanan makanan. Kue ulang tahun Anda akan dikemas dengan hati-hati dan aman untuk dikonsumsi.',
          'assets/images/kue-ulangtahun.jpg'
      );
  });

  // Menambahkan event listener untuk circle layanan bakery
  bakeryCircle.addEventListener('click', () => {
      openPopup(
          '',
          'Jasa kirim kami memastikan roti tiba dengan cepat untuk meminimalkan risiko kontaminasi.',
          'assets/images/roti.jpg'
      );
  });

  // Menambahkan event listener untuk circle layanan hampers
  hampersCircle.addEventListener('click', () => {
      openPopup(
          '',
          'Jasa kirim kami memastikan pengiriman hampers dilakukan dengan hati-hati dan tanpa risiko kerusakan.',
          'assets/images/hampers.jpg'
      );
  });

  // Menambahkan event listener untuk circle layanan frozen food
  frozenFoodCircle.addEventListener('click', () => {
      openPopup(
          '',
          'Jasa kirim kami memastikan pengiriman dilakukan dengan hati-hati untuk menjaga makanan tetap beku dan aman.',
          'assets/images/frozen-food.jpg'
      );
  });

  // Event listener untuk tombol tutup popup
  popupClose.addEventListener('click', () => {
      popup.style.display = 'none';
  });


  

//JAVA SCRIPT DAFTAR SEKARANG SECTION 7//

  function generateWhatsAppLinkAndOpen() {
    var form = document.getElementById("whatsappForm");
    var name = form.name.value;
    var city = form.city.value;
    var phoneNumber = form.phoneNumber.value;

    // Menghilangkan karakter-karakter selain angka untuk nomor telepon
    var formattedPhoneNumber = phoneNumber.replace(/\D/g, "");

    // Membuat tautan wa.me untuk membuka percakapan WhatsApp dengan pesan
    var whatsappLink = "https://wa.me/6285959868653?text=Halo, saya " + name + " dari " + city +
        ". Saya ingin kirim barang.";

    // Mengarahkan pengguna ke tautan WhatsApp
    window.location.href = whatsappLink;
}

function generateWhatsAppLinkAndOpen1() {
    var form = document.getElementById("whatsappForm");
    var name = form.name.value;
    var city = form.city.value;
    var phoneNumber = form.phoneNumber.value;

    // Menghilangkan karakter-karakter selain angka untuk nomor telepon
    var formattedPhoneNumber = phoneNumber.replace(/\D/g, "");

    // Membuat tautan wa.me untuk membuka percakapan WhatsApp dengan pesan
    var whatsappLink = "https://wa.me/6287775218655?text=Halo, saya " + name + " dari " + city +
        ". Saya ingin mendaftar menjadi member Tenang delivery.";

    // Mengarahkan pengguna ke tautan WhatsApp
    window.location.href = whatsappLink;
}


