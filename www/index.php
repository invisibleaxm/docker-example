<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Docker for Developerz</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
 	<?php 
          if ( getenv("AUDIENCE") !== false) 
          {
            echo "<h1>Hello ".getenv("AUDIENCE")."!</h1>";
          } else {
            echo "<h1>Hello from Docker World!</h1>";
          }
        ?>         
        <p>This PHP application is running inside a docker container and can be deployed <em>anywhere*</em>.</p>
        <p><a class="btn btn-primary btn-lg" href="files/docker4developers.pptx" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Docker Installation</h2>
          <p>I also created some installation instructions that takes you step-by-step on how to get Docker up and running on a LAB environment. If you are interested in this tutorial,  you can download it from the following link. </p>
          <p><a class="btn btn-default" href="files/docker-installation.pdf" role="button">Download Tutorial &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Dockerfile</h2>
          <p>The easiest way to create a new docker image is by using a docker file. You can take a look at the one I used to build this container by following the url below. Note that you will still need to add your own content (www) and configure apache but I think this is a good start. </p>
          <p><a class="btn btn-default" href="files/Dockerfile" role="button">Get Dockerfile &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Learn More</h2>
          <p>Want to learn more about Docker? There are some great self-paced training videos available at the official <a href="https://training.docker.com/self-paced-training">Docker website</a>. You might also want to create an account with them and get access to the Docker Hub</p>
          <p><a class="btn btn-default" href="https://hub.docker.com/" role="button">Docker Hub &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
