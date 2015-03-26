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
          <a class="navbar-brand" href="index.php">Independent Study - Spring 2015</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="createnew.php">New BackUp</a></li>
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
        <h1>New Back Up</h1>
      </div>
    </div>
    <div id="loadSpinner" class="col-md-4" style="display:none">
        <img src="img/ajax-loader.gif" class="img-responsive center-block"/>
        <h2>Please Wait Until Your Phone BackUp Is Complete</h2>
    </div>
    <div class="container">
      <ol>
        <h3>
          <li>
            <p>Connect your device via USB then press continue. </p>
            <p><a class="btn btn-primary btn-md" href="#" id="btnStep1" role="button">Continue &raquo;</a></p>
          </li>
        </h3>
        <div style="display:none" id="step2"><h3>
          <li>
            <p>You are now ready to begin the backup, click the button below to begin.</p>
            <p><a class="btn btn-primary btn-md" href="#" id="btnStep2" role="button">Begin Backup &raquo;</a></p>
          </li>
        </h3></div>
        <div style="display:none" id="step3"><h3>
          <li>
            <p>Now unlock your device and confirm the backup operation. Press <b>Next</b> when completed, a backup can take up to a few minutes.</p>
            <p><a class="btn btn-primary btn-md" href="#" id="btnStep3" role="button">Next &raquo;</a></p>
          </li>
        </h3></div>
        <div style="display:none" id="step4"><h3>
          <li>
            <p>Please wait until your phone is complete with the backup. When your backup has been completed it can be found here. </p>
            <p><a class="btn btn-primary btn-md" href="backups.php" role="button">Continue &raquo;</a></p>
          </li>
        </h3></div>
      </ol>


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
