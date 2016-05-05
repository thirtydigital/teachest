/*global $:false*/
'use strict'

$(document).ready(function () {
  if ($('.carousel')) {
    $('.carousel').carousel()

    $('.carousel').swiperight(function () {
      $(this).carousel('prev')
    })
    $('.carousel').swipeleft(function () {
      $(this).carousel('next')
    })
  }

  if ($('.subscribe-step').length > 0) {
    checkValidationSubs()
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

  $('.col-product .btn-tc-default').on('click', function (e) {
    var productID = $(this).data('id')

    // Visuals
    $('.col-product').removeClass('selected').find('.btn-tc-default').removeClass('selected').html('Select')
    $(this).html('Selected').addClass('selected').parent().parent().addClass('selected')

    $('input.productID').val(productID)

    e.preventDefault()
    return false
  })

  $('.col-prices .btn-price-selector').on('click', function (e) {
    var productPrice = $(this).data('price')
    $('input.productPrice').val(productPrice)

    // Visuals
    $('.col-prices').removeClass('selected').find('.btn-tc-default').removeClass('selected').html('Select')
    $(this).html('Selected').addClass('selected').parent().addClass('selected')

    e.preventDefault()
    return false
  })

  $('.btn-schedule-selector').on('click', function (e) {
    var productSchedule = $(this).data('schedule')
    $('input.productSchedule').val(productSchedule)
  })

  $('.btn-sub-progress').on('click', function (e) {
    if (!checkValidationSubs()) {
      $('.woocommerce-error').remove()
      $('.woocommerce').append('<div class="woocommerce-error">You must choose a Tea, Quantity and a Frequency</div>')
      e.preventDefault()
      return false
    }
  })

  function checkValidationSubs () {
    if ($('input.productPrice').val() > 0 && $('input.productSchedule').val() > 0 && $('input.productID').val() > 0) {
      return true
    } else {
      return false
    }
  }
})
