  <!-- Footer -->



  <footer>


<?php

  $query = "SELECT * FROM footer ";
$select_all_footer_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_all_footer_query)) {
   $footer_title = $row['footer_title'];
   $footer_content = $row['footer_content'];
   $footer_fb = $row['footer_fb'];
   $footer_ig = $row['footer_ig'];


?>

        <div class="flex container">
            <div class="footer-about">
                <h5><?php echo $footer_title ?></h5>
                <p><?php echo $footer_content  ?></p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-subscribe">
                
                <h5 class="follow-us">Follow Us</h5>
                <ul>
                    <li><a href="<?php echo $footer_fb ?>" target="blank"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="<?php echo $footer_ig ?> " target="blank"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
<?php }?>
        
    </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script src="js/scripts.js"></script>


    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
