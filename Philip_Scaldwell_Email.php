<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Main Page for Pactrol Controls">
    <meta name="author" content="Connor Jolley | Connor.jolley@emerson.com">
    <link rel="icon" href="imgs/favicon.png">

    <title>Pactrol &middot; Email Form</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/carousel.css" rel="stylesheet">
    <!--Prompt for accepting Cookies / Javascript-->
    <script src="CSS/cprompt.js"></script>
    <!--<script src="CSS/cprompt.min.js"></script>-->
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Back</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main">
      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
       
        <!-- START THE FEATURETTES -->
        <div>
          </br>
          <?php
  
          session_start();
        
          $_SESSION["EmailToUse"]="philip.scaldwell@emerson.com";
              
          print_r("<h3>Please use the form below to email Philip Scaldwell.</h3>");
        
          ?>
         <p>
           
       <form action="submitemail3.php" method="POST">
            <input type="text" name="Subject" placeholder="Enter Subject Here" required>
            </br>
            </br>
            <textarea rows="4" cols="100" name="Message" placeholder="Enter your Message Here"></textarea>
            </br>
            </br>
            <input type="email" name="Email" size="30" placeholder="Enter your email" required>
            </br>
            </br>
            <input type="submit" name="Submit" value="Send Email!">
        </form>
           
           
           
        </div>        
        </div><!-- /.row -->
        <hr class="featurette-divider">
      </div><!-- /.container -->
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <a href="http://www.emerson.com/en-us/privacy-notice">Legal</a> Copyright © Pactrol Controls Ltd, 2010 All rights reserved
      </footer>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="CSS/popper.min.js"></script>
    <script src="CSS/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="CSS/holder.min.js"></script>
  </body>
</html
