webpackJsonp(["app/js/course/header-top/index"],[function(n,o){"use strict";var t=$(".js-unfavorite-btn"),a=$(".js-favorite-btn"),e=function(n,o){n.click(function(){var t=n.data("url");t&&$.post(t).done(function(t){t&&(o.show(),n.hide())})})};e(t,a),e(a,t),$("body").on("click",".es-qrcode",function(n){var o=$(n.currentTarget);o.hasClass("open")?o.removeClass("open"):$.ajax({type:"post",url:o.data("url"),dataType:"json",success:function(n){o.find(".qrcode-popover img").attr("src",n.img),o.addClass("open")}})}),$(".cancel-refund").on("click",function(){return!!confirm("真的要取消退款吗？")&&void $.post($(this).data("url"),function(n){window.location.reload()})})}]);