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
    <!-- finish style -->
    <script>
        var captcha = new Array();

        function validateRecaptcha() {
            var recaptcha = document.getElementById("recaptcha").value;;
            var validRecaptcha = 0;
            for (var z = 0; z < 6; z++) {
                if (recaptcha.charAt(z) != captcha[z]) {
                    validRecaptcha++;
                }
            }
            if (recaptcha == "") {
                document.getElementById('errCaptcha').innerHTML = 'Re-Captcha must be filled';
            } else if (validRecaptcha > 0 || recaptcha.length > 6) {
                document.getElementById('errCaptcha').innerHTML = 'Sorry, Wrong Re-Captcha';
            } else {
                document.getElementById('errCaptcha').innerHTML = 'OK';
            }
        }
        function createCaptcha() {
            for (q = 0; q < 6; q++) {
                if (q % 2 == 0) {
                    captcha[q] = String.fromCharCode(Math.floor((Math.random() * 26) + 65));
                } else {
                    captcha[q] = Math.floor((Math.random() * 10) + 0);
                }
            }
            thecaptcha = captcha.join("");
            document.getElementById('captcha').innerHTML =
                "<span class='captcha'> " + thecaptcha + " </span>" + "  <a onclick='createCaptcha()' href='#'>recaptcha</a>";
        }
    </script>
    <!-- finish js -->
</head>
<body>
    <div class="registration-form">
        <h2 class="p-3 mt-3 mb-3">Form Registrasi Seminar Internasional PT Indonesia Power</h2>
        <form method="post" action="wadahregis.php" enctype="multipart/form-data">
            <h2 class="judul mt-3 mb-3" align="center">Form Registrasi</h2>
            <div class="form-icon" style="background-color: yellow;">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-floating">
                <input type="text" name="nama" class="form-control item" id="username" autocomplete="off" placeholder="Username">
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password">
            </div>
            <div class="form-floating">
                <input type="text" name="email" class="form-control item" id="email" autocomplete="off" placeholder="Email">
            </div>
            <div class="form-floating">
                <input type="text" name="education" class="form-control item" id="Education" autocomplete="off" placeholder="Education">
            </div>
            <div class="form-floating">
                <input type="text" name="number" class="form-control item" id="phone-number" autocomplete="off" placeholder="Phone Number">
            </div>
            <div class="form-floating">
                <input type="date" name="date" class="form-control item" id="birth-date" autocomplete="off" placeholder="Birth Date">
            </div>
            <table> 
                <tr>
                    <td>Captcha : </td>
                    <td id="captcha">
                        <script>
                            createCaptcha();
                        </script>
                    </td>
                </tr>
                <tr>
                    <td>Type Captcha : </td>
                    <td><input type="text" name="recaptcha" id="recaptcha" placeholder="Type the captcha" class="rounded border border-1 border-primary" /></td>
                    <td id="errCaptcha" class="errmsg mt-2 rounded"></td>
                    <hr>
                </tr>
                <tr>
                    <td colspan="2"><br>
                        <input type="radio" id="check" name="fav_language" value="check">
                        <label for="html" class="font-semibold">I am Not Robot
                        </label><br><br>
                        <input type="button" value="Check Captcha" onClick="validateRecaptcha()" class="text-white bg-primary rounded border-white" />
                    </td>
                </tr>
            </table>
            <div class="form-group">
                <button type="submit" name="create" class="btn btn-block create-account">Create Account</button>
            </div>
        </form>
        <!--SECTION MEDIA -->
        <div class="social-media">
            <h5> social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
        <!--SECTION LAST MEDIA -->
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