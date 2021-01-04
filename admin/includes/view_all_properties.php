



<form action="" method="post">

<table  class="table table-bordered table-hover">

   

   

       
        <a class="btn btn-primary" href="property.php?source=add_properties">Add new</a>


   
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Beds</th>
                            <th>Baths</th>
                            <th>Size</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>Address</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>View post</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

<?php 

$query = "SELECT * FROM property";
$select_property = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_property)) {
    $property_id = $row['property_id'];   
    $property_type = $row['property_type'];
    $property_price = $row['property_price'];
    $property_bed = $row['property_bed'];
    $property_bath = $row['property_bath'];
    $property_size = $row['property_size'];
    $property_city = $row['property_city'];
    $property_zip = $row['property_zip'];
    $property_address = $row['property_address'];
    $property_tags = $row['property_tags'];
    $property_google_loc = $row['property_google_loc'];
    $property_image = $row['property_image'];




    echo "<tr>";
    echo "<td>$property_id</td>";
    echo "<td>$property_type</td>";
    echo "<td>$property_price</td>";
    echo "<td>$property_bed</td>";
    echo "<td>$property_bath</td>";
    echo "<td>$property_size</td>";
    echo "<td>$property_city</td>";
    echo "<td>$property_zip</td>";
    echo "<td>$property_address</td>";
    echo "<td>$property_tags</td>";
    echo "<td><img width='100' src='../images/$property_image' alt='image'</td>";

    echo "<td><a href='../property.php?&p_id={$property_id}'>View Property</a></td>";
    echo "<td><a href='property.php?source=edit_properties&p_id={$property_id}'>Edit</a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='property.php?delete={$property_id}'>Delete</a></td>";
    echo "</tr>";

}

?>
                           
                        </tbody>
                </table>
                </form>

                <?php
                
                if(isset($_GET['delete'])) {

                    $the_property_id = $_GET['delete'];

                $query = "DELETE FROM property WHERE property_id = {$the_property_id}";
                $delete_query = mysqli_query($connection, $query);
                header("Location: property.php");

                }
                
                
                ?>