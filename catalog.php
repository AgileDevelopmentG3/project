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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHdwYJKoZIhvcNAQcEoIIHaDCCB2QCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAnltb6C1GV/MdfP1mY0YUT7NhPYlPTz3R0fYQ7wtydMeJmFsjOu8B+zzKV4ol8Kg6JO5xDilTZtiqkKVQfQ7a2PtIF1rz1pCknIUaJSQodvN+xJ285ixMoWq8s6P4NP/KkFRMnjcPeBsxxYv1csQ3oZvajqDTTb6AIGbTnjLvoXzELMAkGBSsOAwIaBQAwgfQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI/3w5uuFFNRWAgdCXv0Tmwis41dq1aptDCfu7BJl/QS1DMkaF+LRENdQQw0OfZO8wssb72uTgOyuwtrsR7V5c2wEAibMvAeAaTS91V+T+PPhJyjMFMh22hUmXdsGQoS33+qctFeIUB3PiFv5StyVw6vPqZGqXitz8oSDFIeSzr2+vfOOE04N4bcYuomW3ksyMxNlAQyRJj79SPZaFN0ZuL8ueRE0Q/j8Y213Dp3qN9uLlK2WQXq9aUkh5YzcnTCzw7bVb+gccPJgsFXNZ4Lx+eNVtRNFim+P1myW/oIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTUxMTE3MDUzMDA4WjAjBgkqhkiG9w0BCQQxFgQUCBaLMZEWyyf1r6P9xFc6KDMpQhEwDQYJKoZIhvcNAQEBBQAEgYAGz1VgTr9/7JQpNVgxA7A6Kg5r/VY5Slnd5QHuYTW5L+utCp+lB/tDOfi2eX41XcA6Lq0awLCeUYz5j2ABCvNxotX2cnxlNNHdeTfQK8oyVIo8AlW9RNSB3IolvFtOuOhTfamlTe6Ugl9jA0Qo1+TOz+wYicKeLroZ7I63nAn3Jw==-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                        ">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

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
