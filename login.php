<?php session_start()?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Forms Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="registration-form">
        <h2 class="p-3 mt-3 mb-3"> Seminar Internasional PT Indonesia Power</h2>
        <form method="post" action="wadahlogin.php">
            <h2 class="judul mt-3 mb-3" align="center">LOGIN</h2>
            <div class="form-icon" style="background-color: yellow;">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="nama" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password">
            </div>
            <div class="form-group">
            <button type="submit" name="submit" class="btn btn-block create-account">Sign In</button>
            </div>
        </form>

        <!-- SECTION MEDIA -->
        <div class="social-media">
            <h5> social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
        <!-- SECTION LAST MEDIA -->
    </div>

    <!-- section footer -->
    <footer>
        <div class="footer-bottom bg-primary py-2 w-100 text-center">
            <p class="m-0 text-white semi-bold fs-5"> Copyright @KELOMPOKAFK </p>
        </div>
    </footer>
    <!-- footer finish -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>