/*global $:false*/
'use strict'

$(document).ready(function () {
  if ($('.carousel')) {
    $('.carousel').carousel()
  }

  function scrollToId (idName) {
    $('html, body').animate({ scrollTop: $(idName).offset().top - 50 }, 1000)

    if (window.location.hash) {
      var hashTag = window.location.hash
      scrollToId(hashTag)
    }
  }
  $('.btn-scrolldown').on('click', function (e) {
    e.preventDefault()
    var anchorID = $(this).attr('href').substring($(this).attr('href').indexOf('#'))
    scrollToId(anchorID)
    return false
  })

  $('.navbar-menu').on('click', function (e) {
    $('.fullscreen-nav').toggle()
    $(this).find('i').toggleClass('fa-bars').toggleClass('fa-times')
    e.preventDefault()
    return false
  })

  // $('.payment-different-address input').change(function () {
  //   $(this).parent().parent().parent().remove()
  //   $('.payment-different-address-panel').toggleClass('hidden')
  // })

  $('.col-product .btn-tc-default').on('click', function (e) {
    var productID = $(this).data('id')

    // Visuals
    $('.col-product').removeClass('selected').find('.btn-tc-default').removeClass('selected').html('Select')
    $(this).html('Selected').addClass('selected').parent().parent().addClass('selected')

    $('input.productID').val(productID)

    checkValidationSubs()
    e.preventDefault()
    return false
  })

  $('.col-prices .btn-price-selector').on('click', function (e) {
    var productPrice = $(this).data('price')
    $('input.productPrice').val(productPrice)

    // Visuals
    $('.col-prices').removeClass('selected').find('.btn-tc-default').removeClass('selected').html('Select')
    $(this).html('Selected').addClass('selected').parent().addClass('selected')

    checkValidationSubs()
    e.preventDefault()
    return false
  })

  $('.btn-schedule-selector').on('click', function (e) {
    var productSchedule = $(this).data('schedule')
    $('input.productSchedule').val(productSchedule)
    checkValidationSubs()
  })

  $('.btn-already-registered').on('click', function (e) {
    var hideClass = 'hidden'
    $(this).parent().addClass(hideClass)
    $('.form-horizontal.register').addClass(hideClass)
    $('.form-horizontal.login').removeClass(hideClass)

    e.preventDefault()
    return false
  })

  function checkValidationSubs () {
    var button = $('.btn-sub-progress')
    if ($('input.productPrice').val() > 0 && $('input.productSchedule').val() > 0 && $('input.productID').val() > 0) {
      button.prop('disabled', false)
    }
  }
})
