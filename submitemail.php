
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Main Page for Pactrol Controls">
    <meta name="author" content="Connor Jolley | Connor.jolley@emerson.com">
    <link rel="icon" href="imgs/favicon.png">

    <title>Pactrol &middot; Thank You</title>

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
          print_r("<center>");
          if(isset($_REQUEST["Submit"]))
          {
            

            print_r("<h3>Thank you for your email, Mark will reply as soon as possible.</h3>");
            print_r("</br>");
            print_r("</br>");
            
            $Header = $_REQUEST["Subject"];
            $Body = $_REQUEST["Message"];
            $Email_Used = $_REQUEST["Email"];

            function get_client_ip() 
            {
              $ipaddress = '';
              if (getenv('HTTP_CLIENT_IP'))
                  $ipaddress = getenv('HTTP_CLIENT_IP');
              else if(getenv('HTTP_X_FORWARDED_FOR'))
                  $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
              else if(getenv('HTTP_X_FORWARDED'))
                  $ipaddress = getenv('HTTP_X_FORWARDED');
              else if(getenv('HTTP_FORWARDED_FOR'))
                  $ipaddress = getenv('HTTP_FORWARDED_FOR');
              else if(getenv('HTTP_FORWARDED'))
                 $ipaddress = getenv('HTTP_FORWARDED');
              else if(getenv('REMOTE_ADDR'))
                  $ipaddress = getenv('REMOTE_ADDR');
              else
                  $ipaddress = 'UNKNOWN';
              return $ipaddress;
            }
            $IP = get_client_ip();

            $to = $_SESSION["EmailToUse"];
            $subject = $Header;
            $txt = $Body . "\n \n IP Address Email was sent from: " . $IP;
            $headers = "From: '".$Email_Used."'" . "\r\n";

            $result=mail($to,$subject,$txt,$headers);

            if($result=="True")
            {
              print_r("<h3>Email Sent successfully!</h3>");
              print_r("</br>");
              print_r("</br>");
              print_r("<p>If you are not automatically redirected within 5 seconds, please click <a href='main.html' alt='main'>Here</a></p>");
              header( "refresh:4; url=main.html" ); 
            }
            else
            {
              print_r("<h3>Something went wrong when sending the email!</h3>");
            }
          }  
          else
          {
            print_r("<h3>Something went wrong with the data you submitted!</h3>");
          }

          print_r("</center>");
          ?>
        </div>
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
