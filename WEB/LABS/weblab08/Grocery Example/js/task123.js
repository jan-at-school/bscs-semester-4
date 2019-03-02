$(function(){

$('li').on('click' ,function() {
      var d = new Date();

      $(this).find('.date').text('Clicked On:'+d);
    });

$('li').on('click', function () {

      var item = $(this).text();
      var status;
      if ($(this).hasClass('important')) {
        status = 'important';
      }
      else {
        status = 'available';
      }

      $('#info').html('Item: ' + item + '<br>'+'Status: ' + status + '<br>'+'Event: click');
      $('#info').animate({'background-color':'green'},500).animate({'background-color':'#fff'},500);

    });


    $('li').on('mouseover', function () {
      var item = $(this).text();
      var status;
      if ($(this).hasClass('important')) {
        status = 'important'
      }
      else {
        status = 'available';
      }

      $('#info').html('Item: ' + item + '<br>'+'Status: ' + status + '<br>'+'Event: mouse hover');

    });










    $('#notification').hide();

    $(window).on('scroll', function (){

      var scrollHeight = $(document).height();
    	var scrollPosition = $(window).height() + $(window).scrollTop();
    	if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
          $("#notification").fadeIn();
          $("#notification").fadeIn("slow");
          $("#notification").fadeIn(3000);
          $('#notification').animate({'background-color':'green'},500).animate({'background-color':'#333'},500);

    	}

    });

});
