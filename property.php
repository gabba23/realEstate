<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>





<br>
<br>
<br>



  


   








  <section class="in-property">
  <?php

if(isset($_GET['p_id'])) {

    $the_property_id = $_GET['p_id'];

}

$query = "SELECT * FROM property WHERE property_id = $the_property_id";
$select_all_property_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_property_query)) {
    $property_id = $row['property_id'];   
    $property_type = $row['property_type'];
    $property_price = $row['property_price'];
    $property_bed = $row['property_bed'];
    $property_bath = $row['property_bath'];
    $property_size = $row['property_size'];
    $property_city = $row['property_city'];
    $property_zip = $row['property_zip'];
    $property_address = $row['property_address'];
    $property_google_loc = $row['property_google_loc'];
    $property_image = $row['property_image'];

?>

    <div class="in-property-container" >
        <div class="in-property-text">
            
            <br>
            <p></p>

            <div class="in-property-image"> <img src="images/<?php echo $property_image ?>" alt=""> <iframe class="google-thing" src="<?php echo $property_google_loc ?>" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div> 
            <div class="in-property-google"> </div> 
            <div class="properti_content">

                        <p class="in-properti-type"><label for=""><b> Type </b></label><?php echo $property_type ?></p>
                        <p class="in-properti-price"><label for=""><b>Price </b></label><?php echo $property_price ?></p>
                        <span class="beds"><?php echo $property_bed ?> Beds | </span>
                        <span class="baths"><?php echo $property_bath ?> Baths | </span>
                        <span class="sqft"><?php echo $property_size ?> Square meters </span>
                        <address>
                        <label for=""><b>Address: </b></label> <?php echo $property_address ?>, <?php echo $property_city ?>, <?php echo $property_zip ?>
                        </address>
                        <h3>Want to contact us about property? <a href="contact.php">Click here!</a></h3>


      </div>
        </div>
</div>



    <br>
    <br>    
   
   
        <?php }?>
  



    
    <section id="properties">
<div class="container">


            <h2>Similar properties</h2>
      

            <div id="properties-slider" class="slick">


        
            <?php



$query = "SELECT * FROM property ORDER BY RAND() LIMIT 4";
$select_all_property_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_property_query)) {
   $property_id = $row['property_id'];   
   $property_type = $row['property_type'];
   $property_price = $row['property_price'];
   $property_bed = $row['property_bed'];
   $property_bath = $row['property_bath'];
   $property_size = $row['property_size'];
   $property_city = $row['property_city'];
   $property_zip = $row['property_zip'];
   $property_address = $row['property_address'];
   $property_google_loc = $row['property_google_loc'];
   $property_image = $row['property_image'];

  
?>
            
                <div>
              
                <a href="property.php?p_id=<?php echo $property_id; ?>">    <img src="images/<?php echo $property_image ?>" alt="Property 1" /> </a>
                    <div class="property-details">
                        <p class="price"><?php echo $property_price ?></p>
                        <span class="beds"><?php echo $property_bed ?> Beds</span>
                        <span class="baths"><?php echo $property_bath ?> Baths</span>
                        <span class="sqft"><?php echo $property_size ?> Sqm</span>
                        <address>
                        <?php echo $property_address ?>
                        </address>
                    </div>
                    
                </div>
                <?php } ?>

                 
                
            </div>
            
           <a href="properties.php"> <button class="rounded">View All Property Listings</button> </a>
        </div>
        
    </section>
  




    
</section>









  


<table>
  <tr>
    <td><?php include('includes/footer.php'); ?></td>
  </tr>
<table>