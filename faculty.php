<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faculty Page</title>

    <!-- header Scripts and Links -->
    <?php include_once "includes/headerScripts.php";?>

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha256-PZLhE6wwMbg4AB3d35ZdBF9HD/dI/y4RazA3iRDurss=" crossorigin="anonymous" />

</head>

<body>

    <!--Navbar.php-->
    <?php include_once "includes/navbar.php"?>

    <main class="container">

        <h3 class="text-center font-time alert alert-primary text-uppercase my-5">OUR FACULTY</h3>


        <div class="row mx-auto images">

            <section class="col-md-3 mb-5 text-center">
                <img src="images/vinaya.jpg" class="img-fluid shadow" alt="images" style="max-height: 230px;">
                <div class="alert alert-info">
                    <h5 class="font-time">Vinaya Dhepe</h5>
                    <h6 class="font-weight-bold font-sans">Bachelor of Arts</h6>
                    <p class="font-weight-bold font-sans">HR & Counsuler</p>
                </div>

            </section>


            <section class="col-md-3 mb-5 text-center">
                <img src="images/shubham.jpg" class="img-fluid shadow" alt="images" style="max-height: 230px;">
                <div class="alert alert-info">
                    <h5 class="font-time">Shubham Divekar</h5>
                    <h6 class="font-weight-bold font-sans">BSc Hospitality Studies</h6>
                    <p class="font-weight-bold font-sans">Lecturer</p>
                </div>


            </section>

            <section class="col-md-3 mb-5 text-center">
                <img src="images/vivek.jpg" class="img-fluid shadow" alt="images" style="max-height: 230px;">
                <div class="alert alert-info">
                    <h5 class="font-time">Shubham Divekar</h5>
                    <h6 class="font-weight-bold font-sans">BSc Hospitality Studies</h6>
                    <p class="font-weight-bold font-sans">Lecturer</p>
                </div>
            </section>

            <section class="col-md-3 mb-5 text-center">
                <img src="images/mitesh.jpg" class="img-fluid shadow" alt="images" style="max-height: 230px;">
                <div class="alert alert-info">
                    <h5 class="font-time">Mitesh Jadhav</h5>
                    <h6 class="font-weight-bold font-sans">Diploma Hotel Management</h6>
                    <p class="font-weight-bold font-sans">Visitor Lecturer</p>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer Script -->
    <?php include_once "includes/footer.php";?>

    <!-- Footer Script -->
    <?php include_once "includes/footerScripts.php";?>

</body>

</html>