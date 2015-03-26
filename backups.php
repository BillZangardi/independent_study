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
            <li><a href="createnew.php">New BackUps</a></li>
            <li class="active"><a href="backups.php">View All BackUps</a></li>
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
      </div>
    </div>

    <div class="container">
        <?php
            $customFile = $_GET['file'];
            if($customFile == null){
                $dirname = "data/backups/compressed/";
                $backups = glob($dirname."2*");
                echo "<div class=\"row\">";
                echo "<div class=\"col-lg-6\">";
                echo "<h2>BackUps</h2>";
                echo "<ol>";
                if(count($backups) <= 0){
                echo "<h4>NO BACKUPS</h4>";
                }
                else{
                  $index = count($backups);
                  //foreach($backups as $backup) {
                  for($i=count($backups)-1; $i>=0; $i--){
                    $fileName =str_replace($dirname,"",$backups[$i]);
                    echo "<h4><li>";
                    echo "<p><a href=\"data/backups/compressed/" . $fileName ."\" download><img src='img/file.png' width=50px height=50px/><span>" . $fileName . "</span></a></p>";
                    echo "<p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Apply To Phone &raquo;</a> &nbsp; <a class=\"btn btn-default\" href=\"backups.php?file=" . substr($fileName, 0, -3) ."\" role=\"button\">Customize &raquo;</a></p>";
                    echo "</li></h4>";
                    echo "<hr>";
                  }
                }
                echo "</ol></div>";
                $backups = glob($dirname."CUSTOM-*");
                echo "<div class=\"col-lg-6\">";
                echo "<h2>Custom</h2>";
                echo "<ol>";
                if(count($backups) <= 0){
                echo "<h4>NO CUSTOM BACKUPS</h4>";
                }
                else{
                  $index = count($backups);
                  //foreach($backups as $backup) {
                  for($i=count($backups)-1; $i>=0; $i--){
                    $fileName =str_replace($dirname,"",$backups[$i]);
                    echo "<h4><li>";
                    echo "<p><a href=\"data/backups/compressed/" . $fileName ."\" download><img src='img/file.png' width=50px height=50px/><span>" . $fileName . "</span></a></p>";
                    echo "<p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Apply To Phone &raquo;</a> &nbsp; <a class=\"btn btn-default\" href=\"backups.php?file=" . substr($fileName, 0, -3) ."\" role=\"button\">Customize &raquo;</a></p>";
                    echo "</li></h4>";
                    echo "<hr>";
                  }
                }
                echo "</ol></div>";
                echo "</div>";
            } else {
                echo "<h1>Select apps to be removed from custom backup</h1>";
                $execute =  'sh ' . 'unpackAB.sh ' . $customFile . ' 2>&1';
                //echo shell_exec("./Users/zangardiw/sites/Independent_Study/unpackAB.sh " . $customFile . "");
                $output = shell_exec($execute);
                //echo "<p> Output: " . $execute . "<br>" . $output . "</p>";
                $dirname = "data/backups/temp/apps/";
                $backups = glob($dirname."*");
                if(count($backups) <= 0){
                echo "Error unpacking backup";
                } else{
                  echo "<div class=\"container\">";
                  echo "<form action=\"createcustombackup.php\" method=\"post\">";
                  echo "<div class=\"row\"><div class=\"col-sm-4 col-lg-offset-4\"><input type=\"submit\" class=\"btn btn-default\" role=\"button\" value=\"Create Custom Backup\"></div></div>";
                  foreach($backups as $backup) {
                    $fileName =str_replace($dirname,"",$backup);
                    $fullFileName =str_replace($dirname,"",$backup);
                    if (strlen($fileName) > 25){
                      $fileName = substr($fileName, 0, 22) . '...';
                    }
                    echo "<div class=\"col-md-3 col-sm-4 col-xs-6\"><h6>";
                    echo "<label title=\"" . $fullFileName . "\"><input type=\"checkbox\" name=\"application[]\" value=\"" . $fullFileName . "\"><img src='img/folder.png' width=20px height=20px/><span>" . $fileName . "</span></label>";
                    #echo "<p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Apply To Phone &raquo;</a> &nbsp; <a class=\"btn btn-default\" href=\"#\" role=\"button\">Customize &raquo;</a></p>";
                    echo "</h6></div>";
                  }
                  echo "<form>";
                  echo "<hr>";
                  echo "</div>";
                }
            }
        ?>

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
