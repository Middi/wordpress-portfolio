$(document).ready(function(){function t(){n>=0?($(".fa-chevron-left").css({opacity:"0.3"}),$(".fa-chevron-right").css({opacity:"1"})):n<=-959?($(".fa-chevron-right").css({opacity:"0.3"}),$(".fa-chevron-left").css({opacity:"1"})):($(".fa-chevron-left").css({opacity:"1"}),$(".fa-chevron-right").css({opacity:"1"}))}$(window).scroll(function(){var t=$(this).scrollTop();$(window).width()>880&&$(".text-content").css({transform:"translate(0px, -"+t/2.4+"%)"}),$("#hero").css({transform:"translate(0px, "+t/18+"%)"})}),$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&location.hostname===this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html, body").animate({scrollTop:t.offset().top},1e3),$("#menu").slideUp("slow",function(){$("#menu").addClass("hidden")}),!1}}),setTimeout(function(){$(window).width()>880&&$(".card").addClass("spin")},2e3);var n=0;$(".left").click(function(){if(!(n<0))return!1;n+=137,$(".slides").css({"margin-left":n+"px"}),t()}),$(".right").click(function(){if(!(n>-959))return!1;n-=137,$(".slides").css({"margin-left":n+"px"}),t()}),t()});