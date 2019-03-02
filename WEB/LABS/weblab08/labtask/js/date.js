// Import stylesheets
import './css/c07.css';
import './js/jquery-1.11.0.js';


$(function() {
  $('li').on('click', function() {
    var d = new Date();
    
    $(this).find('.date').text(d);
  });
});
