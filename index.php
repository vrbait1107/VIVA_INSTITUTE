<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viva Institute</title>
    <link rel="stylesheet" href="css/loader.css">

    <!-- Include Header Scripts -->
    <?php include_once "includes/headerScripts.php";?>
</head>

<body>

    <!-- Loader -->
    <div id="loader"></div>

    <!-- Include Navbar -->
    <?php include_once "includes/navbar.php";?>


    <main class="container">

        <div class="row my-5">

            <section class="col-md-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="images/Slide1.jpeg" class="mx-auto img-fluid" style="max-height: 600px;"
                                alt="Slide1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Slide2.jpeg" class="mx-auto img-fluid" style="max-height: 600px;"
                                alt="Slide2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Slide3.jpeg" class="mx-auto img-fluid" style="max-height: 600px;"
                                alt="Slide3">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </section>
        </div>


        <h3 class="font-time text-uppercase mb-3 text-dark text-center">
            Our Benefits</h3>

        <hr>


        <div class="row mb-5">

            <div class="col-md-4 mb-3 text-center">
                <img src="images/faculty.jpg" style="max-height: 200px;" class="img-fluid w-100" alt="faculty"
                    data-aos="fade-in">
                <h5 class="font-time alert alert-warning text-dark">Experienced Faculty</h5>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <img src="images/job.jpg" style="max-height: 200px;" class="w-100 img-fluid" alt="job"
                    data-aos="fade-in">
                <h5 class="font-time alert alert-warning text-dark">100% Job Placement Guarantee</h5>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <img src="images/Digital Classroom.jpg" style="max-height: 200px;" class="img-fluid w-100"
                    data-aos="fade-in" alt="Digital Classroom">
                <h5 class="font-time alert alert-warning text-dark">Advanced Digital Classroom</h5>
            </div>

        </div>


        <div class="row mb-5">

            <div class="col-md-4 mb-3 text-center">
                <img src="images/online courses.jpg" class="img-fluid w-100" style="max-height: 200px;"
                    data-aos="fade-in" alt="Online Course">
                <h5 class="font-time alert alert-warning text-dark">Online Courses on Youtube</h5>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <img src="images/hostel.jpg" class="img-fluid w-100" style="max-height: 200px;" data-aos="fade-in"
                    alt="Free Accomadation">
                <h5 class="font-time alert alert-warning text-dark">Free Accomodation</h5>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <img src="images/job trainer.jpg" class="img-fluid w-100" style="max-height: 200px;" data-aos="fade-in"
                    alt="Placement Trainer">
                <h5 class="font-time alert alert-warning text-dark">Placement trainer for jobs</h5>
            </div>

        </div>

        <div class="row mb-5">

            <div class="col-md-4 col-xs-12 mb-3 text-center">
                <img src="images/business trainer.jpg" class="img-fluid w-100" style="max-height: 200px;"
                    data-aos="fade-in" alt="Business Trainer">
                <h5 class="font-time alert alert-warning text-dark">Business trainer for business</h5>
            </div>

        </div>

    </main>


    <!-- Include Footer -->
    <?php include_once "includes/footer.php";?>
    <!-- Include Footer Script -->
    <?php include_once "includes/footerScripts.php";?>
    <!-- Loading JS -->
    <script src="js/loader.js"></script>

</body>

</html>