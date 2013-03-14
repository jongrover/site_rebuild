<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>test</title>
        <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.1.custom.min.css">
    </head> 
    <body>       
        <div class="appmenu">
            <div class="accordion">
                <h3><a href="#">Artwork</a></h3>
                <div class="accordion">
                    <h3>2013</h3>
                    <div>
                        <a href="#">1</a><br>
                        <a href="#">2</a><br>
                        <a href="#">3</a>          
                    </div>
                    <h3>2012</h3>
                    <div>
                        <a href="#">A</a><br>
                        <a href="#">B</a><br>
                        <a href="#">C</a>           
                    </div>
                </div>
                <h3><a href="#">code</a></h3>
                <div>
                    <a href="#">x</a><br>
                    <a href="#">y</a><br>
                    <a href="#">z</a>
                </div>
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.cookie.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function(){
                var act = 0;
                $('.accordion').accordion({
                    create: function(event, ui) {
                        //get index in cookie on accordion create event
                        if($.cookie('saved_index') != null){
                           act =  parseInt($.cookie('saved_index'));
                        }
                    },
                    change: function(event, ui) {
                        //set cookie for current index on change event
                        $.cookie('saved_index', null);
                        $.cookie('saved_index', ui.options.active);
                    },
                    active:parseInt($.cookie('saved_index')),
                    autoHeight: false,
                    collapsible: true
                });
            });
        </script>
    </body>
</html>