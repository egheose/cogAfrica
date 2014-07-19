<!DOCTYPE html>
<html>
<head>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
    <link href="./assets/css/jquery-ui.css" rel="stylesheet" media="screen" type="text/css">
    <link href="./assets/css/stylesheet.css" rel="stylesheet" media="screen" type="text/css">
    <link href="./assets/css/js/jquery.js" rel="script" media="screen">
    <title>COG  - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">

    <!-- Nav bar -->
    <nav style="z-index: 10;" class="navbar navbar-default" role="navigation"><div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#yw1" type="button">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <?php echo $this->get_data(); ?>
        </div><div class="collapse navbar-collapse" id="yw1"></div></nav>
    <!-- Page Content-->
    <div class="container">
        <div class="main_header text-center">
            <h3><strong>Login</strong></h3>

            <div class="clearfix"></div>
        </div>

        <div class="container">
            <div id="content">



                <div class="row" style="margin-top:20px">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

                        <h3 class="text-primary">Please fill out the following form with your login credentials:</h3>

                        <div class="form">
                            <form id="login-form" action="/user/login" method="post">
                                <h6 class="note text-warning"><em>Fields with <span class="required">*</span> are required.</em></h6>

                                <h6 style="color: #ff0000"> </h6>

                                <div class="form-group">
                                    <label class="control-label required" for="UserLogin_username">username or email <span class="required">*</span></label>                    <input class="form-control" placeholder="Username or Email" name="UserLogin[username]" id="UserLogin_username" type="text" />                </div>

                                <div class="form-group">
                                    <label class="control-label required" for="UserLogin_password">password <span class="required">*</span></label>                    <input class="form-control" placeholder="Password" name="UserLogin[password]" id="UserLogin_password" type="password" />                </div>

                                <div class="form-group">
                                    <p class="hint">
                                        <a href="/cogAfrica/registration">Register</a> | <a href="/user/recovery">Lost Password?</a>                    </p>
                                </div>

                                <div class="buttons">
                 <span class="button-checkbox">
                        <input class="btn btn-lg btn-success btn-block" type="submit" name="yt0" value="Login" />                    </span>

                                </div>

                            </form>            </div><!-- form -->


                    </div>
                </div>


            </div><!-- content -->
        </div>

    </div>

</div>
<div>
    &nbsp;
</div>
<div class="panel-footer text-center">
    &copy; COG 2014
</div>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>