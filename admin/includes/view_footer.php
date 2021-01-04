

<form action="" method="post">

<table  class="table table-bordered table-hover">




    </div>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Facebook link</th>
                            <th>Instagram link</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

<?php 

$query = "SELECT * FROM footer";
$select_footer = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_footer)) {
    $footer_id = $row['footer_id'];
    $footer_title = $row['footer_title'];
    $footer_content = $row['footer_content'];
    $footer_fb = $row['footer_fb'];
    $footer_ig = $row['footer_ig'];

    echo "<tr>";

    ?>



<?php

    echo "<td>$footer_title</td>";
    echo "<td>$footer_content</td>";
    echo "<td><a href='$footer_fb' target='blank'>$footer_fb</a></td>";
    echo "<td><a href='$footer_ig' target='blank'>$footer_ig</a></td>";
    echo "<td><a href='footer.php?source=edit_footer&p_id={$footer_id}'>Edit</a></td>";
    echo "</tr>";

}

?>
                           
                           
                        </tbody>
                </table>
                </form>