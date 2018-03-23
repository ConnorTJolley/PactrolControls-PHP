<?php
 
//SQL database connection info
include 'conn.php';

//Use prepared SQL statements to check database against users credentials entered
if ($stmt = $conn->prepare("SELECT * FROM products ORDER BY ID DESC LIMIT 3")) 
{

  //execute query
  $stmt->execute();

  //bind the result into variables
  $result = $stmt->get_result();        //Had to install GET RESULT as while statement wasn't working with fetch
  
  //Code to install GET RESULT using SSH terminal
  
  //sudo apt-get install php5-mysqlnd
  
  //restart code
  
  //sudo /etc/init.d/apache2 restart

  while ($row = $result->fetch_assoc())
  { 
    $ID = $row["ID"];
    ?>
    <center>
      <div>
            <img class="featurette-image img-fluid mx-auto" src="<?php print_r($row["Image"]); ?>" alt="<?php print_r($row["Product_Name"]); ?>">
            <h2 class="featurette-heading"><?php print_r($row["Product_Name"]); ?></h2>
            <p class="lead">
             <?php print_r("<b>Version: </b>" . $row["Revision"]); ?>
        </br>
             <?php print_r("<b>Release Date: </b>" . $row["Release_Date"]); ?>
            </p>
          </div>
          <div class="col-md-5">
            <?php echo '<a class="btn btn-sm btn-primary" href="productinfo.php?ID=' . urlencode($ID) .  '">View More Information</a>'; ?>  
          </div>
        </br>
    </center>
    <?php
  }

  $stmt->close();
}

?>
  
  
  
