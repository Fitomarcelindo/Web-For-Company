<?php session_start();
    $nama = $_POST['nama']; //pendekripsiaan variable global 
    $password = $_POST['password'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $number = $_POST['number'];
    $date = $_POST['date'];


    function cookies(){
        global $nama,$password, $email, $education, $number, $date; // deklarasi variabel untuk array
        // assosiatif array dia mengambil dari valuenyaa 
        $array =[
            'nama' => $nama,
            'password' => $password,
            'email' => $email,
            'education' => $education,
            'number' => $number,
            'date' => $date
        ];
        setcookie('user', json_encode($array)); //adalah sebuah kode untuk menjadi infomasi 
    }

    if (isset($_POST['create'])){
        if(!empty($nama)&&!empty($password)&&!empty($email)&&!empty($education)&&!empty($number)&&!empty($date)){ // semua kondisi parameter harus terpenuhi baru melakukan perintah if nya
            cookies();
            header('location:login.php');
            die();
        
        }else{
          header('location:registrasi.php');
        }

    }
?>