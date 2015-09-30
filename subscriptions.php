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
                <form role="form">
                    <div class="form-group">
                        <label for="login__username">Username <span>(email address)</span></label>
                        <input class="form-control" id="login__username" name="login__username" type="email">
                    </div>
                    <div class="form-group">
                        <label for="login__password">Password</label>
                        <input class="form-control" id="login__password" name="login__username" type="text">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et sodales nisl. Nullam nisi purus, rhoncus a metus vel, luctus blandit ligula. Nunc ultrices vulputate lorem vitae maximus. Fusce leo purus, molestie vitae neque sed, consectetur tincidunt erat. Pellentesque tristique magna odio, id consequat sapien interdum et. Vestibulum interdum sem eu turpis pellentesque, eu fermentum ligula condimentum. Aenean tempor, massa a consectetur egestas, ex nibh ultricies mauris, sed varius ipsum mauris id elit. Aenean nunc metus, sagittis a porttitor id, tincidunt ut ligula. Nullam semper lorem ac risus pretium, sed posuere ipsum feugiat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="placeholder-block-delete-and-add-image"></div>
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
