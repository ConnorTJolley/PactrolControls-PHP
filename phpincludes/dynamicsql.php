<?php

include'conn.php';
$ID = $_REQUEST["ID"];



$stmt = $conn->prepare("SELECT * FROM products WHERE ID = ?");
$stmt->bind_param("s", $ID);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows>0)
{
  while($row = $result->fetch_assoc())
  {
    ?>
<center>
       <div>
              <img class="featurette-image img-fluid mx-auto" src="<?php print_r($row["Image"]); ?>" alt="<?php print_r($row["Product_Name"]); ?>">
              <h2 class="featurette-heading"><?php print_r($row["Product_Name"]); ?></h2>
              <p class="lead">
               <?php print_r("<b>Version: </b>" . $row["Revision"]); ?>
               <?php print_r("<b>Release Date: </b>" . $row["Release_Date"]); ?>
              </p>
              <p>
                <?php print_r($row["Description"]); ?>
              </p>
              <p>
                <?php print_r("£".$row["Cost"]); ?>
              </p>
            </div>
            <div class="col-md-5">
                <!-- Can add a button here to link to a purchase page -->
            </div>
          </br>
</center>
  <?php
  }
}
else
{
  print_r("No product associated with the ID of: " . $ID . " exists!");
}


