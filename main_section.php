


              
    <?php





$query = "SELECT * FROM  hero";
$select_all_hero_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_hero_query)) {
$hero_id = $row['hero_id'];   
$hero_title = $row['hero_title'];
$hero_content = $row['hero_content'];
$hero_image = $row['hero_image'];


        

  
?>


<section id="hero" style="background-image: url('images/<?php echo $hero_image; ?>')" >
            <div class="fade"></div>
            <div class="hero-text">
                <h1><?php echo $hero_title; ?></h1>
                <p><?php echo $hero_content; ?></p>
            </div>
        </section>
    </div>

<?php } ?>

  


    <section id="how-it-works">
        <div class="container">
            <h2></h2>
            <div class="flex">

            <?php

$query = "SELECT * FROM  section_1";
$select_all_section_1_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_section_1_query)) {
$section_id = $row['section_1_id'];   
$section_1_title = $row['section_1_title'];
$section_1_content = $row['section_1_content'];
$section_1_image = $row['section_1_image'];


            
  
?>
                <div>
                    <span class="<?php echo $section_1_image ?>"></span>
                    <h4><?php echo $section_1_title; ?></h4>
                    <p><?php echo $section_1_content; ?></p>
                </div>



<?php  }?>
                <!-- <div>
                    <span class="fas fa-dollar-sign"></span>
                    <h4>Buy a Property.</h4>
                    <p>Lorem ipsum dolor sit amet consectectur adipisicing elit.</p>
                </div>

                <div>
                    <span class="fas fa-chart-line"></span>
                    <h4>Investing.</h4>
                    <p>Lorem ipsum dolor sit amet consectectur adipisicing elit.</p>
                </div> -->
            </div>
        </div>
    </section>
   


    <section id="properties">
<div class="container">


            <h2>Latest properties</h2>
      

            <div id="properties-slider" class="slick">


        
            <?php


$query = "SELECT * FROM  property ORDER BY property_id DESC LIMIT 8";
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

                 
                
            </div> -->
            
           <a href="properties.php"> <button class="rounded">View All Property Listings</button> </a>
        </div>
        
    </section>
  



    <div class="main">
    <h2>Latest news</h2>
<ul class="cards">
<?php

$query = "SELECT * FROM  posts WHERE post_status = 'published' ORDER BY post_id DESC LIMIT 3 ";
$select_all_posts_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_posts_query)) {
 $post_id = $row['post_id'];   
 $post_title = $row['post_title'];
 $post_author = $row['post_author'];
 $post_date = $row['post_date'];
 $post_image = $row['post_image'];
 $post_content = substr($row['post_content'],0,100) ;
 $post_status = $row['post_status'];

 if($post_status == 'published') {                  


?>
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="images/<?php echo $post_image;?>"></div>
      <div class="blog-info">
                  <a href=""><i class="far fa-user"></i> <?php echo $post_author ?></a>
              </div>
      <div class="card_content">
        <h2 class="card_title"><?php echo $post_title ?></h2>
        <br>
        <hr>
        <p class="card_text"><?php echo $post_content ?></p>
        <p><?php echo $post_date ?> </p>
        <a href="post.php?p_id=<?php echo $post_id; ?>">    <button  class="btn card_btn" >Read More</button> </a>
      </div>
    </div>
  </li>
  <?php } }?>
  

</ul>
</div>





   





    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <div class="flex">
                <div>
                    <div class="fas fa-home"></div>
                    <div class="services-card-right">
                        <h3>Search Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-dollar-sign"></div>
                    <div class="services-card-right">
                        <h3>Buy Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-chart-line"></div>
                    <div class="services-card-right">
                        <h3>Investing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-building"></div>
                    <div class="services-card-right">
                        <h3>List a Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-search"></div>
                    <div class="services-card-right">
                        <h3>Property Locator</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-mobile-alt"></div>
                    <div class="services-card-right">
                        <h3>Stated Apps</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <h2>What Our Clients Are Saying</h2>
            <div id="testimonials-slider">
                <div>
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum vitae explicabo dolore ratione. Quia iure quod ipsa blanditiis sint nulla a nam veritatis ex eos. Dicta molestiae dolorum laudantium."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/person_7.jpg" alt="Client 7" />
                        <p>Nick Andros</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum vitae explicabo dolore ratione. Quia iure quod ipsa blanditiis sint nulla a nam veritatis ex eos. Dicta molestiae dolorum laudantium."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/person_5.jpg" alt="Client 7" />
                        <p>Larry Underwood</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum vitae explicabo dolore ratione. Quia iure quod ipsa blanditiis sint nulla a nam veritatis ex eos. Dicta molestiae dolorum laudantium."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/person_8.jpg" alt="Client 7" />
                        <p>Fran Goldsmith</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
   
</body>