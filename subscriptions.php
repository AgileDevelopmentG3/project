<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>SUBSCRIPTIONS</title>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
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
                            <li class="active"><a href="subscriptions.php">Subscriptions</a></li>
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
            </div>
        </div>
        <div class="overlay"></div>
        <div class="container bottom-spacer">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Subscriptions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p>Tired of trying to get to the comic shop before anybody else, just so you can get a particular title&#63; Take the hassle out of comic collecting and open up a subscription box today&#33; Subscribed to three or more titles a week and get a 10&#37 discount&#46 Subscribe to 20 or more titles and get a 15&#37; discount&#33;</p>
                    <h3 class="featurette-heading">Current Subscribers</h3>
                    <p>Forget what titles you&#39;re subscribed to&#63 Just want to check if your subscribed to a upcoming title&#63 Check the titles below&#44; if your number is next to a title you are subscribed&#33; If you need to make changes to your subscriptions call or email us&#46</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Subscription Spreadsheet embed start -->
                    <iframe src="https://docs.google.com/spreadsheets/d/15n-uDdLjVU2qTKd7MNAAQESYhKAAUSB_3S6G6LI5lbI/edit?usp=sharing" width="100%" height="600px" frameborder="0" scrolling="no"></iframe>
                    <!-- Subscription Spreadsheet embed end -->
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
        <script src="js/site.js"></script>
    </body>
</html>
