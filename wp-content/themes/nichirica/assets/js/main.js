let programmaticSlideChange = false;

const swiper = new Swiper('#bannerSlide', {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  // autoplay: true,

  // If we need pagination
  pagination: {
    enabled: true,
    el: '.swiper-pagination',
    clickable: true
  },
});
const swiper1 = new Swiper('#bannerContentSlide', {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  // autoplay: true,
  pagination: {
    enabled: true,
    el: '.swiper-pagination',
    clickable: true
  },
  allowTouchMove: false
});

swiper.on('slideChange', function () {
  swiper1.slideTo(swiper.realIndex);

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

const validateEmail = (email) => {
  const re = /\S+@\S+\.\S+/;
  return re.test(email);
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
  const isEmail = validateEmail($('#email').val());
  return name && email && phone && department && content && admin && type && isEmail
}

const validateFormEntry = () => {
  const width = $(window).width();
  let phone = true
  let birthday = true
  if (width > 430) {
    birthday = isValidate('year') || isValidate('month') || isValidate('day');
    phone = isValidate('phone1') && isValidate('phone2') && isValidate('phone3');
  } else {
    birthday = isValidate('birthday1');
    phone = isValidate('phone4');
  }
  const name = isValidate('name');
  const address = isValidate('address');
  const email = isValidate('email');
  const isEmail = validateEmail($('#email').val());
  const content = isValidate('content');
  const classNumber = isValidate('class');
  const pr = isValidate('pr');
  return name && email && phone && address && content && birthday && isEmail && classNumber && pr
}

$('#phone1 , #phone2 , #phone3').change( function () {
  $('#phone').val($('#phone1').val() + $('#phone2').val() + $('.#phone3').val());
})

$('#phone4').change( function () {
  $('#phone').val($('#phone4').val());
})

$('#year, #month, #day').change( function () {
  $('#birthday').val($('#year').val() ?? '1970' + '-' + $('#month').val() ?? '01' + '-' + $('#day').val()) ?? '01'
})

$('#birthday1').change( function () {
  $('.birthday').val($('#birthday1').val());
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

$('.confirm-try').change(function () {
  if ($(this).is(':checked')) {
    $('.confirm-try').removeClass('disabled');
    $('.confirm-try').removeAttr('disabled');
  } else {
    $('.confirm-try').addClass('disabled');
    $('.confirm-try').attr('disabled', 'disabled');
  }
})

$('.btn-submit-try').click(function (e) {
  console.log(validateFormEntry())
  if ($(this).hasClass('disabled') || !validateFormEntry()) {
    e.preventDefault();
  }
})


