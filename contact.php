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
        <title>CONTACT US</title>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
            <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <style>
            #map {
                max-width: 1000px;
                height: 350px;
                width: 100%;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="subscriptions.php">Subscriptions</a></li>
                            <li><a href="catalog.php">Premium Titles</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>                                    
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
                <form role="form"  action="login.php" method="post">
                    <div class="form-group">
                        <label for="login__username">Username <span>(email address)</span></label>
                        <input class="form-control" id="login__username" name="txtEmail" type="email">
                    </div>
                    <div class="form-group">
                        <label for="login__password">Password</label>
                        <input class="form-control" id="login__password" name="txtUserPassword" type="text">
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
                <div class="sign-up">
                    <a href="createprofile.php">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        
        <div class="contact-background-image">
        <div class="container bottom-spacer">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row">
            <form role="form" action="" method="post" >
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="input-name">Your Name</label>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control" name="input-name" id="input-name" placeholder="Enter Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-email">Your Email</label>
                        <div class="input-group col-xs-12">
                            <input type="email" class="form-control" id="input-email" name="input-email" placeholder="Enter Email" required  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-message">Message</label>
                        <div class="input-group col-xs-12">
                            <textarea name="input-message" id="input-message" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-contact pull-right">
                </div>
                </form>
                <div class="col-md-7">
                    <div id="map"></div>
                </div>
        </div>
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
    </body>
</html>
