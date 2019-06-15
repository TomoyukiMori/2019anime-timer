$(function () {
  $('td').click(function(){
    var name= $(this).text();
    $('.container input:last').val(name);

    var position = $("#inputform").offset().top;
    $("html,body").animate({
    scrollTop : position
    }, {
        queue : false
    });

  });



});
