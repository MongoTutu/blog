$(function(){

    function menu_slide(){
        var menu = $('.menubar_Dv');
        menu.animate({'left':0},120,function(){
            $(this).addClass('slided');
            $('body').on('click',function(){
                if(menu.hasClass('slided')){
                    menu.animate({'left':'-175px'},120,function(){
                        $(this).removeClass('slided');
                    });
                    $('body').unbind('click');
                }
            });
        });
    }
    $('.menubar_link').on('click',menu_slide);

});
