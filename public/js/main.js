$(function() {

  // f_test();
  f_navBar();
  f_staff_infoURL_th();


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


});
