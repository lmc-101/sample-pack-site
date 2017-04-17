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
    
    var ipsumPlace = $('.article_text');
    var ipsumButton = $('.main_info_place').find('button');
    
    $(ipsumButton).click(function(){     
        
        $(ipsumPlace).each(function(){
            
            $(this).html($(this).html().replace(/ipsum/g, '<span>$&</span>'));
            
            $('p > span').css('color', 'red').delay(3000).queue(function() {
                $('p>span').css('color', 'black');
            });
        }); 
    });
    

//ex.4: ajax form handler 
    
    /*just a bit of styling*/
    $("#result").css('font-family', 'Open Sans').css('text-align', 'center');
    
    /*start function*/
    $('form').submit(function(reload) {
        var submitForm;

    /* Stop form from submitting normally */
        reload.preventDefault();

    /* Clear result div*/
    $("#result").html('');

    /* Get from elements values */
        var formValues = $(this).serialize();

    /* Send the data using post and put the results in a div */
  
        submitForm= $.ajax({
            url: 'post.php',
            type: 'POST',
            data: formValues
        });

        submitForm.done(function (formValues){
          // show successfully for submit message
            
            $('.personal_info, textarea').fadeOut(1000, function(){
                
               $('form').css('justify-content', 'center'); $("#result").html(formValues).fadeIn('slow');
            });
            
        });

        submitForm.fail(function (){

       // show error
            $('.personal_info, textarea').fadeOut(1000, function(){
                
               $('form').css('justify-content', 'center'); $("#result").html(formValues).fadeIn('slow');
            });
        });
        
        
    
    
});
    
});