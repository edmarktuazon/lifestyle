<!DOCTYPE html>

<html>

<head>
    <title>PositiveLife - Share</title>
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
    .container.contact {
        margin-top: 50px;
    }

    p {
        line-height: 2 !important;
    }

    .contact-banner {
        background-image: url("img/contact-banner.jpg");
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

    .contact-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-size: 70px;
        font-weight: 700;
    }

    form {
        margin-top: 50px;
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
                    <li><a href="/about.php">About</a></li>
                    <li class="active"><a href="/share.php">Share</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="contact-banner">
        <h3 class="contact-title">Share</h3>
    </div>

    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed temporibus quisquam, nulla dolores expedita eveniet blanditiis, ratione minus natus quaerat ex beatae? Beatae, ab sequi. Saepe in eveniet quae ducimus! -->
    <!-- Contact form -->
    <div class="container" style="margin-top: 50px;">
        <form action="send.php" method="post">
            <div style="margin-bottom: 30px;">
                <h3>Share Something</h3>
            </div>
            <div class="form-group">
                <label for="comment">What lifestyle are you passionate about?</label>
                <textarea class="form-control" rows="5" name="message"
                    placeholder="Example: Active lifestyle and explain it" required></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary" name="btn">
    </div>
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