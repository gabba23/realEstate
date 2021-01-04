
<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<?php

if(isset($_POST['ContactButton'])) {
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $privateKey = "6LcuZRIaAAAAANt2zu6Ocw6i_q09IWtkFjhy0jfR";
    $response = file_get_contents($url."?secret=".$privateKey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);
    if (isset($data->success) AND $data->success==true) {
        $error = "";
        $successMsg = "";
        if ($_POST) {
            if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                $error .= "The email is invalid!<br>";
            }
            if (!$_POST['email']) {
                $error .= "An email address is required!<br>";
            }
            if (!$_POST['subject']) {
                $error .= "A subject is required!<br>";
            }
            if (!$_POST['body']) {
                $error .= "Content in the body is required!<br>";
            }
            if ($error != "") {
                $error = '<div class="alert alert-danger" role="alert"><strong>There is an error with your form!</strong><br>' . $error . '</div>';
            } else {
                $emailTo = 'gabrieliuc11@gmail.com';
                $subject = $_POST['subject'];
                $body = $_POST['body'];
                $headers = "From: ".$_POST['email'];
                if (mail($emailTo, $subject, $body, $headers)) {
                    $successMsg = '<div class="alert alert-success" role="alert">The message has successfully been sent. We will contact you ASAP!</div>';
                } else {
                    $error = '<div class="alert alert-danger" role="alert">There was a problem sending your message, please try again later!</div>';
                }
            }
        }
    } else {
        $captchaFail = '<div class="alert alert-danger" role="alert"><strong>There is an error with your form!</strong><br>reCaptcha Verification Failed, Please Try Again.</div>';
    }
}
?>





    <!-- Navigation -->

    <section id="contact">
   
        <div class="container">
            <h2>Contact Us</h2>

            <div class="flex">
                <div id="form-container">
                    <h3>Contact Form</h3>
                    <form action="" method="post">


                        <label for="name">Name</label>
                        <input type="text" id="name"  />

                        <label for="email">Email</label>
                        <input type="text" id="email"  name="email" />

                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject"/>

                        <label for="message">Message</label>
                        <textarea id="message" name="body" placeholder="Write your message here.."></textarea>
                        
                        <div class="g-recaptcha" data-sitekey="6LcuZRIaAAAAAFWWrBAo4uzCtf8omWAZKwni9VJB"></div>
                        <br>
                        <button type="submit" name="ContactButton" class="rounded">Send Message</button>
                    </form>
                </div>





                <div id="address-container">
                    <label>Address</label>
                    <address>
                        20377 Evergreen Terrace Mountain View, California, USA 
                    </address>

                    <label>Phone</label>
                    <a href="#">232-232-2323</a>

                    <label>Email Address</label>
                    <a href="#">ouremail@domain.com</a>
                </div>
            </div>
        </div>
    </section>



<?php include "includes/footer.php" ?>