$(function() {

  // f_test();
  f_navBar();
  f_staff_infoURL_th();
  f_backBtn();


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


  function f_staff_infoURL_th() {
    if (location.pathname == "/staff_info") {
      $('th').css('background-color', '#999999');
    }
  }

  function f_backBtn() {
    $('.backBtn').click(function() {
      history.back();
    })
  }


});
