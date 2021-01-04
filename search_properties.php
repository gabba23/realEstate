<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>


            <main>

                <?php






if(isset($_POST['submit'])) {

    $search = $_POST['search_property'];


    $query = "SELECT * FROM property WHERE property_tags LIKE '%$search%'  OR property_type LIKE '%$search%' 
        OR property_city LIKE '%$search%' OR property_zip LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);

    if(!$search_query) {

        die("QUERY FAILED" . mysqli_error($connection));
    }

    $count = mysqli_num_rows($search_query);

    if($count == 0) {
        echo "<h1> NO RESULT</h1>";
    }
      elseif($count > 1) {

                  
       echo   
       
       
       "
       <br>
       <br>
       <br>
       <br>
        <h1> Total results $count </h1>
       <br>
       <br>
       <div class='main'>
                <ul class='propertis'>";

        $query = "SELECT * FROM property WHERE property_tags LIKE '%$search%'  OR property_type LIKE '%$search%' 
        OR property_city LIKE '%$search%' OR property_zip LIKE '%$search%' ";
        $search_query = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_assoc( $search_query)) {
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

        echo " <li class='propertis_item'>
        <div class='properti'>
         <a href='property.php?p_id=$property_id '><div class='properti_image'><img src='images/$property_image'> </a>
          <p class='properti-type'> $property_type </p>
          <p class='properti-price'> $property_price </p>
        </div>
        
          <div class='properti_content'>
    
                            <span class='beds'>  $property_bed</span>
                            <span class='baths'> $property_bath</span>
                            <span class='sqft'> $property_size </span>
                            <address>
                            $property_address ,  $property_city , $property_zip
                            </address>
    
          </div>
        </div>
      </li>";
       }
    }
    else {
        


                while ($row = mysqli_fetch_assoc( $search_query)) {
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



<br>
<br>
<br>

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



      </div>
        </div>
</div>
<?php }}} ?>
</main>


               

        <hr>

      <?php 
      
      include "includes/footer.php"
      
      ?>