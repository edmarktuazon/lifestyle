<?php 
@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>PositiveLife - About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--custom style-->
    <link href="css/style.css" rel="stylesheet">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>

    <!--  Google  Fonts (regular montserrat)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Google  Font (700 montserrat) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <style>
    .container.info {
        margin-top: 50px;
    }

    p {
        line-height: 2 !important;
    }

    .about-banner {
        background-image: url("img/about-banner.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 70vh;
        width: 100%;
        margin: 0;
        padding: 0;
        background-attachment: fixed;
        position: relative;
    }

    .about-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-size: 70px;
        font-weight: 700;
    }
    </style>

</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PositiveLife</a>
            </div>
            <nav role="navigation" class="collapse navbar-collapse navbar-right">
                <ul class="navbar-nav nav">
                    <li><a href="/index.php">Home</a></li>
                    <li class="active"><a href="/about.php">About</a></li>
                    <li><a href="/share.php">Share</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="about-banner">
        <h3 class="about-title">About </h3>
    </div>
    <!-- Content -->
    <div class="container info">
        <div class="">

            <p>A lifestyle is the way that a person lives their life, including their daily habits, routines, and
                activities.
                It can
                encompass a wide range of factors, including an individual's work, home life, leisure activities,
                relationships,
                and
                overall health and well-being. Lifestyle is often used to refer to the choices and habits that a person
                makes on
                a daily
                basis, and can be shaped by a variety of factors, such as an individual's personal values, cultural
                background,
                and
                circumstances. Some people may make conscious choices about their lifestyle in order to pursue certain
                goals or
                values,
                while others may develop their lifestyle more naturally over time. In general, lifestyle is a broad term
                that
                encompasses many different aspects of a person's life, and can have a significant impact on their
                overall health
                and
                happiness.</p>
        </div>

    </div>
    <!-- Thumbnails -->
    <div class="container thumbs">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="min-height: 440px;">
                <img src="img/card-img-01.jpg" alt="" class="img-responsive">
                <div class="caption">
                    <h3 class="">Food Lifestyle</h3>
                    <p>A food lifestyle refers to the way that a person approaches food, including their dietary habits,
                        food
                        choices, and
                        attitudes towards food.</p>
                    <div class="btn-toolbar ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Read more
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body" style="text-align: left">
                                        It can encompass a wide range of practices, such as following a particular
                                        dietary restriction (such
                                        as vegetarianism
                                        or veganism), focusing on eating locally-sourced or organic foods, or following
                                        a specific eating
                                        pattern (like
                                        intermittent fasting). A food lifestyle may be influenced by a variety of
                                        factors, including
                                        personal preferences,
                                        cultural traditions, health concerns, and ethical beliefs.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="min-height: 440px;">
                <img src="img/card-img-02.jpg" alt="" class="img-responsive">
                <div class="caption">
                    <h3 class="">Active lifestyle</h3>
                    <p>An active lifestyle refers to a lifestyle that involves regularly participating in physical
                        activities and
                        sports.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter2">
                        Read more
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body" style="text-align: left">
                                    It is characterized by a focus on maintaining good physical fitness and health
                                    through regular
                                    exercise and physical
                                    activity. An active lifestyle can take many forms, and may involve activities such
                                    as going to the
                                    gym, playing team
                                    sports, running, cycling, swimming, or participating in outdoor activities such as
                                    hiking or rock
                                    climbing. Some people
                                    who follow an active lifestyle may also participate in organized sports or compete
                                    in events such as
                                    marathons or
                                    triathlons. In general, an active lifestyle is associated with a number of health
                                    benefits, including
                                    improved
                                    cardiovascular health, stronger muscles and bones, and a lower risk of chronic
                                    diseases such as
                                    obesity, diabetes, and
                                    heart disease.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="min-height: 440px;">
                <img src="img/card-img-03.jpg" alt="" class="img-responsive">
                <div class="caption">
                    <h3 class="">Creative Lifestyle</h3>
                    <p>A creative lifestyle refers to a way of living that involves pursuing artistic or creative
                        endeavors and
                        expressing
                        oneself creatively.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter3">
                        Read more
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body" style="text-align: left">
                                    This can take many forms, such as making art, writing, playing music, or engaging in
                                    any other
                                    activity that allows an
                                    individual to express their creativity and imagination. A creative lifestyle often
                                    involves a focus on
                                    personal growth
                                    and self-expression, and may involve practices such as setting aside time for
                                    creative activities,
                                    seeking out new
                                    inspiration and ideas, and taking risks and trying new things. Some people who
                                    follow a creative
                                    lifestyle may also be
                                    interested in exploring different mediums and techniques, and may be drawn to
                                    collaborative or
                                    community-oriented
                                    creative projects. In general, a creative lifestyle can be a rewarding and
                                    fulfilling way of living,
                                    and can provide
                                    opportunities for personal growth and self-expression.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Thumbnails -->

    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; 2023 PositiveLife. Created by Kristina, Maricar and Jhoncarlo. All Rights Reserved.
        </p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>