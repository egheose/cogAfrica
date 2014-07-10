
<html>
<head>
    <title>Welcome to DYPM</title>
    <meta http-equiv="content-type" charset="utf-8" content="text/html">
    <!--<link href="style.css" rel="stylesheet" media="screen" type="text/css"> -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
    <link href="../assets/css/jquery-ui.css" rel="stylesheet" media="screen" type="text/css">
    <link href="../assets/css/stylesheet.css" rel="stylesheet" media="screen" type="text/css">
    <link href="../assets/css/js/jquery.js" rel="script" media="screen">
</head>
<body><!--
<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse">
        <?php echo $this->get_data(); ?>
    </div>
</nav>
-->
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#yw2" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php echo $this->get_data(); ?>
    </div>
    <div class="collapse navbar-collapse" id="yw2">
        <ul id="yw1" class="navbar-right nav navbar-nav" role="menu">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="/user/registration/#">ADIMN <b class="caret"></b></a>
                <ul class="dropdown-menu" id="yt1" aria-labelledby="yt1" role="menu">
                    <li visible="1"><a tabindex="-1" href="/user/login">
                            <span class="glyphicon glyphicon-log-in"></span> Login</a></li></ul></li></ul></div></nav>
<!-- Page Content-->
<div class="container">
    <div class="main_header text-center">
        <h3><strong>Registration</strong></h3>

        <div class="clearfix"></div>
    </div>

    <div class="container">
        <div id="content">


            <div class="row" style="margin-top:20px">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

                    <div class="form">
                        <form enctype="multipart/form-data" id="registration-form" action="/user/registration" method="post">
                            <p class="note">Fields with <span class="required">*</span> are required.</p>

                            <div id="registration-form_es_" class="errorSummary" style="display:none"><p>Please fix the following input errors:</p>
                                <ul><li>dummy</li></ul></div>
                            <div class="form-group float-label-control">
                                <label class="control-label required" for="RegistrationForm_username">username <span class="required">*</span></label>            <input class="form-control" placeholder="Username" name="RegistrationForm[username]" id="RegistrationForm_username" type="text" maxlength="20" />            <div id="RegistrationForm_username_em_" class="errorMessage" style="display:none"></div>            </div>

                            <div class="form-group float-label-control">
                                <label class="control-label required" for="RegistrationForm_password">password <span class="required">*</span></label>            <input class="form-control" placeholder="Password" name="RegistrationForm[password]" id="RegistrationForm_password" type="password" maxlength="128" />            <div id="RegistrationForm_password_em_" class="errorMessage" style="display:none"></div>            <p class="hint">
                                    Minimal password length 4 symbols.            </p>
                            </div>

                            <div class="form-group float-label-control">
                                <label class="control-label required" for="RegistrationForm_verifyPassword">Retype Password <span class="required">*</span></label>            <input class="form-control" placeholder="Re-type Password" name="RegistrationForm[verifyPassword]" id="RegistrationForm_verifyPassword" type="password" />            <div id="RegistrationForm_verifyPassword_em_" class="errorMessage" style="display:none"></div>            </div>

                            <div class="form-group float-label-control">
                                <label class="control-label required" for="RegistrationForm_email">E-mail <span class="required">*</span></label>            <input class="form-control" placeholder="Email" name="RegistrationForm[email]" id="RegistrationForm_email" type="text" />            <div id="RegistrationForm_email_em_" class="errorMessage" style="display:none"></div>            </div>

                            <div class="form-group float-label-control">
                                <label class="control-label required" for="Profile_firstname">First Name <span class="required">*</span></label>                <input size="60" maxlength="50" class="form-control" placeholder="firstname" name="Profile[firstname]" id="Profile_firstname" type="text" value="" />                <div id="Profile_firstname_em_" class="errorMessage" style="display:none"></div>            </div>
                            <div class="form-group float-label-control">
                                <label class="control-label required" for="Profile_lastname">Last Name <span class="required">*</span></label>                <input size="60" maxlength="50" class="form-control" placeholder="lastname" name="Profile[lastname]" id="Profile_lastname" type="text" value="" />                <div id="Profile_lastname_em_" class="errorMessage" style="display:none"></div>            </div>
                            <div class="form-group float-label-control">
                                <label class="control-label" for="Profile_birthday">Birthday</label>                <input size="60" maxlength="10" id="Profile_birthday" name="Profile[birthday]" type="text" value="0000-00-00" />                <div id="Profile_birthday_em_" class="errorMessage" style="display:none"></div>            </div>

                            <div class="buttons submit">
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="yt0" value="Register" />            </div>

                        </form>        </div><!-- form -->
                </div>
            </div>
        </div><!-- content -->
    </div>

</div>

</div>

<div class="panel-footer text-center">
    &copy; COG 2014
</div>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function($) {
        jQuery('#Profile_birthday').datepicker({'dateFormat':'yy-mm-dd'});
        $('#registration-form').yiiactiveform({'attributes':[{'inputID':'RegistrationForm_username','errorID':'RegistrationForm_username_em_'},{'inputID':'RegistrationForm_password','errorID':'RegistrationForm_password_em_'},{'inputID':'RegistrationForm_verifyPassword','errorID':'RegistrationForm_verifyPassword_em_'},{'inputID':'RegistrationForm_email','errorID':'RegistrationForm_email_em_'},{'inputID':'Profile_firstname','errorID':'Profile_firstname_em_'},{'inputID':'Profile_lastname','errorID':'Profile_lastname_em_'},{'inputID':'Profile_birthday','errorID':'Profile_birthday_em_'}],'summaryID':'registration-form_es_'});
    });
    /*]]>*/
</script>
</body>
</html>
</body>
</html>