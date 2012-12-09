var gl_topbar_position
var gl_topbar_position_top

$(document).ready(function(){
       var sidebar = $('#sidebar');
	gl_topbar_position = sidebar.offset();
	gl_topbar_position_top = gl_topbar_position.top + sidebar.height();
       $('#submit').bind("click", function(){
              var comment = $('#comment').val();
              comment = comment.replace(/\r<code>/g, "<code>");
              comment = comment.replace(/\n<code>/g, "<code>");
              comment = comment.replace(/<code>\r/g, "<code>");
              comment = comment.replace(/<code>\n/g, "<code>");
              $('#comment').val(comment);
       });
       $('.scrolltop').click(function(){
              $('html, body').animate({ scrollTop: 0 }, 'swing');
       });
});

$(window).scroll(function() {
       var scrollTop = $('.scrolltop');
       if (window.pageYOffset >= gl_topbar_position_top){
              scrollTop.css('top', '0').css('position', 'fixed');
              $('.scrolltop').fadeIn();
       } else if(window.pageYOffset <= gl_topbar_position_top) {
              scrollTop.css('top', '').css('position', '').offset({ top: gl_topbar_position_top })
              $('.scrolltop').fadeOut();
       }
});