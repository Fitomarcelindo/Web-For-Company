<?php session_start();

$nama = $_SESSION['username'];
$data = json_decode($_SESSION['data'], true); //ini adalah array yang menampung cokies yang berada pada file wadahregis 

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
        <h2 class="p-3 mt-3 mb-3" align="center"> Seminar Internasional PT Indonesia Power</h2>
        <form method="post" action="wadahdisplay.php">
            <h2 class="judul mt-3 mb-3" align="center">PAGE DISPLAY</h2>
            <div class="form-floating">
                <input type="text" readonly name="nama" class="form-control item" id="nama" value="<?php echo $nama; ?>">  
                <!-- penamabbahaan readonly untuk hanya memberi instukrsi dan tidak bersifat text  -->
            </div>
            <div class="form-floating">
                <input type="text"  readonly  name="email" class="form-control item" id="email" value="<?php echo $data['email'] ?>">
            </div>
            <div class="form-floating">
                <input type="text"  readonly  name="education" class="form-control item" id="Education" value="<?php echo $data['education'] ?>">
            </div>
            <div class="form-floating">
                <input type="text"  readonly  name="number" class="form-control item" id="phone-number" value="<?php echo $data['number'] ?>">
            </div>
            <div class="form-floating">
                <input type="date"  readonly  name="date" class="form-control item" id="birth-date" value="<?php echo $data['date']?>">
            </div> 
            <div class="form-group">
            <button type="submit" name="submit" class="btn btn-block create-account">Log out</button>
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