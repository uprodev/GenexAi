jQuery(document).ready(function ($) {

  //faq
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    })
  });

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //sub-menu open/close - mob-menu
  $(document).on('click', '.mob-menu .sub-item>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,
  });

  //show/hide text
  $(document).on('click', '.show-more', function (e){
    e.preventDefault();
    $(this).toggleClass('is-open');

    if($(this).hasClass('is-open')){
      $(this).siblings('.text-wrap').addClass('is-show')
    }else{
      $(this).siblings('.text-wrap').removeClass('is-show')
    }
  });

  //fix header
  $(".top-line").sticky({
    topSpacing:0
  });

//scroll up/down
  var lastScrollTop = 0;
  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
      $('header').addClass('is-down');
    } else {
      $('header').removeClass('is-down');
    }
    lastScrollTop = st;
  });


  //share link
  $(document).on('click', '.link-copy>a', function (e){
    e.preventDefault();
    $(this).toggleClass('is-open')
    if($(this).hasClass('is-open')){
      $('.menu-link').slideDown();
    }else{
      $('.menu-link').slideUp();
    }
  })

  //copy in buffer
  $(document).on('click', '.copy>a', function (e) {
    e.preventDefault();
    let copyText = $(this).attr('href');
    document.addEventListener('copy', function (e) {
      e.clipboardData.setData('text/plain', copyText);
      e.preventDefault();
    }, true);

    document.execCommand('copy');
    console.log('copied text : ', copyText);

    $(this).closest('.link-copy').prepend("<p class='info-show'>Copy to buffer</p>");
    setTimeout(function () {
      $('.info-show').hide()
    }, 2000);
  });

});