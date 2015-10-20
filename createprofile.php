<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>CREATE PROFILE</title>
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
                <form role="form">
                    <div class="form-group"  action="login.php" method="post">
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
        <div class="container">
           <form class="form-horizontal" action="newAccount.php" method="post">
            <fieldset>

            <!-- Form Name -->
            <h1>Sign Up</h1>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="fn">First name</label>  
              <div class="col-md-4">
              <input id="fn" name="first-name" type="text" placeholder="first name" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ln">Last name</label>  
              <div class="col-md-4">
              <input id="ln" name="last-name" type="text" placeholder="last name" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="add1">Address 1</label>  
              <div class="col-md-4">
              <input id="add1" name="address1" type="text" placeholder="" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="add2">Address 2</label>  
              <div class="col-md-4">
              <input id="add2" name="address2" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="city">City</label>  
              <div class="col-md-4">
              <input id="city" name="city" type="text" placeholder="city" class="form-control input-md" required="">

              </div>
            </div>
                
            <div class="form-group">
              <label class="col-md-4 control-label" for="selectbasic">State</label>
              <div class="col-md-4">
                <select id="selectbasic" name="state" class="form-control input-md">
                   
                    <option value="AL">Alabama</option>

                    <option value="AK">Alaska</option>

                    <option value="AZ">Arizona</option>

                    <option value="AR">Arkansas</option>    

                    <option value="CA">California</option>    

                    <option value="CO">Colorado</option>    

                    <option value="CT">Connecticut</option>    

                    <option value="DE">Delaware</option>    

                    <option value="DC">District Of Columbia</option>    

                    <option value="FL">Florida</option>    

                    <option value="GA">Georgia</option>    

                    <option value="HI">Hawaii</option>    

                    <option value="ID">Idaho</option>    

                    <option value="IL">Illinois</option>    

                    <option value="IN">Indiana</option>    

                    <option value="IA">Iowa</option>    

                    <option value="KS">Kansas</option>    

                    <option value="KY">Kentucky</option>    

                    <option value="LA">Louisiana</option>    

                    <option value="ME">Maine</option>

                    <option value="MD">Maryland</option>

                    <option value="MA">Massachusetts</option>

                    <option value="MI">Michigan</option>

                    <option value="MN">Minnesota</option>

                    <option value="MS">Mississippi</option>

                    <option value="MO">Missouri</option>

                    <option value="MT">Montana</option>

                    <option value="NE">Nebraska</option>    

                    <option value="NV">Nevada</option>    

                    <option value="NH">New Hampshire</option>    

                    <option value="NJ">New Jersey</option>    

                    <option value="NM">New Mexico</option>

                    <option value="NY">New York</option>    

                    <option value="NC">North Carolina</option>

                    <option value="ND">North Dakota</option>

                    <option value="OH">Ohio</option>    

                    <option value="OK">Oklahoma</option>

                    <option value="OR">Oregon</option>

                    <option value="PA">Pennsylvania</option>

                    <option value="RI">Rhode Island</option>

                    <option value="SC">South Carolina</option>

                    <option value="SD">South Dakota</option>

                    <option value="TN">Tennessee</option>

                    <option value="TX">Texas</option>

                    <option value="UT">Utah</option>

                    <option value="VT">Vermont</option>    

                    <option value="VA">Virginia</option>

                    <option value="WA">Washington</option>    

                    <option value="WV">West Virginia</option>    

                    <option value="WI">Wisconsin</option>

                    <option value="WY">Wyoming</option>
                    
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="zip">Zip Code</label>  
              <div class="col-md-4">
              <input id="zip" name="zip" type="text" placeholder="Zip Code" class="form-control input-md" required="">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="phone">Phone Number</label>  
              <div class="col-md-4">
              <input id="phone" name="phone" type="text" placeholder="Phone#" class="form-control input-md" required="">

              </div>
            </div>
                
            <div class="form-group">
              <label class="col-md-4 control-label" for="phone">Password</label>  
              <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required>

              </div>
            </div>
                
            <div class="form-group">
              <label class="col-md-4 control-label" for="phone">Re-enter Password</label>  
              <div class="col-md-4">
              <input id="re-password" name="re-password" type="password" placeholder="password" class="form-control input-md" required>

              </div>
            </div>


            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
              </div>
            </div>

            </fieldset>
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
        <script src="js/site.js"></script>
    </body>
</html>
