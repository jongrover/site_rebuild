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
        <meta name="keywords" content="jon, jonathan, grover, john, johnathan, design, web, graphic, web design, portfolio, work, art, artwork, artist, illustration, photography, multimedia, new, media, applied, instructor, teaching, teacher, San Francisco, Brooklyn, Queens, New York, NYC, based, sfai, san francisco art institute, university of akron, interactive, technology">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- start content -->
        <div id="wrapper">
            <aside>
                <nav>
                    <ul>
                        <li data-show="true">Artwork
                            <ul>
                                <li data-show="false">2013
                                    <ul>
                                        <li data-show="true"><a href="index.php?p=art-chimes2">Chimes no.2</a></li>
                                    </ul>
                                </li>
                                <li>2012
                                    <ul>
                                        <li>...</li>
                                    </ul>
                                </li>
                                <li>2011
                                    <ul>
                                        <li>...</li>
                                    </ul>
                                </li>
                                <li>2010
                                    <ul>
                                        <li><a href="index.php?p=art-bridge">Bridge</a></li>
                                    </ul>
                                </li>
                                <li>2009
                                    <ul>
                                        <li><a href="index.php?p=art-chimes1">Chimes no.1</a></li>
                                        <li><a href="index.php?p=art-shadow">Shadow</a></li>
                                        <li><a href="index.php?p=art-clotheslines">Clotheslines</a></li>
                                        <li><a href="index.php?p=art-table1">Table no.1</a></li>
                                    </ul>
                                </li>
                                <li>2008
                                    <ul>
                                        <li><a href="index.php?p=art-ants">Ants</a></li>
                                        <li><a href="index.php?p=art-red-push">Red Push Pull</a></li>
                                        <li><a href="index.php?p=art-drums">Drum Circle</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Code
                            <ul>
                                <li><a href="index.php?p=code-max">Max-MSP</a></li>
                                <li><a href="index.php?p=code-arduino">Arduino</a></li>
                                <li><a href="index.php?p=code-js">JavaScript</a></li>
                                <li><a href="index.php?p=code-php">PHP</a></li>
                                <li><a href="index.php?p=code-ruby">Ruby</a></li>
                            </ul>
                        </li>
                        <li><a href="http://design.jonathangrover.com" target="_blank">Design</a></li>
                        <li><a href="index.php?p=exhibitions">Exhibition List</a></li>
                        <li><a href="index.php?p=statement">Statement</a></li>
                        <li><a href="index.php?p=press">Press</a></li>
                        <li>About Me
                            <ul>
                                <li><a href="index.php?p=info">Info</a></li>
                                <li><a href="index.php?p=bio">Biography</a></li>
                                <li><a href="index.php?p=cv">Résumé/CV</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?p=contact">Contact</a></li>
                        <li><a href="index.php?p=links">Links</a></li>
                        <li><a href="index.php?p=follow">Follow Me</a></li>
                        <li><a href="http://edu.jonathangrover.com" target="_blank">Teaching</a></li>
                    </ul>
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
        <!-- end content -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="js/vendor/jquery-ui-1.8.23.custom.min.js"><\/script>')</script>
        <script src="js/vendor/jquery.cookie.js"></script>
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