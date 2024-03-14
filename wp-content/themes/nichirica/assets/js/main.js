const swiper = new Swiper('#bannerSlide', {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 5000,
  },

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
    $(`#input-error-${inputId}`).addClass('show')
    if (inputId === 'phone1' || inputId === 'phone2' || inputId === 'phone3') {
      $('#phone1').addClass('is-invalid')
      $('#phone2').addClass('is-invalid')
      $('#phone3').addClass('is-invalid')
      $('#bg-error').addClass('show')
      $(`#input-error-phone`).addClass('show')
    }
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

const isNumberIntegers = (inputId) => {
  const value = $(`#${inputId}`).val();
  if (value === '') {
    $(`#${inputId}`).addClass('is-invalid');
    $(`#input-error-${inputId}`).addClass('show')
    if (inputId === 'phone1' || inputId === 'phone2' || inputId === 'phone3') {
      $('#phone1').addClass('is-invalid')
      $('#phone2').addClass('is-invalid')
      $('#phone3').addClass('is-invalid')
      $('#bg-error').addClass('show')
      $(`#input-error-phone`).addClass('show')
    }
    return false;
  }
  if (isNaN(value)) {
    $(`#${inputId}`).addClass('is-invalid');
    $(`#input-error-${inputId}`).addClass('show')
    if (inputId === 'phone1' || inputId === 'phone2' || inputId === 'phone3') {
      $('#phone1').addClass('is-invalid')
      $('#phone2').addClass('is-invalid')
      $('#phone3').addClass('is-invalid')
      $('#bg-error').addClass('show')
      $(`#input-error-phone`).addClass('show')
    }
    return false;
  }
  return true;
}

const validateForm = () => {
  const phone = isValidate('phone1') || isValidate('phone2') || isValidate('phone3');
  const phoneNum = isNumberIntegers('phone1') || isNumberIntegers('phone2') || isNumberIntegers('phone3');
  if (!phone || !phoneNum) {
    $('#bg-error').addClass('show')
  }

  const name = isValidate('name');
  const department = isValidate('department');
  const admin = isValidate('admin');
  const email = isValidate('email');
  const type = isValidate('type');
  const content = isValidate('content');
  const isEmail = validateEmail($('#email').val());
  return name && email && phone && department && content && admin && type && isEmail && phoneNum
}

const validateFormEntry = () => {
  const birthday = isValidate('year') || isValidate('month') || isValidate('day');
  if (!phone) {
    $('#bg-error').addClass('show')
  }
  const phone = isValidate('phone1') && isValidate('phone2') && isValidate('phone3');
  const name = isValidate('name');
  const address = isValidate('address');
  const email = isValidate('email');
  const isEmail = validateEmail($('#email').val());
  const content = isValidate('content');
  const classNumber = isValidate('class');
  const pr = isValidate('pr');
  return name && email && phone && address && content && birthday && isEmail && classNumber && pr
}

$("input, textarea").on("keyup", function (e) {
  $(this).removeClass('is-invalid');
  const name = $(this).attr('id');
  $(`#input-error-${name}`).removeClass('show')
  if (name === 'phone1' || name === 'phone2' || name === 'phone3') {
    if ($('#phone1').val() !== '' && $('#phone2').val() !== '' && $('#phone3').val() !== '') {
      $('#bg-error').removeClass('show')
      $(`#input-error-phone`).removeClass('show')
    }
  }
  isValidate(name);
})

$("select").change(function () {
  $(this).removeClass('is-invalid');
  const name = $(this).attr('id');
  $(`#input-error-${name}`).removeClass('show')
  isValidate(name);
})

$("input, textarea").blur(function () {
  const name = $(this).attr('id');
  isValidate(name);
  if (name === 'phone1' || name === 'phone2' || name === 'phone3') {
    isNumberIntegers(name);
  }
})


$('.twoLineMenuMB').click(function () {
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
  if ($(this).hasClass('disabled') || !$('#form-inquiry').valid()) {
    e.preventDefault();
  }
})

$.fn.onClassChange = function(cb) {
  return $(this).each((_, el) => {
    new MutationObserver(mutations => {
      mutations.forEach(mutation => cb && cb(mutation.target, mutation.target.className));
    }).observe(el, {
      attributes: true,
      attributeFilter: ['class'] // only listen for class attribute changes
    });
  });
};
$('#name').onClassChange((el, className) => {
  if ($('#name').hasClass('is-invalid')) {
    $('#input-note-name').addClass('error')
  } else {
    $('#input-note-name').removeClass('error')
  }
});

$('#department').onClassChange((el, className) => {
  if ($('#department').hasClass('is-invalid')) {
    $('#input-note-department').addClass('error')
  } else {
    $('#input-note-department').removeClass('error')
  }
})

function populateYears() {
  var select = document.getElementById("year");
  if (select === null) {
    return;
  }
  var currentYear = new Date().getFullYear();
  for (var i = currentYear; i >= currentYear - 100; i--) {
    var option = document.createElement("option");
    option.text = i;
    option.value = i;
    select.add(option);
  }
}

function populateMonths() {
  var select = document.getElementById("month");
  if (select === null) {
    return;
  }
  for (var i = 1; i <= 12; i++) {
    var option = document.createElement("option");
    option.text = i;
    option.value = i;
    select.add(option);
  }
}





function populateDays() {
  var year = document.getElementById("year")?.value;
  var month = document.getElementById("month")?.value;
  var daysInMonth = daysInMonthForYearMonth(year, month);
  var select = document.getElementById("day");
  if (select === null) {
    return;
  }
  select.innerHTML = '';
  for (var i = 1; i <= daysInMonth; i++) {
    var option = document.createElement("option");
    option.text = i;
    option.value = i;
    select.add(option);
  }
}

function daysInMonthForYearMonth(year, month) {
  return new Date(year, month, 0).getDate();
}

function isLeapYear(year) {
  return (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
}

populateYears();
populateMonths();
populateDays();

document.getElementById("year")?.addEventListener("change", populateDays);
document.getElementById("month")?.addEventListener("change", populateDays);



