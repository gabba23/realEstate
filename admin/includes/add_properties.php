<?php

if(isset($_POST['create_property'])) {  
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

    $query = "INSERT INTO property(property_type, property_price, property_bed, property_bath,
     property_size, property_city, property_zip, property_address, property_tags, property_google_loc, property_image)" ;

    $query .= "VALUES('{$property_type}', '{$property_price}', '{$property_bed}', '{$property_bath}', '{$property_size}', '{$property_city}',
    '{$property_zip}', '{$property_address}', '{$property_tags}', '{$property_google_loc}', '{$property_image}')" ; 

    $create_property_query = mysqli_query($connection, $query);

   confirm($create_property_query);

   $the_property_id = mysqli_insert_id($connection);

   echo "<p class='bg-success'>Property Created.<a href='../properties.php?p_id={$the_property_id}'> View property</a> or <a href='property.php'> View More Posts </a></p>";

}


?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="title">Property type</label>
        <input type="text" class="form-control" name="property_type">
    </div>

    <div class="form-group">
    <label for="title">Property price</label>
        <input type="text" class="form-control" name="property_price">
    </div>
    
    <div class="form-group">
    <label for="title">Property bed</label>
        <input type="text" class="form-control" name="property_bed">
    </div>
    
    <div class="form-group">
    <label for="title">Property bath</label>
        <input type="text" class="form-control" name="property_bath">
    </div>
    
    <div class="form-group">
    <label for="title">Property size</label>
        <input type="text" class="form-control" name="property_size">
    </div>
    
    <div class="form-group">
    <label for="title">Property city</label>
        <input type="text" class="form-control" name="property_city">
    </div>


    
    <div class="form-group">
    <label for="title">Property zip</label>
    <input type="text" class="form-control" name="property_zip">
    </div>



    <div class="form-group">
    <label for="title">Property address</label>
        <input type="text" class="form-control" name="property_address">
    </div>
    <div class="form-group">
    <label for="title">Property google location source link</label>
        <input type="text" class="form-control" name="property_google_loc">
    </div>


    <div class="form-group">
    <label for="title">Property image</label>
        <input type="file" name="property_image">
    </div>

    <div class="form-group">
    <label for="title">Property tags</label>
        <input type="text" class="form-control" name="property_tags">
    </div>

    




    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_property" value="publish property">
    </div>

</form>