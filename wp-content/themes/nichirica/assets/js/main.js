const swiper = new Swiper('#bannerSlide', {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  autoplay: true,

  // If we need pagination
  pagination: {
    enabled: true,
    el: '.swiper-pagination',
    clickable: true
  },
});

'use strict';
$(window).on('scroll', function () {
  if ($(this).scrollTop() > 150) {
    $("body").addClass("is-sticky");
  } else {
    $("body").removeClass("is-sticky");
  }

});

const isValidate = (inputId) => {
  const value = $(`#${inputId}`).val();
  if (value === '') {
    $(`#${inputId}`).addClass('is-invalid');
    return false;
  } else {
    $(`#${inputId}`).removeClass('is-invalid');
    return true;
  }
}
const validateForm = () => {
  const width = $(window).width();
  let phone = true
  if (width > 430) {
    phone = isValidate('phone1') && isValidate('phone2') && isValidate('phone3');
  } else {
    phone = isValidate('phone4');
  }
  const name = isValidate('name');
  const department = isValidate('department');
  const admin = isValidate('admin');
  const email = isValidate('email');
  const type = isValidate('type');
  const content = isValidate('content');
  return name && email && phone && department && content && admin && type;
}

$('.phone1 , .phone2 , .phone3').change( function () {
  $('.phone').val($('.phone1').val() + $('.phone2').val() + $('.phone3').val());
})

$('.phone4').change( function () {
  $('.phone').val($('.phone4').val());
})

$("input,textarea").on("keyup", function (e) {
  $(this).removeClass('is-invalid');
})


$('.twoLineMenuMB').click(function (){
  $(this).toggleClass('show')
  $('.menu-mb-detail').toggleClass('show')
  $('.header-main').toggleClass('show-menu-mobile')
})

$('.confirm').change(function () {
  if ($(this).is(':checked')) {
    $('.btn-submit').removeClass('disabled');
    $('.btn-submit').removeAttr('disabled');
  } else {
    $('.btn-submit').addClass('disabled');
    $('.btn-submit').attr('disabled', 'disabled');
  }
})

$('.btn-submit').click(function (e) {
  if ($(this).hasClass('disabled') || !validateForm()) {
    e.preventDefault();
  }
})



