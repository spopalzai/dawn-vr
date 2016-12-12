function goToByScroll(e){$("html,body").animate({scrollTop:$(e).offset().top},1e3,"",function(){$(this).stop(true,true)})}


$(function(){

    var hash = window.location.hash;
    switch (hash){
        case '#home':
        $('.sidenav').animate({'left':'0px'});
        $('.main').fadeIn();
        break;

        default:
        $("div.landing").fadeIn();
    }

    $('body').on('click','.landing .sideTxt .begin',function(){
        $('.landing > div').animate({'left':'100%'},300,'',function(){
            $('.landing').fadeOut();
            $('.sidenav').animate({'left':'0px'});
            $('.main').fadeIn();
        });
    }).on('click','.commentBox .switch, a.leftcomment',function(){
        $('html').toggleClass('cmntOpen');
        if($('html').hasClass('cmntOpen')){
            $('.overlay').fadeIn()
        } else {
            $('.overlay').fadeOut();
            $('.commentBox .share .title').slideDown().next().slideUp();
        }
    }).on('click','.overlay',function(){
        if($('html').hasClass('cmntOpen')){
            $('html').toggleClass('cmntOpen');
            $('.overlay').fadeOut();
            $('.commentBox .share .title').slideDown().next().slideUp();
        }
    }).on('click','.commentBox .share .title',function(){
        $(this).slideUp().next().slideDown();
    });


});
