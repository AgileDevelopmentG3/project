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
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
            <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
            var phcLocation = new google.maps.LatLng(44.2616169,-88.41994);
            var mapProp = {
                center:new google.maps.LatLng(44.2616169,-88.41994),
                zoom:18,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("map"), mapProp);
            var marker=new google.maps.Marker({
                position:phcLocation,
            });

            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <div class="aboveslider--red">
            <div class="container">
                <div class="row aboveslider__text bottom-spacer">
                    <div class="col-xs-12 text-center">
<!--                            Place eye catchers in p tag below, such as sales, promos, dates                  -->
                        <p>!! DC Sale 10/25 !!</p>
                    </div>
                </div>
            </div>
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&#10005;</span></button>
        </div>
        <div class="navbar-wrapper">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="img-responsive" src="img/ph-comics.png" alt="Power House Comics"></a>
                    </div>
                    <div id="navbar" class="navbar-right navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="subscriptions.php">Subscriptions</a></li>
                            <li><a href="catalog.php">Premium Titles</a></li>
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
                        <input class="form-control" id="Email" name="txtEmail" type="email">
                    </div>
                    <div class="form-group">
                        <label for="Userpassword">Password</label>
                        <input class="form-control" id="Userpassword" name="txtUserPassword" type="password">
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
                <div class="sign-up">
                    <a href="createprofile.php">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        
        <div class="slider__wrapper">
            <div class="slider clearfix">
                <div class="slider-img" id="s-img-1">
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="slider-img" id="s-img-2">
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="slider-img" id="s-img-3">
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="slider-img" id="s-img-4">
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="slider-img" id="s-img-5">
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="slider-img" id="s-img-6">
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="slider-img" id="s-img-7">
                    <div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MAIN CONTENT AREA -->
        
        <div class="text-center">
            <div class="container container-spacer">
                <div class="text-center">
                    <h2 class="featurette-heading bold-heading">About Power House Comics</h2>
                    <p class="lead">Vestibulum maximus non erat et iaculis. Phasellus ullamcorper euismod felis, non vestibulum lacus consequat at. Praesent at dictum dui. Nam mollis lorem eu lacus suscipit aliquam. Vivamus eu est eros. Praesent ut lorem magna. Etiam elit sapien, semper ut tempor id, pharetra porta libero. Vestibulum pretium a nunc id efficitur.</p>
                </div>
            </div>
        </div> <!-- END FLUID CONTAINER -->
        
        <div class="background-red">
            <div class="container">
                <div class="top-spacer container-spacer">
                    <div class="row">
                        
                       <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/GraphicNovesMore.jpg">
                                <div class="feature-inner">                                    <span>We also have a wide selection of graphic novels, statues, busts and action figures.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/storageSupplies.jpg">
                                <div class="feature-inner">                                    <span>Stop in today to get your comic storage supplies! We have Modern, Current, and Silver Age Bags and Boards as well as long and short boxes available. Some magazing storage supplies also available.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/MatureTitlesBooks.jpg">
                                <div class="feature-inner">                                    <span>In addition to titles for all ages we also have a large selection of titles for mature audiences.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/funkoPop.jpg">
                                <div class="feature-inner">                                    <span>We also have a wide selection of graphic novels, statues, busts and action figures.</span>
                                </div>
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
        </div> <!-- END FLUID CONTAINER -->
        
        
        <div class="background-image">
            <div class="container">
                <div class="row container-spacer home__titles">
                    <div class="text-center"><h2 class="bold-heading">New Releases</h2></div>
                    <div class="col-md-6">
                      <div class="text-center"><h2>All Ages Titles</h2></div>
                        <ul class="list-group">
                            <li class="list-group-item">CONAN THE AVENGER #17</li>
                            <li class="list-group-item">FIGHT CLUB 2 #4 MAIN MACK CVR</li>
                            <li class="list-group-item">HALO ESCALATION #21</li>
                            <li class="list-group-item">HELLBOY IN HELL #7</li>
                            <li class="list-group-item">KUROSAGI CORPSE DELIVERY SERVICE OMNIBUS ED TP BOOK 01</li>
                            <li class="list-group-item">MULAN REVELATIONS #3</li>
                            <li class="list-group-item">NEW MGMT #1 MAIN KINDT CVR</li>
                            <li class="list-group-item">PASTAWAYS #6</li>
                            <li class="list-group-item">UNDOWNERS TP VOL 02</li>
                            <li class="list-group-item">TOMORROWS #2</li>
                            <li class="list-group-item">USAGI YOJIMBO SAGA LTD ED HC VOL 04</li>
                            <li class="list-group-item">USAGI YOJIMBO SAGA TP VOL 04</li>
                            <li class="list-group-item">ZODIAC STARFORCE #1</li>
                       </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center"><h2>Mature Titles</h2></div>
                        <ul class="list-group">
                            <li class="list-group-item">CONAN THE AVENGER #17</li>
                            <li class="list-group-item">FIGHT CLUB 2 #4 MAIN MACK CVR</li>
                            <li class="list-group-item">HALO ESCALATION #21</li>
                            <li class="list-group-item">HELLBOY IN HELL #7</li>
                            <li class="list-group-item">KUROSAGI CORPSE DELIVERY SERVICE OMNIBUS ED TP BOOK 01</li>
                            <li class="list-group-item">MULAN REVELATIONS #3</li>
                            <li class="list-group-item">NEW MGMT #1 MAIN KINDT CVR</li>
                            <li class="list-group-item">PASTAWAYS #6</li>
                            <li class="list-group-item">UNDOWNERS TP VOL 02</li>
                            <li class="list-group-item">TOMORROWS #2</li>
                            <li class="list-group-item">USAGI YOJIMBO SAGA LTD ED HC VOL 04</li>
                            <li class="list-group-item">USAGI YOJIMBO SAGA TP VOL 04</li>
                            <li class="list-group-item">ZODIAC STARFORCE #1</li>
                       </ul>
                    </div>
                </div>
            </div>
        </div> <!-- END FLUID CONTAINER -->
        <div class="map-container">
            <div class="map-overlay">
                <div>
                    <p>Click to activate map</p> 
                </div>
            </div>
            <div id="map" class="map" style="height: 60vh; width: 100%;">
            </div>   
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div>
                            <p>&copy; 2015 Power House Comics &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <h3>Location</h3>
                            <p>807 W College Ave.</p>
                            <p>Appleton, WI 54914</p>
                            </br>
                            <h3>Phone</h3>
                            <p>920&#45;733&#45;9339</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <h3>Hours</h3>
                            <p>Tuesday: 12&#58;00 &#45; 7&#58;00 pm</p>
                            <p>Wednesday: 12&#58;00 &#45; 7&#58;00 pm</p>
                            <p>Thursday: 12&#58;00 &#45; 7&#58;00 pm</p>
                            <p>Friday: 12&#58;00 &#45; 7&#58;00 pm</p>
                            <p>Saturday: 12&#58;00 &#45; 6&#58;00 pm</p>
                            <p>Sunday: Closed</p>
                            <p>Monday: Closed</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div></div>
                    </div>
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
                    speed: 1000,
                    fade: true,
                    cssEase: 'linear'
                });
            });
        </script>
    </body>
</html>
