<?php

$nama = $_POST['nama'];
$pass = $_POST['password'];

// untuk mendecode data yang ada di dalam cookie user 
$decode_cookie = json_decode($_COOKIE['user'], true);

function sessions(){
    global $nama, $pass, $decode_cookie;
    // assosiatif array dia mengambil dari valuenyaa 
    session_start();
    $_SESSION['username'] = $nama;
    $_SESSION['data'] = json_encode($decode_cookie); //pendeklaraian array yang da di wadah regis untuk dilanjutkan pada page display
    // setcookie('user', json_encode($decode_cookie)); //adalah sebuah kode untuk menjadi infomasi 
}

if (!empty($nama) && !empty($pass)) { 
    if (in_array($nama, $decode_cookie) && in_array($pass, $decode_cookie)) { // diakan mengecek nama dalam kondisi sebelumnya ada tidak didalam array nya ada atau tidak
        sessions(); // pemanggilan function sesion,  
        header('location:displayform.php');

    }else {
        echo "<body>
            <script>
                alert('username atau password salah ! ')
                window.location.href = './login.php'
            </script>
        </body>";        
    }
}

// $nama = "fito";
// empty($nama); // ==> false
//  // ==> not == !
//  !empty($nama);
// // not false
// // trye

?>


