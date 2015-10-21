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
                        <a class="navbar-brand" href="#">Power House Comics</a>
                    </div>
                    <div id="navbar" class="navbar-right navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="subscriptions.php">Subscriptions</a></li>
                            <li class="active"><a href="catalog.php">Premium Titles</a></li>
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
                <div class="sign-up">
                    <a href="createprofile.php">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="container bottom-spacer"> 
            <div class="row">
                <div class="col-xs-12">
                    <h1>Premium Titles for Sale</h1>
                    <p>Call or email us to inquire about other titles</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/batman163.jpg"></div>
                    <h3>Batman #163</h3>
                    <h4>Grade: VG</h4>
                    <cite>Price: $30</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/amazingAdventures1.jpg"></div>
                    <h3>Amazing Adventures #1</h3>
                    <h4>Grade VF</h4>
                    <cite>Price: $46</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/superman42.jpg"></div>
                    <h3>Superman #42</h3>
                    <h4>Grade: VG+</h4>
                    <cite>Price: $250</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/challengers3.jpg"></div>
                    <h3>Challengers of the Unknown #3</h3>
                    <h4>Grade: GD+</h4>
                    <cite>Price: $70</cite>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/daredevil4.jpg"></div>
                    <h3>Daredevil #4</h3>
                    <h4>Grade: VG</h4>
                    <cite>Price: $75</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/strange209.jpg"></div>
                    <h3>Strange Adventures #209</h3>
                    <h4>Grade: VG</h4>
                    <cite>Price: $18</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/disney9.jpg"></div>
                    <h3>Walt Disney's Comics and Stories #9</h3>
                    <h4>Grade: FN-</h4>
                    <cite>Price: $400</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="comic-book-cover center-block"><img src="img/comicBookIMages/journey84.jpg"></div>
                    <h3>Journey Into Mystery #84</h3>
                    <h4>Grade: VG+</h4>
                    <cite>Price: $500</cite>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
                    <div class="placeholder-block-delete-and-add-image center-block"></div>
                    <h3>Comic Book Title</h3>
                    <h4>Comic Book Sub TItle</h4>
                    <cite>Comic Book Author</cite>
                </div>
                <div class="col-xs-6 col-sm-3 catalog-spacer">
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
        <script src="js/site.js"></script>
    </body>
</html>
