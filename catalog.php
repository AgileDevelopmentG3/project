<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Carousel Template for Bootstrap</title>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar-wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Power House Comics</a>
                    </div>
                    <div id="navbar" class="navbar-right navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="subscriptions.php">Subscriptions</a></li>
                            <li><a href="catalog.php">Catalog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container bottom-spacer"> 
            <div class="row">
                <div class="col-xs-12">
                    <h1>Catalog</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $(window).on('resize load', function() {
                    $('body').css({"padding-top": $(".navbar").height() + "px"});
                });
            });
        </script>
    </body>
</html>
