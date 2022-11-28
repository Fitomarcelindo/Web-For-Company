<?php session_start();
    
    echo "<body>
        <script>
            alert('Logout Success!!!')
            window.location.replace('deskripsi.php')
        </script> 
    </body>";

    session_destroy();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PAGE DISPLAY</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-form">
    <div class="row p-3 justify-content-center mt-5">
        <div class="col">
            <h1 class="text-center"> Thank You, See you next Seminar </h1>
        </div>
    </div>

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