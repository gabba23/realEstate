

<form action="" method="post">

<table  class="table table-bordered table-hover">




    </div>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Icon</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

<?php 

$query = "SELECT * FROM hero";
$select_hero = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_hero)) {
    $hero_id = $row['hero_id'];
    $hero_title = $row['hero_title'];
    $hero_content = $row['hero_content'];
    $hero_image = $row['hero_image'];


    echo "<tr>";

    ?>



<?php

    echo "<td>$hero_title</td>";
    echo "<td>$hero_content</td>";
    echo "<td><img width='100' src='../images/$hero_image' alt='image'</td>";
    echo "<td><a href='hero.php?source=edit_hero&p_id={$hero_id}'>Edit</a></td>";
    echo "</tr>";

}

?>
                           
                           
                        </tbody>
                </table>
                </form>