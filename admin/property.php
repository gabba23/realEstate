<?php include "includes/header.php" ?>

    <div id="wrapper">





        <!-- Navigation -->
<?php include "includes/navigation.php" ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
               
                <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
               
               
<?php 

if(isset($_GET['source'])) {

    $source = $_GET['source'];

} else {

    $source = '';
}

switch($source) {
    case 'add_properties';
    include "includes/add_properties.php";

break;

    case 'edit_properties';
    include "includes/edit_properties.php";
break;

case '200';
echo "NICE 200";
break;

default: 

include "includes/view_all_properties.php";
break;
}



?>
    
               
               
                 </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "includes/footer.php" ?>