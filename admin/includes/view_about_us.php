<?php


?>



<form action="" method="post">

<table  class="table table-bordered table-hover">

   

    
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>H1</th>
                            <th>P1</th>
                            <th>Image</th>
                            <th>H2</th>
                            <th>P2</th>
                            <th>P3</th>
                            <th>H3</th>
                            <th>P4</th>
                            <th>View post</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

<?php 

$query = "SELECT * FROM about_us";
$select_about = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_about)) {
    $about_us_id = $row['about_us_id'];   
    $about_us_h1 = $row['about_us_h1'];
    $about_us_p1 = $row['about_us_p1'];
    $about_us_image = $row['about_us_image'];
    $about_us_h2 = $row['about_us_h2'];
    $about_us_p2 = $row['about_us_p2'];
    $about_us_p3 = $row['about_us_p3'];
    $about_us_h3 = $row['about_us_h3'];
    $about_us_p4 = $row['about_us_p4'];



    echo "</tr>";

    echo "<td>$about_us_id</td>";
    echo "<td>$about_us_h1</td>";
    echo "<td>$about_us_p1</td>";
    echo "<td><img width='100' src='../images/$about_us_image' alt='image'</td>";
    echo "<td>$about_us_h2</td>";
    echo "<td>$about_us_p2</td>";
    echo "<td>$about_us_p3</td>";
    echo "<td>$about_us_h3</td>";
    echo "<td>$about_us_p4</td>";

    echo "<td><a href='../about.php?&p_id={$about_us_id}'>View about us page</a></td>";
    echo "<td><a href='about_us.php?source=edit_about_us&p_id={$about_us_id}'>Edit</a></td>";
    echo "</tr>";

}

?>
                           
                        </tbody>
                </table>
                </form>

     