<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>

    



<br>
<br>
<br>
<br>

<div class="s003">
      <form action="search_properties.php" method="post">
        <div class="inner-form">

          <div class="input-field second-wrap">
            <input name="search_property" id="search" type="text" placeholder="Search for properties" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit" name="submit">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
      
<button class="buttons" type="submit" name="sort-price">yeet</button>
    
    </div>





<div class="main">

<ul class="propertis">
<?php
          

          $query = "SELECT * FROM  property ORDER BY property_id DESC ";
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
             $property_address = substr($row['property_address'], 0,20);
    
             $property_google_loc = $row['property_google_loc'];
             $property_image = $row['property_image'];


             
?>
  <li class="propertis_item">
    <div class="properti">
     <a href="property.php?p_id=<?php echo $property_id; ?>"><div class="properti_image"><img src="images/<?php echo $property_image?>"> </a>
      <p class="properti-type"><?php echo $property_type ?></p>
      <p class="properti-price"><?php echo $property_price ?></p>
    </div>
      <div class="properti_content">
                        <span class="beds"><?php echo $property_bed ?></span>
                        <span class="baths"><?php echo $property_bath ?></span>
                        <span class="sqft"><?php echo $property_size ?></span>
                        <address>
                        <?php echo $property_address ?>, <?php echo $property_city ?>, <?php echo $property_zip ?>
                        </address>

      </div>
    </div>
  </li>
  <?php }?>
  


  
</ul>
</div>






















    <?php 
      
      include "includes/footer.php"
      
      ?>