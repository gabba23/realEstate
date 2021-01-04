<?php

if(isset($_POST['create_agent'])) {


    $agents_name = $_POST['agents_name'];
    $agents_role = $_POST['agents_role'];
    $agents_image = $_FILES['agents_image']['name'];
    $agents_image_temp = $_FILES['agents_image']['tmp_name'];




    move_uploaded_file($agents_image_temp, "../images/$agents_image");

    $query = "INSERT INTO agents(agents_name, agents_role, agents_image)" ;

    $query .= "VALUES('{$agents_name}', '{$agents_role}',  '{$agents_image}')" ; 

    $create_agent_query = mysqli_query($connection, $query);

   confirm($create_agent_query);

   $the_agents_id = mysqli_insert_id($connection);

   echo "<p class='bg-success'>Agent Created.<a href='../about.php?p_id={$the_agents_id}'> View agent</a> or <a href='agents.php'> View More agents </a></p>";

}


?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="title">Agents name</label>
        <input type="text" class="form-control" name="agents_name">
    </div>



    <div class="form-group">
    <label for="title">Agents role</label>
        <input type="text" class="form-control" name="agents_role">
    </div>


    <div class="form-group">
    <label for="title">Post Image</label>
        <input type="file" name="agents_image">
    </div>

    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_agent" value="Add agent">
    </div>

</form>