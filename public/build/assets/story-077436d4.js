$(document).ready(function(){c(),$(document).on("shown.bs.modal shown.bs.popover",function(){c()})});function c(){let t=$(".focus-image");t.length!==0&&(console.log("its starting"),t.on("click",function(e){let s=$(this),o=e.pageX-s.offset().left,n=e.pageY-s.offset().top;console.log("where click",o,n),$(".focus").css("top",n-22).css("left",o-22).show(),$('input[name="focus_x"]').val(parseInt(o)),$('input[name="focus_y"]').val(parseInt(n))}),$(".focus").click(function(){$(".focus").hide(),$('input[name="focus_x"]').val(),$('input[name="focus_y"]').val()}))}
