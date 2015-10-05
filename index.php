<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>POWER HOUSE COMICS</title>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="slick/slick/slick.css" rel="stylesheet">
        <link href="slick/slick/slick-theme.css">
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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="subscriptions.php">Subscriptions</a></li>
                            <li><a href="catalog.php">Catalog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="login__button"><a>Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="login">
            <div class="login__innerwrapper">
                <form role="form" action="login.php" method="post">
                    <div class="form-group">
                        <label for="Email">Username <span>(email address)</span></label>
                        <input class="form-control" id="Email" name="Email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="Userpassword">Password</label>
                        <input class="form-control" id="Userpassword" name="Userpassword" type="text">
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="slider clearfix">
            <div class="slider-img" id="s-img-1"><img src="img/PHCPano.jpg" width="100%"></div>
            <div class="slider-img" id="s-img-2"><img src="img/DSCN0220.JPG" width="100%"></div>
            <div class="slider-img" id="s-img-3"><img src="img/DSCN0218.JPG" width="100%"></div>
        </div>
        <div class="container marketing text-center">
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/DSCN0229.JPG" alt="Power House Comics" width="140" >
                    <h2>Comic Storage Supplies</h2>
                    <p>Stop in today to get your comic storage supplies! We have Modern, Current, and 
Silver Age Bags and Boards as well as long and short boxes available. Some magazing
storage supplies also available.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/MatureTitlesOpt.jpg" alt="Mature Titles" width="140">
                    <h2>Mature Titles</h2>
                    <p>In addition to titles for all ages we also have a large selection of titles for mature audiences</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/GraphicNovels.jpg" alt="Graphic Novels" width="140">
                    <h2>Graphic Novels and More!</h2>
                    <p>We also have a wide selection of graphic novels, statues, busts and action figures</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><span class="text-muted">New Releases</span></h2>
                    <p class="lead"><ul>
    	<li>CONAN THE AVENGER #17</li>
	<li>FIGHT CLUB 2 #4 MAIN MACK CVR</li>
	<li>HALO ESCALATION #21</li>
	<li>HELLBOY IN HELL #7</li>
	<li>KUROSAGI CORPSE DELIVERY SERVICE OMNIBUS ED TP BOOK 01</li>
	<li>MULAN REVELATIONS #3</li>
	<li>NEW MGMT #1 MAIN KINDT CVR</li>
	<li>PASTAWAYS #6</li>
	<li>UNDOWNERS TP VOL 02</li>
	<li>TOMORROWS #2</li>
	<li>USAGI YOJIMBO SAGA LTD ED HC VOL 04</li>
	<li>USAGI YOJIMBO SAGA TP VOL 04</li>
	<li>ZODIAC STARFORCE #1</li>
	</ul>
</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
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
        <script src="js/site.js"></script>
        <script src="slick/slick/slick.js"></script>
        <script>
            $(document).ready(function(){
                $('.slider').slick({
                    arrows: false,
                    autoplay: true,
                    infinity: true,
                    pauseOnHover: false,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear'
                });
            });
        </script>
    </body>
</html>
