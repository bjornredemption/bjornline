<?php
/**
 * @package WordPress
 */
/*
Template Name: Test-chromatix
*/
?>
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Test</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link href="https://fonts.googleapis.com/css?family=Muli:600,900|Roboto+Slab:700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

    </head>
    <body>
        <header>
            <div class="logo">
                <a href="#home" title="logo">
                    <img class="svg" src="<?php bloginfo('template_url'); ?>/images/logo.svg" />
                </a>
            </div>
            <nav id="headernav" class="headernav">
                
                <ul>
                    <li class="phone">
                        <a href="tel:18000000">
                                <img class="svg" src="<?php bloginfo('template_url'); ?>/images/phone.svg" /> 
                                <span>1800 Number</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="mobileonly menuon">
                        <a href="#menuon" >
                            <img class="svg" src="<?php bloginfo('template_url'); ?>/images/menu.svg" />
                        </a>
                    </li>
                    <li class="mobileonly menuoff">
                        <a href="#menuoff" >
                            <img class="svg" src="<?php bloginfo('template_url'); ?>/images/cross.svg" />
                        </a>
                    </li>
                </ul>
                <ul class="menu">
                    <li><a href="#products">Products</a></li>
                    <li><a href="#inspiration">Inspiration</a></li>
                    <li><a href="#about-us" class="active">About</a></li>
                    <li><a href="#resources">Resources</a></li>
                    <li><a href="#contact">Contact</a></li>              
                </ul>
                
            </nav>              
        </header>
                
        <div class="container">
            <div class="container-wrap">
                <section class="first">
                    <h2>Section Heading</h2>
                    <p class="highlight-1">Highlight paragraph duis aute irure dolor in reprehenderit in voluptate velit energy efficiency eu di fugiat.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ventus vitae ventus consecutem terra lora magnum aqua.</p>

                    <button type="button" class="btn">Button <img class="svg" src="<?php bloginfo('template_url'); ?>/images/plus.svg" /></button>
                </section>

                <ol class="list-group">
                  <li class="list-group item"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/cross.svg" /> <span>Icon label lorem ipsum terra</span></li>
                  <li class="list-group item"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/cross.svg" /> <span>Icon label lorem</span></li>
                  <li class="list-group item"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/cross.svg" /> <span>Icon label lorem ipsum vitae</span></li>
                  <li class="list-group item"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/cross.svg" /> <span>Icon label lorem ipsum</span></li>
                </ol>

                <ul class="images">
                    <li><img src="<?php bloginfo('template_url'); ?>/images/image-foxgates.png" /></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/image-leaves.png" /></li>           
                    <li><img src="<?php bloginfo('template_url'); ?>/images/image-ocean.png" /></li>
                </ul>

                <section class='last'>
                    <button type="button" class="btn btn-primary">Button <img class="svg" src="<?php bloginfo('template_url'); ?>/images/plus.svg" /></button>
                </section>
            </div>
        </div>
                
        <footer>
            <nav id="socialnav" class="socialnav">
                <ul>
                    <li><a href="#"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/twitter.svg" /></a></li>
                    <li><a href="#"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/facebook.svg" /></a></li>
                    <li><a href="#"><img class="svg" src="<?php bloginfo('template_url'); ?>/images/instagram.svg" /></a></li>
                </ul>
            </nav>
            <nav id="footernav" class="footernav">
                <ul>
                    <li>&copy Copyright  2018 Company</li>
                    <li><a href="#privacy">Privacy</a></li>
                    <li><a href="#disclaimer">Disclaimer</a></li>
                </ul>
            </nav>
            <p class="copyright">Chromatix web design</p>

        </footer>

        
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
         <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    </body>
</html>