$(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",/* エフェクトの種類 スライド */
    pauseOnHover: false,/* 画像やボタンにマウスオーバーした時にスライドを停止する */
    slideshowSpeed: 7000,/* 次の画像に切り替わるまでの時間 5000ミリ秒 */
    animationSpeed: 2000,/* エフェクトのスピード 500ミリ秒 */
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
