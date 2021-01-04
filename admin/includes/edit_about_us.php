<?php 

if(isset($_GET['p_id'])) {

   $the_about_us_id = $_GET['p_id'];

}

$query = "SELECT * FROM about_us WHERE about_us_id = $the_about_us_id";
$select_about_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_about_by_id)) {
    $about_us_id = $row['about_us_id'];   
    $about_us_h1 = $row['about_us_h1'];
    $about_us_p1 = $row['about_us_p1'];
    $about_us_image = $row['about_us_image'];
    $about_us_h2 = $row['about_us_h2'];
    $about_us_p2 = $row['about_us_p2'];
    $about_us_p3 = $row['about_us_p3'];
    $about_us_h3 = $row['about_us_h3'];
    $about_us_p4 = $row['about_us_p4'];

}


if(isset($_POST['update_about_us'])) {


   
    $about_us_h1 = $_POST['about_us_h1'];
    $about_us_p1 = $_POST['about_us_p1'];
    $about_us_image = $_FILES['about_us_image']['name'];
    $about_us_image_temp = $_FILES['about_us_image']['tmp_name'];
    $about_us_h2 = $_POST['about_us_h2'];
    $about_us_p2 = $_POST['about_us_p2'];
    $about_us_p3 = $_POST['about_us_p3'];
    $about_us_h3 = $_POST['about_us_h3'];
    $about_us_p4 = $_POST['about_us_p4'];


    move_uploaded_file($about_us_image_temp, "../images/$about_us_image");

    $query = "UPDATE about_us SET " ;
    $query .="about_us_h1 = '{$about_us_h1}', ";
    $query .="about_us_p1 = '{$about_us_p1}', ";
    $query .="about_us_image = '{$about_us_image}', ";
    $query .="about_us_h2 = '{$about_us_h2}', ";
    $query .="about_us_p2 = '{$about_us_p2}', ";
    $query .="about_us_p3 = '{$about_us_p3}', ";
    $query .="about_us_h3 = '{$about_us_h3}', ";
    $query .="about_us_p4 = '{$about_us_p4}' ";
    $query .="WHERE about_us_id = {$the_about_us_id} ";


    $update_about_us = mysqli_query($connection, $query);

        if(empty($about_us_image)) {

            $query = "SELECT * FROM about_us WHERE about_us_id = $the_about_us_id ";
            $select_image = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_image)) {
                $about_us_image = $row['about_us_image'];
            }
        }

    confirm($update_about_us);

    echo "<p class='bg-success'>About us page Updated.<a href='../about.php?p_id={$the_about_us_id}'> View page</a>";

}

?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="title">Title</label>
        <input value="<?php echo $about_us_h1; ?>" type="text" class="form-control" name="about_us_h1">
    </div>
    
    <div class="form-group">
    <label for="title">First text</label>
        <textarea  type="text" class="form-control" name="about_us_p1" id="editor1" cols="30" rows="10"><?php echo $about_us_p1; ?></textarea>
    </div>

    <div class="form-group">
        <img width="100" src="../images/<?php echo $about_us_image;?>" alt="">
    </div>
    <div class="form-group">
    <label for="title">Image</label>
        <input type="file" name="about_us_image">
    </div>

    <div class="form-group">
    <label for="title">Second title</label>
        <input value="<?php echo $about_us_h2; ?>" type="text" class="form-control" name="about_us_h2">
    </div>

    <div class="form-group">
    <label for="title">Second text</label>
        <textarea  type="text" class="form-control" name="about_us_p2" id="editor2" cols="30" rows="10"><?php echo $about_us_p2; ?></textarea>
    </div>
    <div class="form-group">
    <label for="title">Third text</label>
        <textarea  type="text" class="form-control" name="about_us_p3" id="editor3" cols="30" rows="10"><?php echo $about_us_p3; ?></textarea>
    </div>

    <div class="form-group">
    <label for="title">Third title</label>
        <input value="<?php echo $about_us_h3; ?>" type="text" class="form-control" name="about_us_h3">
    </div>


    <div class="form-group">
    <label for="title">Fourth text</label>
        <textarea  type="text" class="form-control" name="about_us_p4" id="editor4" cols="30" rows="10"><?php echo $about_us_p4; ?></textarea>
    </div>

    

<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_about_us" value="update about us page">
    </div>

</form>