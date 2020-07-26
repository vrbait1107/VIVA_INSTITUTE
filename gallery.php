<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

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

        <h3 class="text-center font-time alert alert-primary text-uppercase my-5">Institute Gallery</h3>


        <div class="row mx-auto images">

            <section class="col-md-4 mb-5">
                <a href="images/image1.jpeg">
                    <img src="images/image1.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/image2.jpeg">
                    <img src="images/image2.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/image3.jpeg">
                    <img src="images/image3.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/image4.jpeg">
                    <img src="images/image4.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/image5.jpeg">
                    <img src="images/image5.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/image6.jpeg">
                    <img src="images/image6.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/Slide1.jpeg">
                    <img src="images/Slide1.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/Slide2.jpeg">
                    <img src="images/Slide2.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

             <section class="col-md-4 mb-5">
                <a href="images/Slide3.jpeg">
                    <img src="images/Slide3.jpeg" class="img-fluid w-100" alt="images"
                        style="height:280px">
                </a>
            </section>

        </div>
    </main>

    <!-- Footer Script -->
    <?php include_once "includes/footer.php";?>

    <!-- Footer Script -->
    <?php include_once "includes/footerScripts.php";?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function () {
            $('.images').magnificPopup({
                delegate: "a",
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>

</body>

</html>