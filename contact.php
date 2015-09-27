<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Contact Us</title>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <style>
            #map {
                width: 500px;
                height: 500px;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(44.2616131,-88.4177513,15),
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="subscriptions.php">Subscriptions</a></li>
                            <li><a href="catalog.php">Catalog</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container bottom-spacer">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Contact</h1>
                </div>
            </div>
            <form role="form" action="" method="post" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-name">Your Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="input-name" id="input-name" placeholder="Enter Name" required>
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-email">Your Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="input-email" name="input-email" placeholder="Enter Email" required  >
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-message">Message</label>
                        <div class="input-group">
                            <textarea name="input-message" id="input-message" class="form-control" rows="5" required></textarea>
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                </div>
                <div class="col-md-6">
                    <div id="map"></div>
                </div>
            </form>
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
