<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Independent Study - Spring 2015</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="createnew.php">New BackUp</a></li>
            <li><a href="backups.php">View All BackUps</a></li>
            <!--<li><a href="custom.php">Create Custom BackUp</a></li>-->
            <li><a href="#">Compare BackUps</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Android Back Up</h1>
        <p>This tool is part of <a href="mailto:tud03191@temple.edu">Bill Zangardi's</a> Spring 2015 Independent Study supervised by <a href="mailto:tuf81635@temple.edu">Avinash Srinivasan</a></p>
        <p><a class="btn btn-primary btn-lg" href="createnew.php" role="button">Connect Android Device and Begin &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Features row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>New BackUp</h2>
          <p>This option will create a current back up of your applications and phone data</p>
          <p><br/><a class="btn btn-default" href="createnew.php" role="button">Select &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Past BackUps</h2>
          <p>View all past backups and select one to apply onto your device or select an existing one to customize the data you want included</p>
          <p><a class="btn btn-default" href="backups.php" role="button">Select &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Compare BackUps</h2>
          <p>Compare what has changed between backups to decide what may have caused harm to your device<br/></p>
          <p><br/><a class="btn btn-default" href="#" role="button">Select &raquo;</a></p>
        </div>
      </div>


      <hr>
      <div class="filler"></div>
      <footer>
        <p>&copy; Bill Zangardi 2015</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
