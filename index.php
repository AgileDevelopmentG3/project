<?php
$OneHour = 60*60;
session_set_cookie_params($OneHour);
session_start();     
?>

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
    <!--FACEBOOK EMBED JAVASCRIPT BEGIN-->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--FACEBOOK EMBED JAVASCRIPT END-->
        <div class="aboveslider--red">
            <div class="container">
                <div class="row aboveslider__text">
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
                                    <?php
							        if (!isset($_SESSION['FirstName']))
									{
										echo('<li class="login__button"><a>Login</a></li>');
									}
									else 
									{										
										echo('<li ><a href="Logout.php">Log out</a></li>');
									}
							        
							        ?>                          
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
            </div>
        </div>
        
        <!-- MAIN CONTENT AREA -->
        
        <div class="text-center">
            <div class="container container-spacer">
                <div class="text-center">
                    <h2 class="featurette-heading bold-heading">About Power House Comics</h2>
                    <p class="lead">Appleton&#39;s only retailer dedicated to everything comics&#33; Your number one destination for new comics&#44; thousands of back issue comics&#44; trade paperbacks&#44; action figures&#44; and more&#33; Your resource for comic lovers of all ages&#44; many Gold&#44; Silver&#44; Bronze and Modern Age titles available&#46</p>
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
                                <div class="feature-inner">
                                    <div>
                                        <span>We also have a wide selection of graphic novels, statues, busts and action figures.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/storageSupplies.jpg">
                                <div class="feature-inner"> 
                                    <div>
                                        <span>Stop in today to get your comic storage supplies! We have Modern, Current, and Silver Age Bags and Boards as well as long and short boxes available. Some magazing storage supplies also available.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/MatureTitlesBooks.jpg">
                                <div class="feature-inner">     
                                    <div>
                                        <span>In addition to titles for all ages we also have a large selection of titles for mature audiences.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="feature-outer">
                                <img src="img/funkoPop.jpg">
                                <div class="feature-inner">                                    
                                    <div>
                                        <span>We also have a wide selection of graphic novels, statues, busts and action figures.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
        </div> <!-- END FLUID CONTAINER -->
        
        
        <div class="newrelease-background-image">
            <div class="container">
                <div class="row container-spacer home__titles">
                    <div class="text-center"><h2 class="bold-heading">New Releases</h2></div>
                    <div class="col-md-6">
                      <div class="text-center"><h2>All Ages Titles</h2></div>
                        <ul class="list-group">
							<?php
							$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
							$username = "bfdbdc3c11a396";
							$password = "1c82948e";		
							$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
							
							try
							{								
								$db = new PDO($dsn, $username, $password, $options);
							
								$query = "SELECT * FROM tblNewReleases WHERE Mature = 0 AND ReleaseDate BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 7 DAY)) AND NOW()";
								$statement = $db->prepare($query);
								$statement->execute();
								$new_Release =  $statement->fetch();
								
								while($new_Release != null)
								{									
									echo('<li class="list-group-item">'.$new_Release['Description'].'</li>');
									$new_Release =  $statement->fetch();	
								}		
							$statement->closeCursor();
							//$db=null;								
							}			
							catch(PDOException $e)
							{
								$error_message = $e->getMessage();
								echo ("<p>Database error: $error_message </p>");	
								$db=null;							
							}
							?>
                       </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center"><h2>Mature Titles</h2></div>
                        <ul class="list-group">
						<?php 
							try
							{								
								//$db = new PDO($dsn, $username, $password, $options);
							
								$query = "SELECT * FROM tblNewReleases WHERE Mature = 1 AND ReleaseDate BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 7 DAY)) AND NOW()";
								$statement = $db->prepare($query);
								$statement->execute();
								$new_Release =  $statement->fetch();
								
								while($new_Release != null)
								{
									$Title = $new_Release['Description'];
									echo('<li class="list-group-item">'.$Title.'</li>');
									$new_Release =  $statement->fetch();	
								}		
							$statement->closeCursor();
							$db=null;								
							}			
							catch(PDOException $e)
							{
								$error_message = $e->getMessage();
								echo ("<p>Database error: $error_message </p>");
								$db=null;								
							}
						?>
                       </ul>
                    </div>
                    
                </div>
            </div>
        </div> <!-- END FLUID CONTAINER -->
        <div>
            <div class="container">
                <div class="row container-spacer home__titles">
        <div class="col-md-6 col-md-offset-3">
                    <!--FACEBOOK EMBED BEGIN-->
                    <div class="fb-page fb-border" data-href="https://www.facebook.com/powerhouse.comics/?fref=ts" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/powerhouse.comics/?fref=ts"><a href="https://www.facebook.com/powerhouse.comics/?fref=ts">Power House Comics</a></blockquote></div></div>
                    <!--FACEBOOK EMBED END-->
                    </div>
                    </div>
                    </div>
                    </div>
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
                            <p>&copy; 2015 Power House Comics</p>
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
                        <div><p>Shop images &#169; 2015 Powerhouse Comics, All other character images property of their respective publishers</p></div>
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
