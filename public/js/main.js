$(function() {

  // f_test();
  f_navBar();
  f_matterId_send_toDetails();
  f_gray_th();
  f_backBtn();
  f_overtimeAnn();
  f_flashingWarning();


  // function f_test() {
  //   $('.JStest').on('click', function() {
  //     alert("hello!");
  //   });
  // }


  function f_navBar() {
    $('.navbar-collapse').find('a').each(function(){
      var a_Href = $(this).attr('href');
      var url_Path = location.pathname;
      if ( a_Href == url_Path ) {
        $(this).addClass('bg-warning')
               .css('border-radius', '2px');
      }
    });
  }


  function f_matterId_send_toDetails() {
    $('.matter_td').on('click', function() {
      var m_id = $(this).children('.matter_id').text();
      $('#input_m_id').val(m_id);
      $('#form_m_id').submit();
    });
  }


  function f_gray_th() {
    if (location.pathname == "/details" || location.pathname == "/staff_info") {
      $('th').css('background-color', '#999999');
      $('th').not('#th_width_not').css('width', '160px');
    }
  }


  function f_backBtn() {
    if ($('div').hasClass('appAnn')) {
      $('.backBtn').click(function() {
        history.go(-2);
      })
    } else {
      $('.backBtn').click(function() {
        history.back();
    })
    }
  }


  function f_overtimeAnn() {
    if($('.overtimeAnn_chain').length == true) {
      if($('.overtimeAnn').length == true) {
        $('.overtimeAnn').removeClass('d-none');
      }
    }
  }


  function f_flashingWarning() {
    setInterval(function(){
      $('.flashingWarning').fadeOut(1200).fadeIn(1800);
    },500);
  }


});
