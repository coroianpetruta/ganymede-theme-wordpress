(function ($) {
  if ($(window).width() >= 728) {
    // do your stuff

    $(document).ready(function () {
      var contentPlacement =
        $(".main-content").position().top + $(".mySlides").height();
      $(".main-content").css("margin-top", contentPlacement);

      $(window).resize(function () {
        var contentPlacement =
          $(".main-content").position().top + $(".mySlides").height();
        $(".main-content").css("margin-top", contentPlacement);
      });
    });
  }
})(jQuery);

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// When the user clicks the button, open the modal
btn.onclick = function () {
  if (modal.style.display === "none" || modal.style.display === "") {
    modal.style.display = "flex";
    btn.style.background = "#999999";
  } else {
    modal.style.display = "none";
    btn.style.background = "#212429";
  }
};

// When the user clicks anywhere outside of the modal, close it

//Search bar

var searchBtn = document.getElementById("search-button");

var search = document.getElementById("searchbox");

searchBtn.onclick = function () {
  if (search.style.display === "none" || search.style.display === "") {
    search.style.display = "flex";
    searchBtn.style.background = "#999999";
  } else {
    search.style.display = "none";
    searchBtn.style.background = "#212429";
  }
};

2;
3;
4;
5;
6;
document.addEventListener("mouseup", function (e) {
  if (!search.contains(e.target) && !searchBtn.contains(e.target)) {
    search.style.display = "none";
    searchBtn.style.background = "#212429";
  }
});

var menu = document.getElementById("navMobile");

// Get the button that opens the modal
var menubtn = document.getElementById("myBtnMobile");

var content = document.getElementById("mainContent");
// When the user clicks the button, open the modal
menubtn.onclick = function () {
  if (menu.style.display === "none" || menu.style.display === "") {
    menu.style.display = "flex";
    content.style.marginTop = "400px";
  } else {
    menu.style.display = "none";
    content.style.marginTop = "0";
  }
};
