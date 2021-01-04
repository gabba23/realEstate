<?php 

if(isset($_GET['p_id'])) {

   $the_property_id = $_GET['p_id'];

}

$query = "SELECT * FROM property WHERE property_id = $the_property_id";
$select_property_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_property_by_id)) {
    $property_type = $row['property_type'];
    $property_price = $row['property_price'];
    $property_bed = $row['property_bed'];
    $property_bath = $row['property_bath'];
    $property_size = $row['property_size'];
    $property_city = $row['property_city'];
    $property_zip = $row['property_zip'];
    $property_address = $row['property_address'];
    $property_google_loc = $row['property_google_loc'];
    $property_tags = $row['property_tags'];
    $property_image = $row['property_image'];


}


if(isset($_POST['update_property'])) {

    $property_type = $_POST['property_type'];
    $property_price = $_POST['property_price'];
    $property_bed = $_POST['property_bed'];
    $property_bath = $_POST['property_bath'];
    $property_size = $_POST['property_size'];
    $property_city = $_POST['property_city'];
    $property_zip = $_POST['property_zip'];
    $property_address = $_POST['property_address'];
    $property_google_loc = $_POST['property_google_loc'];
    $property_tags = $_POST['property_tags'];
    $property_image = $_FILES['property_image']['name'];
    $property_image_temp = $_FILES['property_image']['tmp_name'];


    move_uploaded_file($property_image_temp, "../images/$property_image");

    $query = "UPDATE property SET " ;
    $query .="property_type = '{$property_type}', ";
    $query .="property_price = '{$property_price}', ";
    $query .="property_bed = '{$property_bed}', ";
    $query .="property_bath = '{$property_bath}', ";
    $query .="property_size = '{$property_size}', ";
    $query .="property_city = '{$property_city}', ";
    $query .="property_zip = '{$property_zip}', ";
    $query .="property_address = '{$property_address}', ";
    $query .="property_google_loc = '{$property_google_loc}', ";
    $query .="property_tags = '{$property_tags}', ";
    $query .="property_image = '{$property_image}' ";
    $query .="WHERE property_id = {$the_property_id} ";


    $update_property = mysqli_query($connection, $query);

        if(empty($property_image)) {

            $query = "SELECT * FROM property WHERE property_id = $the_property_id ";
            $select_image = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_image)) {
                $property_image = $row['property_image'];
            }
        }

    confirm($update_property);

    echo "<p class='bg-success'>Property Updated.<a href='../properties.php?p_id={$the_property_id}'> View property</a> or <a href='property.php'> Edit More properties </a></p>";

}

?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="title">Property type</label>
        <input value="<?php echo $property_type; ?>" type="text" class="form-control" name="property_type">
    </div>

    
    <div class="form-group">
    <label for="title">Property price</label>
        <input type="text" class="form-control" name="property_price">
    </div>
    
    <div class="form-group">
    <label for="title">Property bed</label>
        <input value="<?php echo $property_bed; ?>" type="text" class="form-control" name="property_bed"> 
    </div>


    <div class="form-group">
    <label for="title">Property bath</label>
        <input value="<?php echo $property_bath; ?>" type="text" class="form-control" name="property_bath">
    </div>

    
    <div class="form-group">
    <label for="title">Property size</label>
        <input value="<?php echo $property_size; ?>" type="text" class="form-control" name="property_size">
    </div>

    
    <div class="form-group">
    <label for="title">Property city</label>
        <input value="<?php echo $property_city; ?>" type="text" class="form-control" name="property_city">
    </div>

    
    <div class="form-group">
    <label for="title">Property zip</label>
        <input value="<?php echo $property_zip; ?>" type="text" class="form-control" name="property_zip">
    </div>

    
    <div class="form-group">
    <label for="title">Property address</label>
        <input value="<?php echo $property_address; ?>" type="text" class="form-control" name="property_address">
    </div>
    <div class="form-group">
    <label for="title">Property google loc</label>
        <input value="<?php echo $property_google_loc; ?>" type="text" class="form-control" name="property_google_loc">
    </div>

    <div class="form-group">
    <label for="title">Property address</label>
        <input value="<?php echo $property_address; ?>" type="text" class="form-control" name="property_address">
    </div>



    <div class="form-group">
        <img width="100" src="../images/<?php echo $property_image;?>" alt="">
    </div>
    <div class="form-group">
    <label for="title">Property image</label>
        <input type="file" name="property_image">
    </div>

    <div class="form-group">
    <label for="title">Property tags</label>
        <input value="<?php echo $property_tags; ?>" type="text" class="form-control" name="property_tags">
    </div>



    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_property" value="update property">
    </div>

</form>