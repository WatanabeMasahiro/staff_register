$(function() {

  // f_test();
  f_navBar();
  f_matterId_send_toDetails1();
  f_matterId_send_toDetails2();
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


  function f_matterId_send_toDetails1() {
    $('.matter_td').on('click', function() {
      var m_id = $(this).children('.matter_id').text();
      $('#input_m_id').val(m_id);
      $('#form_m_id').submit();
    });
  }


  function f_matterId_send_toDetails2() {
    $('.matter_btn').on('click', function() {
      var m_id = $(this).siblings('.matter_id').text();
      $('#input_m_id').val(m_id);
      $('#form_m_id').submit();
    });
  }


  function f_gray_th() {
    if (location.pathname == "/" || location.pathname == "/details" || location.pathname == "/entry" || location.pathname == "/work_past" || location.pathname == "/staff_info") {
      $('th').css('background-color', '#999999');
      $('th').not('#th_width_not').css('width', '160px');
      if(!($('.recordData').children('td').length)){
        $('.recordData').children('th').addClass('text-center py-2').css('font-size', '1.5em').css('letter-spacing', '0.05em').text('データがありません。');
      }
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
    $('.overtimeAnn_chain').click(function() {
      if(!confirm('申し込みを確定しますか？')){
          return false;
      }
    });
  }


  function f_flashingWarning() {
    setInterval(function(){
      $('.flashingWarning').fadeOut(1200).fadeIn(1800);
    },500);
  }


});
