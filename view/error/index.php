<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">

    <!-- Nav bar -->
    <nav style="z-index: 10;" class="navbar navbar-default" role="navigation"><div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#yw1" type="button">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <?php echo '<ul class="navbar-left nav navbar-nav">';
            echo '<li><a class="navbar-brand" href="/cogAfrica/">COG AFRICA</a></li>';
            echo '</ul>';
            ?>
</div><div class="collapse navbar-collapse" id="yw1"></div></nav>
<!-- Page Content-->
<div class="container">
    <div class="main_header text-center">
        <h3><strong><font color=#1e90ff>404 ERROR</font></strong></h3>

        <div class="clearfix"></div>
    </div>
    <?php echo $this->msg; ?>
