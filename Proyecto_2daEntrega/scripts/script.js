
//CARUSSEL DE IMÁGENES
var slideIndex = 1;
showSlides(slideIndex);

var timer = setInterval(function() {
  slideIndex++;
  showSlides(slideIndex);
}, 7000);

function currentSlide(n) {
  clearInterval(timer);
  slideIndex = n;
  showSlides(slideIndex);
}

function showSlides(n) {
  var slides = document.getElementsByClassName("slideshow")[0].getElementsByTagName("img");
  var circles = document.getElementsByClassName("circles")[0].getElementsByClassName("circle");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (var i = 0; i < circles.length; i++) {
    circles[i].classList.remove("active");
  }
  slides[slideIndex - 1].style.display = "block";
  circles[slideIndex - 1].classList.add("active");
}

//RELOJS
function mostrarHora() {
    var fecha = new Date(); // obtener la fecha y hora actual
    var horas = fecha.getHours();
    var minutos = fecha.getMinutes();
    var segundos = fecha.getSeconds();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1;
    var anio = fecha.getFullYear();
    // formatear las horas, minutos y segundos para que siempre tengan dos dígitos
    if (horas < 10) {
      horas = "0" + horas;
    }
    if (minutos < 10) {
      minutos = "0" + minutos;
    }
    if (segundos < 10) {
      segundos = "0" + segundos;
    }
    // mostrar la hora y la fecha en el formato deseado
    document.getElementById("reloj").innerHTML = horas + ":" + minutos + ":" + segundos + " " + dia + "/" + mes + "/" + anio;
  }
  // actualizar la hora cada segundo
  setInterval(mostrarHora, 1000);