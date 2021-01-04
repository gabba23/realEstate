

<?php 

if(isset($_GET['p_id'])) {

   $the_footer_id = $_GET['p_id'];

}

$query = "SELECT * FROM footer WHERE footer_id = $the_footer_id";
$select_footer_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_footer_by_id)) {
    $footer_id = $row['footer_id'];
    $footer_title = $row['footer_title'];
    $footer_content = $row['footer_content'];
    $footer_fb = $row['footer_fb'];
    $footer_ig = $row['footer_ig'];


}


if(isset($_POST['update_footer'])) {


    $footer_title = $_POST['footer_title'];
    $footer_content = $_POST['footer_content'];
    $footer_fb = $_POST['footer_fb'];
    $footer_ig = $_POST['footer_ig'];


    $query = "UPDATE footer SET " ;
    $query .="footer_title = '{$footer_title}', ";
    $query .="footer_content = '{$footer_content}', ";
    $query .="footer_fb = '{$footer_fb}', ";
    $query .="footer_ig = '{$footer_ig}' ";
    $query .="WHERE footer_id = {$the_footer_id} ";


    $update_footer = mysqli_query($connection, $query);

       

    confirm($update_footer);

    echo "<p class='bg-success'>footer Updated.</p>";

}

?>


<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
    <label for="title">Footer Title</label>
        <input value="<?php echo $footer_title; ?>" type="text" class="form-control" name="footer_title">
    </div>


    <div class="form-group">
    <label for="title">Footer content</label>
        <textarea  type="text" class="form-control" name="footer_content" id="editor" cols="30" rows="10"><?php echo $footer_content; ?></textarea>
    </div>
    
    <div class="form-group">
    <label for="title">Footer facebook link</label>
        <input  type="text" class="form-control" name="footer_fb" id="editor" cols="30" rows="10"><?php echo $footer_fb; ?>
    </div>

    <div class="form-group">
    <label for="title">Footer instagram link</label>
        <input  type="text" class="form-control" name="footer_ig" id="editor" cols="30" rows="10"><?php echo $footer_ig; ?>
    </div>

    
    <button type="button" id="GetIconPicker" data-iconpicker-input="input#IconInput" data-iconpicker-preview="i#IconPreview">Select Icon</button>



<script>


IconPicker.Init({ 

jsonUrl: null,


});

IconPicker.Run('#GetIconPicker');

</script>

    
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>




    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_footer" value="update footer">
    </div>

</form>