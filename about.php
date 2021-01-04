<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

<?php include "includes/navigation.php" ?>

<br>
<br>
<br>




<section class="about-us">
<?php
          

          $query = "SELECT * FROM  about_us ";
          $select_all_about_query = mysqli_query($connection, $query);
          
          while ($row = mysqli_fetch_assoc( $select_all_about_query)) {
             $about_us_id = $row['about_us_id'];   
             $about_us_h1 = $row['about_us_h1'];
             $about_us_p1 = $row['about_us_p1'];
             $about_us_image = $row['about_us_image'];
             $about_us_h2 = $row['about_us_h2'];
             $about_us_p2 = $row['about_us_p2'];
             $about_us_p3 = $row['about_us_p3'];
             $about_us_h3 = $row['about_us_h3'];
             $about_us_p4 = $row['about_us_p4'];
             
?>
    <div class="about-us-container" >
        <div class="about-us-text">
            <h2><?php echo $about_us_h1 ?></h2>
            <hr class="about-us-hr">
            <br>
            <p><?php echo $about_us_p1 ?></p>

            <div class="about-us-image"> <img src="images/<?php echo $about_us_image ?>" alt=""></div>
        </div>
</div>

    <br>
    <br>    
   
    <section id="contact">
   
        <div class="container">
            <h2><?php echo $about_us_h2 ?></h2>

            <div class="flex">
                <div id="form-container">
                    
                    <p><?php echo $about_us_p2 ?>
            </p>
            <p><?php echo $about_us_p3 ?>
            </p>
            

                </div>
    
                <div id="address-container">
                <h2><?php echo $about_us_h3 ?></h2>
                <p><?php echo $about_us_p4 ?>
            </p>
           
            </div>
        </div>
        <?php }?>
    </section>



    
</section>




<section id="agents">
        <div class="container">
            <h2>Agents</h2>
            <p class="large-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>

            <div class="flex">
                <?php 
          $query = "SELECT * FROM  agents";
          $select_all_agents_query = mysqli_query($connection, $query);
          
          while ($row = mysqli_fetch_assoc( $select_all_agents_query)) {
 
             $agents_name = $row['agents_name'];
             $agents_role = $row['agents_role'];
             $agents_image = $row['agents_image'];
        

             ?>
                <div class="card2">
                    <img src="images/<?php echo $agents_image ?>" alt="Realtor 1" />
                    <h3><?php echo $agents_name ?></h3>
                    <p><?php echo $agents_role ?></p>
                </div>
<?php }?>
               
            </div>
        </div>
    </section>


    




    
    <?php 
      
      include "includes/footer.php"
      
      ?>