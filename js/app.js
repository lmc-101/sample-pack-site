$(document).ready(function() {

//ex.1: smooth scroll:
    $('.go_back').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });

//ex.2: read more:
    var readMore = $('.read_more');
    
    $(readMore).click(function(){ 
       
       var hiddenArticle = $(this).parent().children('.article_box').children('p:last-child');
        
       $(hiddenArticle).toggleClass('hide');
        
        
        if ($(hiddenArticle).hasClass('hide')) {
            $(this).children('span').html('&mdash; read more');
        } else {
            $(this).children('span').html('&mdash; read less');
        }
   
    });

//ex.3: red ipsum's:
    
    var ipsumIpsum = $('.article_text').html().find('ipsum', 'Ipsum');
    
    $('.article_text').hover(function(){
        $(ipsumIpsum).css('color', 'red');
    });
    
    
});