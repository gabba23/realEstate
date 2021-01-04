<?php 

if(isset($_GET['p_id'])) {

   $the_hero_id = $_GET['p_id'];

}

$query = "SELECT * FROM hero WHERE hero_id = $the_hero_id";
$select_hero_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_hero_by_id)) {
    $hero_id = $row['hero_id'];
    $hero_title = $row['hero_title'];
    $hero_content = $row['hero_content'];
    $hero_image = $row['hero_image'];


}


if(isset($_POST['update_hero'])) {

    $hero_title = $_POST['hero_title'];
    $hero_content = $_POST['hero_content'];
    $hero_image = $_FILES['image']['name'];
    $hero_image_temp = $_FILES['image']['tmp_name'];


    move_uploaded_file($hero_image_temp, "../images/$hero_image");

    $query = "UPDATE hero SET " ;
    $query .="hero_title = '{$hero_title}', ";
    $query .="hero_content = '{$hero_content}', ";
    $query .="hero_image = '{$hero_image}' ";
    $query .="WHERE hero_id = {$the_hero_id} ";


    $update_hero = mysqli_query($connection, $query);

        if(empty($hero_image)) {

            $query = "SELECT * FROM hero WHERE hero_id = $the_hero_id ";
            $select_image = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_image)) {
                $hero_image = $row['hero_image'];
            }
        }

    confirm($update_hero);

    echo "<p class='bg-success'>Post Updated.<a href='../post.php?p_id={$the_hero_id}'> View post</a> or <a href='posts.php'> Edit More Posts </a></p>";

}

?>


<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
    <label for="title">Hero Title</label>
        <input value="<?php echo $hero_title; ?>" type="text" class="form-control" name="hero_title">
    </div>


    <div class="form-group">
    <label for="title">Hero content</label>
        <textarea  type="text" class="form-control" name="hero_content" id="editor" cols="30" rows="10"><?php echo $hero_content; ?></textarea>
    </div>

    
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>


    <div class="form-group">
        <img width="100" src="../images/<?php echo $hero_image;?>" alt="">
    </div>
    <div class="form-group">
    <label for="title">Hero Image</label>
        <input type="file" name="image">
    </div>




    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_hero" value="update hero">
    </div>

</form>