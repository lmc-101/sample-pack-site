<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>sample-pack-lidia-cicha</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
    </head>
    <body>
       
        <!--header-->
        <header>
            <div class='blue_stripe'></div>
            <div class='container'>
                <nav>
                    <ul class='menu'>
                        <li><a href='#' class='clicked'>Home</a></li>
                        <li><a href='#'>Products</a></li>
                        <li class='logo_place'></li>
                        <!-- this is just empty space for logo - to get the responsive pixel-perfect effect-->
                        <li><a href='#'>About us</a></li>
                        <li><a href='#'>Contact</a></li>
                    </ul>
                </nav>
                <div class='logo'><img src='images/logo.png'></div> 
            </div>
        </header>
        <!--header-->
        
        <!--section 1: main info-->
        <section class='main_info_place'>
            <div class='container'>
                <div class='main_message'>
                  <!-- main message heading changer -->
                  <!-- ex.1 - php-->
                   
                    <?php
                    
                        if($_SERVER ['REQUEST_METHOD'] === 'GET' ){
                            
                            if( isset($_GET['red_heading'])){
                                
                                echo '<h1 style="color: rgb(255,0,0);">This is just a sample page</h1>';
                                  
                            } else if( isset($_GET['different_heading'])){
                                
                                echo '<h1>Hello World!</h1>';
                            
                            } else {
                                
                                echo '<h1>This is just a sample page</h1>';
                     
                            } 
                        } 

                    ?>
                  
               </div>
               <button>push the button</button> 
            </div>
        </section>
        <!--section 1-->
        
        <!--section 2: articles-->
        <section class='articles_place'>
            <div class='container'>
                <article class='col-1'>
                    <div class='article_box'>
                        <h3>A heading title</h3>
                        <div class='article_intro'>
                            <div class='article_image'>
                                <img src="images/img.png">
                            </div>
                            <p class='article_idea'>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
                            </p>
                        </div>
                        <p class='article_text'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
                        </p>
                        <p class='article_text hide'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.  
                        </p>
                    </div>
                    <div class='read_more'>
                        <span>&mdash; read more</span>
                    </div>
                </article>
                <article class='col-1'>
                    <div class='article_box'>
                        <h3>A much longer heading title</h3>
                        <div class='article_intro'>
                            <div class='article_image'>
                                <img src="images/img.png">
                            </div>
                            <p class='article_idea'>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
                            </p>
                        </div>
                        <p class='article_text'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. 
                        </p>
                        <p class='article_text hide'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.  
                        </p>
                    </div>
                    <div class='read_more'>
                        <span>&mdash; read more</span>
                    </div>
                </article>
                <article class='col-1'>
                    <div class='article_box'>
                        <h3>A heading title</h3>
                        <div class='article_intro'>
                            <div class='article_image'>
                                <img src="images/img.png">
                            </div>
                            <p class='article_idea'>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
                            </p>
                        </div>
                        <p class='article_text'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
                        </p>
                        <p class='article_text hide'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.  
                        </p>
                    </div>
                    <div class='read_more'>
                        <span>&mdash; read more</span>
                    </div>
                </article>
            </div>
            
        </section>
        <!--section 2-->
        
        <!--section 3: form -->
        <section class='form_place'>
            <div class='container'>
                <h2>Contact us</h2>
                <form id='info_form' method='POST' action='post.php'>
                    <div class='personal_info'>
                        <input type='text' name='name' placeholder='name'>
                        <input type='email' name='e-mail' placeholder='e-mail'>
                        <input type='tel' name='phone' placeholder='phone'>
                    </div>
                    <textarea type='text' name='message' placeholder='your message'></textarea>
                    <div id='result'></div>
                </form>
                <button type='submit' form='info_form'>send message</button>
                
            </div>
        </section>
        <!--section 3-->
        
        <!--section 4: scroll-top button-->
        <section class='top_button'>
            <div class='container'>
                <div class='go_back'><a href='#'>back to top</a></div>
            </div>
        </section>
        <!--section 4-->
        
        <!--footer-->
        <footer>
            <div class='container'>
                <div class='footer_menu'>
                    <ul>
                        <li><a href='#'>&mdash; home</a></li>
                        <li><a href='#'>&mdash; about us</a></li>
                        <li><a href='#'>&mdash; products</a></li>
                        <li><a href='#'>&mdash; contact</a></li>
                    </ul>
                </div>
                <div class='social'>
                    <div class='twitter'><a href='#'><img src="images/twitter.png"></a></div>
                    <div class='facebook'><a href='#'><img src="images/facebook.png"></a></div>
                </div>
                <div class='copyrights'>
                    <p>Copyright &copy; 2010 Sample &#38; Pack, Inc.</p>
                </div>
            </div>
        </footer>
        <!--footer-->
        
        <!--SCRIPT PLACE-->
        <script src='js/app.js'></script>
        <!--SCRIPT-->
        
    </body>
</html>
