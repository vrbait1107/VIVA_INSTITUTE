<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viva Institute</title>

    <!-- Include Header Scripts -->
    <?php include_once "includes/headerScripts.php";?>
</head>

<body>

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
            Academic Features</h3>

        <hr>

        <div class="row mb-5">

            <div class="col-md-3 mb-3 text-center">
                <div class="card shadow py-5 alert alert-info" style="height: 120px;">
                    <h5 class="font-time">Advanced Digital Classroom</h5>
                </div>
            </div>

            <div class="col-md-3 mb-3 text-center">
                <div class="card shadow py-5 alert alert-info" style="height: 120px;">
                    <h5 class="font-time">Experienced Faculty</h5>
                </div>
            </div>

            <div class="col-md-3 mb-3 text-center">
                <div class="card shadow py-5 alert alert-info" style="height: 120px;">
                    <h5 class="font-time">Hotel Management Certificate</h5>
                </div>
            </div>


            <div class="col-md-3 mb-3 text-center">
                <div class="card shadow py-5 alert alert-info" style="height: 120px;">
                    <h5 class="font-time">100% Job Placement Guarantee</h5>
                </div>
            </div>
        </div>
    </main>


    <!-- Include Footer -->
    <?php include_once "includes/footer.php";?>
    <!-- Include Footer Script -->
    <?php include_once "includes/footerScripts.php";?>

</body>

</html>