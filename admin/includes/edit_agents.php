<?php 

if(isset($_GET['p_id'])) {

   $the_agents_id = $_GET['p_id'];

}

$query = "SELECT * FROM agents WHERE agents_id = $the_agents_id";
$select_agents_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_agents_by_id)) {
    $agents_id = $row['agents_id'];
    $agents_name = $row['agents_name'];
    $agents_role = $row['agents_role'];
    $agents_image = $row['agents_image'];


}

if(isset($_POST['update_agents'])) {

    $agents_name = $_POST['agents_name'];
    $agents_role = $_POST['agents_role'];
    $agents_image = $_FILES['agents_image']['name'];
    $agents_image_temp = $_FILES['agents_image']['tmp_name'];


    move_uploaded_file($agents_image_temp, "../images/$agents_image");

    $query = "UPDATE agents SET " ;
    $query .="agents_name = '{$agents_name}', ";
    $query .="agents_role = '{$agents_role}', ";
    $query .="agents_image = '{$agents_image}' ";
    $query .="WHERE agents_id = {$the_agents_id} ";


    $update_agents = mysqli_query($connection, $query);

        if(empty($agents_image)) {

            $query = "SELECT * FROM agents WHERE agents_id = $the_agents_id ";
            $select_image = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_image)) {
                $agents_image = $row['agents_image'];
            }
        }

    confirm($update_agents);

    echo "<p class='bg-success'>Agent Updated.<a href='../about.php?p_id={$the_agents_id}'> View Agent</a> or <a href='agents.php'> Edit More Agents </a></p>";

}

?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="title">Agents name</label>
        <input value="<?php echo $agents_name; ?>" type="text" class="form-control" name="agents_name">
    </div>
    
    <div class="form-group">
    <label for="title">Agents role</label>
        <input value="<?php echo $agents_role; ?>" type="text" class="form-control" name="agents_role"> 
    </div>

    <div class="form-group">
        <img width="100" src="../images/<?php echo $agents_image;?>" alt="">
    </div>
    <div class="form-group">
    <label for="title">Agents image</label>
        <input type="file" name="agents_image">
    </div>

 


    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_agents" value="update agent">
    </div>

</form>