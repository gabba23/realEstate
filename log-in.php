<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>






<br>
<br>
<br>
    <div class="log">

    <form action="includes/login.php" method="post">
      <div class="input-cont">
        <input name="username" type="text">
        <label>Username</label>
        <div class="border1"></div>
      </div>
      <div class="input-cont">
        <input name="user_password" type="password">
        <label>Password</label>
        <div class="border2"></div>
      </div>
      
    
      <div class="clear"></div>
      <input type="submit" name="login-submit" value="Sign In">   
    </form>
</div>







<?php 
      
      include "includes/footer.php"
      
      ?>
