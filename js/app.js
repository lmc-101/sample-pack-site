$(document).ready(function() {

//ex.1 - jQuery: smooth scroll:
    $('.go_back').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 'slow');

//gdy klikniemy w guzik z napisem 'back to top', strona wolno przesuwa się na samą górę głównych elementów szkieletu html;
    });

//ex.2: read more:
    
    var readMore = $('.read_more');
    
    $(readMore).click(function(){ 
       
       var hiddenArticle = $(this).parent().children('.article_box').children('p:last-child');
        
       $(hiddenArticle).toggleClass('hide');
// przy kliknięciu na element 'read more' pojawia się cały artykuł. przy kolejnym kliknięciu - chowa się.     
        
        if ($(hiddenArticle).hasClass('hide')) {
            $(this).children('span').html('&mdash; read more');
        } else {
            $(this).children('span').html('&mdash; read less');
        }
//zmiana tekstu ukazującego się po pojawieniu się całwgo artykułu i po jego schowaniu;
    });

//ex.3 - jQuery: red ipsum's:
    
    var ipsumPlace = $('.article_text');
    var ipsumButton = $('.main_info_place').find('button');
    
    $(ipsumButton).click(function(){     
        
        $(ipsumPlace).each(function(){
// przy kliknięciu każdy element zamienia wybrane przez nas słowo (w tym wypadku ipsum) na span z dodanym stylem oraz tym słowem właśnie. dotyczy to wszystkich znalezionych słów.             
            $(this).html($(this).html().replace(/ipsum/g, '<span>$&</span>'));
 
//stylowanie powstałych spanów:
            $('p > span').css('color', 'red').delay(3000).queue(function() {

                $('p>span').css('color', 'black');
//funkcja, która działa z 3.sekundowym opóźnieniem, zmieniająca nasz span z powrotem na domyślny (a w zasadzie zdefiniowany czarny) kolor;
            });
        }); 
    });
    

//ex.1 -Ajax: form handler 
    
//just a bit of styling
    $("#result").css('font-family', 'Open Sans').css('text-align', 'center');
    
//start function
    $('form').submit(function(reload) {
        var submitForm;

//Stop form from submitting with reload to post.php
        reload.preventDefault();

//clear result div
        $("#result").html('');

//get form elements values
        var formValues = $(this).serialize();

//send the data using post and put the results in a div
  
        submitForm= $.ajax({
            url: 'post.php',
            type: 'POST',
            data: formValues
        });

        submitForm.done(function (formValues){
//show if submitting was successful
            
            $('.personal_info, textarea').fadeOut(1000, function(){
                
               $('form').css('justify-content', 'center'); $("#result").html(formValues).fadeIn('slow');
            });
            
        });

        submitForm.fail(function (){
//show error
            
            $('.personal_info, textarea').fadeOut(1000, function(){
                
               $('form').css('justify-content', 'center'); $("#result").html(formValues).fadeIn('slow');
            });
        });
   
    });
//end function


//funkcja, dzięki której możemy pobrać i bez przeładowania strony pokazać wpisane  przez użytkowników dane. wydziela dane z grupy formularza tak, by każda z nich traktowana była indywidualnie oraz definiuje to, co będzie się działo, gdy wysłanie formularza się powiedzie, lub gdy użytkonik źle wprowadzi dane. (W tym wypadku jest to zanikanie samego formularza i pokazanie div'a z odpowiednim komunikatem w jego miejsce).
});