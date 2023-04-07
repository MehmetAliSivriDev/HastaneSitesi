
function validate(){
  var ad= document.getElementById("ad");
  var soyad = document.getElementById("soyad");
  var eposta = document.getElementById("email");
  var tc = document.getElementById("identitiy");
  var sifre = document.getElementById("password");

  var adHatasi = true;
  var soyadHatasi = true;
  var epostaHatasi = true;
  var tcHatasi = true;
  var sifreHatasi = true;

  if(sifre.value.length < 8){
      document.getElementById("sifreHatasi").innerHTML = "Şifreniz En Az 8 Karekterli Olmalı!";
      sifreHatasi = true
  }
  else{
      sifreHatasi = false;
  }

  if(ad.value.length < 3){
    document.getElementById("adHatasi").innerHTML = "Ad Kısmı En Az 3 Karekterli Olmalı!";
    adHatasi = true
  }
  else{
    adHatasi = false;
  }

  if(soyad.value.length < 3){
    document.getElementById("soyadHatasi").innerHTML = "Soyad Kısmı En Az 3 Karekterli Olmalı!";
    soyadHatasi = true
  }
  else{
    soyadHatasi = false;
  }

  if(eposta.value.length == "" || !eposta.value.includes("@") || !eposta.value.includes(".com")){
    document.getElementById("epostaHatasi").innerHTML = "Lütfen Geçerli Bir Eposta Giriniz!)(@ ve .com içermelidir)";
    epostaHatasi = true
  }
  else{
    epostaHatasi = false;
  }

  if(tc.value.length != 11){
    document.getElementById("tcHatasi").innerHTML = "TC Kimlik Numaranız 11 Haneli Olmalıdır.";
    tcHatasi = true
  }
  else{
    tcHatasi = false;
  }

  if(adHatasi == false && soyadHatasi == false && epostaHatasi == false && tcHatasi == false && sifreHatasi == false){
    form.submit();
  }


}

$(document).ready(function () {
    "use strict";
  
    /*var adError = true,
      soyadError= true,
      emailError = true,
      identitiyError = true,
      passwordError = true;
      //passConfirm = true;*/
  
    // Detect browser for css purpose
    if (navigator.userAgent.toLowerCase().indexOf("firefox") > -1) {
      $(".form form label").addClass("fontSwitch");
    }
  
    // Label effect
    $("input").focus(function () {
      $(this).siblings("label").addClass("active");
    });
  
    /*
    // Form validation
    $("input").blur(function () {
      // Ad 
      if ($(this).hasClass("ad")) {
        if ($(this).val().length === 0) {
          $(this)
            .siblings("span.error")
            .text("Lütfen Adınızı Giriniz!")
            .fadeIn()
            .parent(".form-group")
            .addClass("hasError");
            adError = true;
        } else if ($(this).val().length > 1 && $(this).val().length <= 3) {
          $(this)
            .siblings("span.error")
            .text("En Az 3 Karekter Girilmeli!")
            .fadeIn()
            .parent(".form-group")
            .addClass("hasError");
            adError = true;
        } else {
          $(this)
            .siblings(".error")
            .text("")
            .fadeOut()
            .parent(".form-group")
            .removeClass("hasError");
            adError = false;
        }
      }

       // Soyad 
       if ($(this).hasClass("soyad")) {
        if ($(this).val().length === 0) {
          $(this)
            .siblings("span.error")
            .text("Lütfen Soyadınızı Giriniz!")
            .fadeIn()
            .parent(".form-group")
            .addClass("hasError");
            soyadError = true;
        } else if ($(this).val().length > 1 && $(this).val().length <= 3) {
          $(this)
            .siblings("span.error")
            .text("En Az 3 Karekter Girilmeli!")
            .fadeIn()
            .parent(".form-group")
            .addClass("hasError");
            soyadError = true;
        } else {
          $(this)
            .siblings(".error")
            .text("")
            .fadeOut()
            .parent(".form-group")
            .removeClass("hasError");
            soyadError = false;
        }
      }

      // Email
      if ($(this).hasClass("email")) {
        if ($(this).val().length == "") {
          $(this)
            .siblings("span.error")
            .text("Lütfen Email Adresinizi Giriniz!")
            .fadeIn()
            .parent(".form-group")
            .addClass("hasError");
          emailError = true;
        } else {
          $(this)
            .siblings(".error")
            .text("")
            .fadeOut()
            .parent(".form-group")
            .removeClass("hasError");
          emailError = false;
        }
      }

    // Identitiy
    if ($(this).hasClass("identitiy")) {
      if ($(this).val().length != 11) {
        $(this)
          .siblings("span.error")
          .text("TC Kimlik Numarası 11 Hane Olmalı!")
          .fadeIn()
          .parent(".form-group")
          .addClass("hasError");
          identitiyError = true;
      } else {
        $(this)
          .siblings(".error")
          .text("")
          .fadeOut()
          .parent(".form-group")
          .removeClass("hasError");
          identitiyError = false;
      }
    }
  
      // PassWord
      if ($(this).hasClass("pass")) {
        if ($(this).val().length < 8) {
          $(this)
            .siblings("span.error")
            .text("En Az 8 Karekter Giriniz!")
            .fadeIn()
            .parent(".form-group")
            .addClass("hasError");
          passwordError = true;
        } else {
          $(this)
            .siblings(".error")
            .text("")
            .fadeOut()
            .parent(".form-group")
            .removeClass("hasError");
          passwordError = false;
        }
      }
  
      /*
      // PassWord confirmation
      if ($(".pass").val() !== $(".passConfirm").val()) {
        $(".passConfirm")
          .siblings(".error")
          .text("Şifreler Eşleşmedi Doğru Giriniz!")
          .fadeIn()
          .parent(".form-group")
          .addClass("hasError");
        passConfirm = false;
      } else {
        $(".passConfirm")
          .siblings(".error")
          .text("")
          .fadeOut()
          .parent(".form-group")
          .removeClass("hasError");
        passConfirm = false;
      }
  
      // label effect
      if ($(this).val().length > 0) {
        $(this).siblings("label").addClass("active");
      } else {
        $(this).siblings("label").removeClass("active");
      }
    });
  */
    // form switch
    $("a.switch").click(function (e) {
      $(this).toggleClass("active");
      e.preventDefault();
  
      if ($("a.switch").hasClass("active")) {
        $(this)
          .parents(".form-peice")
          .addClass("switched")
          .siblings(".form-peice")
          .removeClass("switched");
      } else {
        $(this)
          .parents(".form-peice")
          .removeClass("switched")
          .siblings(".form-peice")
          .addClass("switched");
      }
    });
  
    /*
    // Form submit
    $("form.signup-form").submit(function (event) {
      event.preventDefault();
  
      if (
        adError == true ||
        soyadError == true||
        identitiyError == true ||
        emailError == true ||
        passwordError == true
        //passConfirm == true
      ) {
        $(".ad,.soyad,.identitiy ,.email ,.pass").blur();
      } else {
        
        $('form#kayit').on('submit', function (event) {
          $.ajax({
            type: 'post',
            url: 'php/register.php',
            data: $('form').serialize(),
            success: function () {
              
            }
          });
        });

      }
    });
    
    // Reload page
    $("a.profile").on("click", function () {
      location.reload(true);
    });
    */
  });