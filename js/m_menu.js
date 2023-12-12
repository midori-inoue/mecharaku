$(function(){
    var rwdMenu = $('#menuList'),
    switchPoint = 1023,
    slideSpeed = 300;
 
    var menuSouce = rwdMenu.html();
 
    $(window).load(function(){
 
        function menuSet(){
            if(window.innerWidth <= switchPoint){
                if(!($('#rwdMenuWrap').length)){
                    $('#sp').prepend('<div id="rwdMenuWrap"><div id="switchBtnArea"><a href="javascript:void(0);" id="switchBtn"><span></span><span></span><span></span></a></div></div>');
                    $('#rwdMenuWrap').append(menuSouce);
 
                    var menuList = $('#rwdMenuWrap > ul');
 
                    $('#switchBtn').on('click', function(){
                        menuList.slideToggle(slideSpeed);
                        $(this).toggleClass('btnClose');
                    });
                }
            } else {
                $('#rwdMenuWrap').remove();
            }
        }
 
        $(window).on('resize', function(){
            menuSet();
        });
 
        menuSet();
    });
});