<?php
//--------------------------->> SECRET
require_once "./config/Secret.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Include Header Scripts -->
     <?php include_once "includes/headerScripts.php";?>
      <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

 <!-- Include Navbar -->
    <?php include_once "includes/navbar.php";?>

 <main class="mb-5 container">

        <h3 class="font-time text-center my-5 text-uppercase  alert alert-primary">
            Contact us</h3>

        <h5 class="text-center w-responsive mx-auto mb-3">Do you have any questions? Please do not
            hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</h5>

            <hr/>

        <div class="row">

            <section class="col-md-7 mt-3">

                <form id="contactForm" action="" method="POST">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="">Your Email</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="3" class="form-control md-textarea"></textarea required>
                    </div>

                    <div class="text-center my-4">
                        <div class="g-recaptcha text-center" data-sitekey="<?php echo $recaptchaSiteKey ?>">
                        </div>
                    </div>

                      <!-- Response Message -->
                    <div id="responseMessage" class="mb-3"></div>

                    <div class="text-center text-md-left">
                        <input class="btn btn-primary rounded-pill px-5" type="submit" id="submit" name="submit" value="Send">
                    </div>

                </form>
            </section>


            <section class="col-md-5 text-center mt-3">
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker mb-2 fa-3x"></i>
                        <h5 class="text-success mb-5">Viva Institute of Hotel Management, <br/>
                        Motiram Plaza, Mumbai-Goa Highway. <br/>
                        Mangaon-Raigad (402 104)</h5>
                    </li>

                    <li><i class="fa fa-mobile mb-2 fa-3x"></i>
                        <h5 class="text-success mb-5">+91 9890050998/ 9657530124</h5>
                    </li>

                    <li><i class="fa fa-envelope mb-2 fa-3x"></i>
                        <h5 class="text-success">vivahotelmanagement2020@gmail.com</h5>
                    </li>
                </ul>
            </section>

        </div>
    </main>



    <!-- Include Footer -->
    <?php include_once "includes/footer.php";?>
    <!-- Include Footer Script -->
    <?php include_once "includes/footerScripts.php";?>
    <script src="js/contactUs.js"></script>

</body>

</html>