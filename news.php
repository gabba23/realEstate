<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
    
    <br>
    <br>




    <div class="s003">
      <form action="search.php" method="post">
        <div class="inner-form">

          <div class="input-field second-wrap">
            <input name="search" id="search" type="text" placeholder="Search news" />
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
    </div>








    <div class="main">

  <ul class="cards">
  <?php

$query = "SELECT * FROM  posts WHERE post_status = 'published' ORDER BY post_id DESC ";
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




        <hr>

      <?php 
      
      include "includes/footer.php"
      
      ?>