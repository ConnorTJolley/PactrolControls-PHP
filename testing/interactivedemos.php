
  <!doctype html>
  <html lang="en">
    <head>

    <body>

      <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="main.html">Pactrol &middot; Create Product</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="../main.html">Home</a>
              </li> 
            </ul>
          </div>
        </nav>
      </header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Main Page for Pactrol Controls">
    <meta name="author" content="Connor Jolley | Connor.jolley@emerson.com">
    <link rel="icon" href="imgs/favicon.png">

    <title>Create &middot; Product</title>
    
    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/form.css" type="text/css"/>
    <script type="text/javascript" src="CSS/form.js"></script>
    <script type="text/javascript">
      H5F.listen(window,"load",function () {
        H5F.setup(document.getElementById("signup"));
      },false);
    </script>
    <!--Prompt for accepting Cookies / Javascript-->
    <script src="CSS/cprompt.js"></script>
    <script src="CSS/cprompt.min.js"></script>
  </head>
  <body>
    
  <main role="main">
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <!-- START THE FEATURETTES -->
        <div>
          </br>
        <center>
          </br>
          </br>
      <b>
<html>
<head>
<title>Create &middot; Product</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
  
  function checkProduct(str) {
  if (str.length==0) { 
    document.getElementById("productResult").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) 
    {
      document.getElementById("productResult").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","check_product.php?q="+str,true);
  xmlhttp.send();
}
  </script>
</head>
<body>
 <form id="signup" method="POST" action="create_product_submit.php">
  <h1>Create product!</h1>
  <h2>Fields marked (*) are required</h2>
  <fieldset>
   <ol>
    <li>
     <label for="productname">Product Name*</label> 
     <input type="text" id="P_Name" name="P_Name" onfocusout="checkProduct(this.value)" placeholder="Product Name" required />
    	<p id="productResult"></p>
		 </li>
   </ol>
   <ol>						
    <li>
     <label for="productdesc">Product Description*</label>
     <textarea rows="4" cols="100" name="P_Desc" placeholder="Provide a brief Product Description here" required></textarea>
    </li>
     <li>
     <label for="V_Num">Version Number*</label>
     <input id="V_Num" name="V_Num" type="text" placeholder="example - 1.2" required /> 
    </li>
    <li>
    <label for="Image">Select image to upload*</label>
    <input type="file" name="fileToUpload" width="100%" id="fileToUpload" placeholder="Select an image" required />
    </li>
   </ol>
	 </fieldset>
  <center>
		<input type="submit" name="submit" value="Create Product!" />
		</br>
	 </br>
	</form>
	<link rel="shortcut icon" href="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Register Page">
    <meta name="author" content="Connor Jolley">
    <link rel="icon" href="">

    <!-- Bootstrap core CSS -->
		<!--<link href="CSS/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
</head>

  <body>
		
  </body>
</html>



