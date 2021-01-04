<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>


            <main>

                <?php






if(isset($_POST['submit'])) {

    $search = $_POST['search'];


    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
    $search_query = mysqli_query($connection, $query);

    if(!$search_query) {

        die("QUERY FAILED" . mysqli_error($connection));
    }

    $count = mysqli_num_rows($search_query);

    if($count == 0) {
        echo "<h1> NO RESULT </h1>";
    } else {
        


                while ($row = mysqli_fetch_assoc( $search_query)) {
                   $post_title = $row['post_title'];
                   $post_header = $row['post_header'];
                   $post_author = $row['post_author'];
                   $post_date = $row['post_date'];
                   $post_image = $row['post_image'];
                   $post_content = $row['post_content'];

                  
?>





<p class="lead">
        by <?php echo $post_author ?>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date;?></p>
  <section class="article">
    <img class="newsPicture" src="images/<?php echo $post_image;?>" alt="">
    <div class="text-intro">
    <h1><?php echo $post_title ?></h1>
      <p><?php echo $post_header ?></p>
    </div>
    <div class="text-body">
        <p><?php echo $post_content ?></p>
    </div>
    </section>
              <?php } 
        }
        }

        
?>
</main>


               




                

               
->

        <hr>

      <?php 
      
      include "includes/footer.php"
      
      ?>