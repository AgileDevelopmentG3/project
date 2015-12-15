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
        <title>Premium Titles for Sale</title>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
            <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
                            <li class="active"><a href="catalog.php">Premium Titles</a></li>
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
        <div class="comic-overlay">
            <div class="center">
                <div id="comic-image"><img alt="Your Selection"/></div>
                <div id="comic-title"></div>
                <div id="comic-grade"></div>
                <div id="comic-price"></div>
                <div id="comic-desc"></div>
            </div>
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&#10005;</span></button>
        </div>
        <div class="container bottom-spacer"> 
            <div class="row">
                <div class="col-xs-12 bottom-spacer">
                    <h1>Premium Titles for Sale</h1>
                    <p>Please note that stock pictures have been used. <a href="tel:920-733-9339" alt="Click here to call us!">Call</a> or <a href="mailto:powerhousecomics@gmail.com">email</a> us if additional pictures are needed or to inquire about other titles.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/batman163.jpg"></div>
                    <div class="info">
                        <span class="title">Batman #163</span><br>
                        <span class="grade">Estimated Grade: VG</span><br>
                        <span class="price">Price: $30</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="68KJKDHWVH3FJ">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/amazingAdventures1.jpg"></div>
                    <div class="info">
                        <span class="title">Amazing Adventures #1</span><br>
                        <span class="grade">Estimated Grade: VF</span><br>
                        <span class="price">Price: $46</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="8C4TQ3ZNM5GSL">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/superman.jpg"></div>
                    <div class="info">
                        <span class="title">Superman #42</span><br>
                        <span class="grade">Estimated Grade: VG+</span><br>
                        <span class="price">Price: $250</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="3T7DSV95H8WCG">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/challengers.jpg"></div>
                    <div class="info">
                        <span class="title">Challengers of the Unknown #3</span><br>
                        <span class="grade">Estimated Grade: GD+</span><br>
                        <span class="price">Price: $70</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="PCCWRSJUK384G">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/daredevil4.jpg"></div>
                    <div class="info">
                        <span class="title">Daredevil #4</span><br>
                        <span class="grade">Estimated Grade: VG</span><br>
                        <span class="price">Price: $75</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="FFXKJLFMQNQTS">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/strange209.jpg"></div>
                    <div class="info">
                        <span class="title">Strange Adventures #209</span><br>
                        <span class="grade">Estimated Grade: VG</span><br>
                        <span class="price">Price: $18</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="LB9BKV6WU2FZS">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/disney9.jpg"></div>
                    <div class="info">
                        <span class="title">Walt Disney's Comics and Stories #9</span><br>
                        <span class="grade">Estimated Grade: FN-</span><br>
                        <span class="price">Price: $400</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="XU6JYY6S9W8P8">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/journey84.jpg"></div>
                    <div class="info">
                        <span class="title">Journey Into Mystery #84</span><br>
                        <span class="grade">Estimated Grade: VG+</span><br>
                        <span class="price">Price: $500</span><br>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam, dui at tincidunt luctus, elit ligula molestie sem, vel sagittis augue massa ac enim. Mauris non ultricies felis. Duis tincidunt tincidunt condimentum. Mauris interdum congue neque, non luctus sem accumsan nec. Nullam non viverra lacus. Vivamus eget interdum diam. Vestibulum commodo diam sapien, a tempor risus hendrerit venenatis. Quisque non justo purus. Aliquam non aliquet nisl. Curabitur et ipsum ut erat euismod accumsan. Nunc ultrices neque sit amet sem sagittis, vitae imperdiet quam tempor. Suspendisse efficitur dui pharetra felis sagittis, in mollis ante condimentum. Aenean id condimentum dui. Sed eget suscipit metus. Nam convallis iaculis facilisis. Sed at auctor purus, at vehicula dolor.</p>
                        </div>
                    </div>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="TD95Z6DPDZJJE">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
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
