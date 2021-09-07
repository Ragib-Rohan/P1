<!DOCTYPE html>
<html lang="en">

<head>
    <!--
required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink">

    <!--Google Font -->


    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Cookie&display=swap" rel="stylesheet">

    <!--custom css-->
    <link rel="stylesheet" href="freelancingA/free.css">

    <title>FREELANCING</title>
</head>

<body>
<?php
    require "navbar.php";
    ?>
    <main class="c_all2">
    <section class="container-fluid px-0 ">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">

                    <h2>WHAT IS FREELANCING</h2>

                    <p class="lead">Freelance, freelancer, or freelance worker, are terms commonly used for a person who
                        is self-employed and not necessarily committed to a particular employer long-term. Freelance
                        workers are sometimes represented by a company or a temporary
                        agency that resells freelance labor to clients; others work independently or use professional
                        associations or websites to get work. While the term independent contractor would be used in a
                        different register of English to designate
                        the tax and employment classes of this type of worker, the term "freelancing" is most common in
                        culture and creative industries, and use of this term may indicate participation therein. Define
                        Your Goals. Identify Your Target Clients.
                        Set Strategic Prices for Your Services. Build a High-Quality Portfolio Website.Thoughtfully
                        Choose Your First Clients. Mention Potential Clients in Your Content.
                    </p>

                </div>

            </div>

            <div class="col-lg-6">
                <img class="img-fluid c1" src="freelancingA/img/p0.jpeg" alt="">

            </div>

        </div>

    </section>

    
    <section class="container-fluid px-0">
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="freelancingA/img/p4.jpeg" alt="" class="img-fluid c1">

            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">


                        <h2>WEB DESIGN</h2>

                        <p class="lead">Web design refers to the design of websites that are displayed on the internet.
                            It usually refers to the user experience aspects of website development rather than software
                            development.Web designers plan, create and code internet
                            sites and web pages, many of which combine text with sounds, pictures, graphics and video
                            clips. A web designer is responsible for creating the design and layout of a website or web
                            pages. It and can mean working on a brand
                            new website or updating an already existing site.

                        </p>


                    </div>

                </div>
            </div>
        </div>




        <section class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">


                        <h2>MOBILE APP DEVELOPMENT</h2>


                        <p class="lead">Mobile application development is the process of creating software applications
                            that run on a mobile device, and a typical mobile application utilizes a network connection
                            to work with remote computing resources.Expanding the customer
                            base and making it large is a common business goal.Mobile apps having multi-platform
                            presence let businesses get an opportunity to connect with new customers on various
                            platforms including iOS and Android. Doing this helps
                            businesses improve their customer base successfully.</p>




                    </div>

                </div>

                <div class="col-lg-6">
                    <img class="img-fluid c1" src="freelancingA/img/p2.jpeg" alt="">

                </div>

            </div>
        </section>






        <div class="row align-items-center content">

            <div class="col-md-6 order-2 order-md-1">

                <img src="freelancingA/img/p5.jpeg" alt="" class="image-fluid c1">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">

                <div class="row justify-content-center">



                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">

                        <h2>WEB DEVELOPMENT</h2>

                        <p class="lead">Web development is the building and maintenance of websites; it's the work that
                            happens behind the scenes to make a website look great, work fast and perform well with a
                            seamless user experience. Web developers, or 'devs', do this
                            by using a variety of coding languages.Front-end web development is an exciting career
                            because it's always evolving and constantly changing. This means you'll always have the
                            opportunity to interact with new tools and learn
                            new skills, keeping you engaged in your career. It's a field that provides many
                            opportunities for hands-on learning.</p>



                    </div>

                </div>
            </div>
        </div>

    </section>
    </main>




    <footer>
        <?php
        require "Footer.php";
        ?>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>


</body>

</html>