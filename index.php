<!DOCTYPE html>
<!-- Site designed and coded by: hello@jonathangrover.com -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jonathan Grover - Interactive Artwork, Open Source Code, Design, & Teaching Resources</title>
        <meta name="description" content="Jonathan Grover - The interactive artwork, open source code, projects, design, teaching resources, and vitae of Jonathan Grover.">
        <meta name="keywords" content="jon, jonathan, grover, john, johnathan, design, web, graphic, web design, portfolio, work, art, artwork, artist, illustration, photography, mdivtimedia, new, media, applied, instructor, teaching, teacher, San Francisco, Brooklyn, Queens, New York, NYC, based, sfai, san francisco art institute, university of akron, interactive, technology">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="js/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->
        <div id="wrapper" class="clearfix">
            <aside>
                <nav class="clearfix">
                    <div id="art">
                        <h3>Artwork</h3>
                        <div>
                            <!-- <h3>2013</h3>
                            <div>
                                <a href="index.php?p=art-chimes2">Chimes no.2</a>
                            </div> --><!-- end 2013 -->
                            <!-- <h3>2012</h3>
                            <div>
                                <a href="#">...</a>
                            </div> --><!-- end 2012 -->
                            <!-- <h3>2011</h3>
                            <div>
                                <a href="#">...</a>
                            </div> --><!-- end 2011 -->
                            <h3>2010</h3>
                            <div>
                                <a href="index.php?p=art-bridge">Bridge</a>
                            </div><!-- end 2010 -->
                            <h3>2009</h3>
                            <div>
                                <a href="index.php?p=art-chimes1">Chimes no.1</a>
                                <a href="index.php?p=art-shadow">Shadow</a>
                                <a href="index.php?p=art-clotheslines">Clotheslines</a>
                                <a href="index.php?p=art-table1">Table no.1</a>
                            </div><!-- end 2009 -->
                            <h3>2008</h3>
                            <div>
                                <a href="index.php?p=art-ants">Ants</a>
                                <a href="index.php?p=art-red-push">Red Push Pull</a>
                                <a href="index.php?p=art-drums">Drum Circle</a>
                            </div><!-- end 2008 -->
                            <a href="index.php?p=exhibitions">Exhibition List</a>
                            <a href="index.php?p=statement">Statement</a>
                        </div><!-- end artwork years -->
                    </div><!-- end list1 -->
                    <!-- <a class="design" href="http://design.jonathangrover.com" target="_blank">Design</a> -->
                    <div id="code">
                        <h3>Code</h3>
                        <div>
                            <a href="index.php?p=code-max">Max-MSP</a>
                            <a href="index.php?p=code-arduino">Arduino</a>
                            <a href="index.php?p=code-js">JavaScript</a>
                            <a href="index.php?p=code-php">PHP</a>
                            <a href="index.php?p=code-ruby">Ruby</a>
                        </div><!-- end code -->
                    </div><!-- end list 2 -->
                    <div id="about">
                        <h3>About</h3>
                        <div>
                            <a href="index.php?p=info">Info</a>
                            <a href="index.php?p=bio">Biography</a>
                            <a href="index.php?p=cv">Résumé/CV</a>
                        </div><!-- end about me -->
                    </div><!-- end list3 -->
                    <a href="index.php?p=press">Press</a>
                    <a class="teaching" href="http://edu.jonathangrover.com" target="_blank">Teaching</a>
                    <a href="index.php?p=contact">Contact</a>
                    <a href="index.php?p=links">Links</a>
                    <a href="index.php?p=follow">Follow Me</a>
                </nav>
            </aside>
            <section>
                <?php 
                    switch($_GET['p']){
                        case 'art-chimes2': include('art-chimes2.php'); break;
                        case 'art-bridge': include('art-bridge.php'); break;
                        case 'art-chimes1': include('art-chimes1.php'); break;
                        case 'art-shadow': include('art-shadow.php'); break;
                        case 'art-clotheslines': include('art-clotheslines.php'); break;
                        case 'art-table1': include('art-table1.php'); break;
                        case 'art-ants': include('art-ants.php'); break;
                        case 'art-red-push': include('art-red-push.php'); break;
                        case 'art-drums': include('art-drums.php'); break;
                        case 'code-max': include('code-max.php'); break;
                        case 'code-arduino': include('code-arduino.php'); break;
                        case 'code-js': include('code-js.php'); break;
                        case 'code-php': include('code-php.php'); break;
                        case 'code-ruby': include('code-ruby.php'); break;
                        case 'exhibitions': include('exhibitions.php'); break;
                        case 'bio': include('bio.php'); break;
                        case 'statement': include('statement.php'); break;
                        case 'cv': include('cv.php'); break;
                        case 'press': include('press.php'); break;
                        case 'info': include('info.php'); break;
                        case 'contact': include('contact.php'); break;
                        case 'links': include('links.php'); break;
                        case 'follow': include('follow.php'); break;
                        default: include('info.php');
                    }
                ?>
            </section>    
        </div><!-- #wrapper -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/json2.js"></script>
        <script src="js/vendor/jquery.collapse.js"></script>
        <script src="js/vendor/jquery.collapse_storage.js"></script>
        <script src="js/vendor/jquery.collapse_cookie_storage.js"></script>
        <script src="js/vendor/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="js/vendor/fancybox/jquery.fancybox.pack.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-3839866-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>