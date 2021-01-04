

<form action="" method="post">

<table  class="table table-bordered table-hover">

   

    <div class="col-xs-4">

        <a class="btn btn-primary" href="agents.php?source=add_agents">Add new</a>


    </div>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>View agent</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

<?php 

$query = "SELECT * FROM agents";
$select_agents = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_agents)) {
    $agents_id = $row['agents_id'];
    $agents_name = $row['agents_name'];
    $agents_role = $row['agents_role'];
    $agents_image = $row['agents_image'];

    echo "<tr>";
    echo "<td>$agents_id</td>";
    echo "<td>$agents_name</td>";
    echo "<td>$agents_role</td>";
    echo "<td><img width='100' src='../images/$agents_image' alt='image'</td>";
    echo "<td><a href='../about.php?&p_id={$agents_id}'>View Post</a></td>";
    echo "<td><a href='agents.php?source=edit_agents&p_id={$agents_id}'>Edit</a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='agents.php?delete={$agents_id}'>Delete</a></td>";
    echo "</tr>";

}

?>
                           
                        </tbody>
                </table>
                </form>

                <?php
                
                if(isset($_GET['delete'])) {

                    $the_agents_id = $_GET['delete'];

                $query = "DELETE FROM agents WHERE agents_id = {$the_agents_id}";
                $delete_query = mysqli_query($connection, $query);
                header("Location: agents.php");

                }
                
                
                ?>