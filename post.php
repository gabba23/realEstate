<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>





<br>
<br>
<br>


              <main>
  

              <?php

if(isset($_GET['p_id'])) {

    $the_post_id = $_GET['p_id'];

}

$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
$select_all_posts_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_posts_query)) {
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
  <?php } ?>
</main>










                <!-- Blog Comments -->

                <?php 
                    
                    if(isset($_POST['create_comment'])) {


                        $the_post_id = $_GET['p_id'];

                        $comment_author = $_POST['comment_author'];
                        $comment_email = $_POST['comment_email'];
                        $comment_content = $_POST['comment_content'];
                        $comment_date = date('d-m-y');

                        if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {

                            $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
                    
                            $query .= "VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unnaproved', now())";
                            
        
                            $create_comment_query = mysqli_query($connection, $query);
        
                                if(!$create_comment_query) {
                                    die('QUERY FAILED' . mysqli_error($connection));
                                }
        
        
                                $query = "UPDATE posts SET post_comment_count = post_comment_count + 1";
                                $query .= "WHERE post_id = $the_post_id ";
                                $update_comment_count = mysqli_query($connection, $query);
        
        
                            } else {

                               
                                echo "<script>alert('Fields cannot be empty')</script>";
                            }



                        }


           

                   
                    ?>



                <!-- Comments Form -->
            
                <hr>

                <!-- Posted Comments -->

                    <?php 
                    
                $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                $query .= "AND comment_status = 'approved' ";
                $query .= "ORDER BY comment_id DESC";
                $select_comment_query = mysqli_query($connection, $query);
                if(!$select_comment_query) {
                    die('Query Failed' . mysqli_error($connection));
                }
                while($row = mysqli_fetch_array($select_comment_query)) {
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                    $comment_author = $row['comment_author'];

                    ?>




             <?php }?>

            

            <div class="comment-container theme--light">
  <div class="comments" >
    <div class="card v-card v-sheet theme--light elevation-2" ><span class="headline" >Leave a comment</span>
      <div class="sign-in-wrapper" >
      <form action="" method="post" role="form">
                        <label for="Author">Author</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="comment_author">
                        </div>
                        <label for="Author">Email</label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="comment_email"></textarea>
                        </div>
                        <label for="comment">Comment</label>
                        <div class="form-group">
                            <textarea class="form-control" name="comment_content" rows="3"></textarea>
                        </div>
                        <button type="submit" name="create_comment" class="">Submit</button>
                    </form>
      </div>
      </div>
    </div>
    
    <div>

    <?php 
                    
                    $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                    $query .= "ORDER BY comment_id DESC";
                    $select_comment_query = mysqli_query($connection, $query);
                    if(!$select_comment_query) {
                        die('Query Failed' . mysqli_error($connection));
                    }
                    while($row = mysqli_fetch_array($select_comment_query)) {
                        $comment_date = $row['comment_date'];
                        $comment_content = $row['comment_content'];
                        $comment_author = $row['comment_author'];
    
                        ?>

    
      <div  class="card v-card v-sheet theme--light elevation-2">
        <div  class="header">          
          <span  class="displayName title"><?php echo $comment_author; ?></span> <span  class="displayName caption"><?php echo $comment_date; ?></span></div>
        <!---->
        <div  class="comment">
        <?php echo $comment_content; ?>
        </div>
     </div>


    <?php }?>




    </div>
        <hr>
        </div>
    


<table>
  <tr>
    <td><?php include('includes/footer.php'); ?></td>
  </tr>
<table>