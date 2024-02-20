<?php
require_once('DB_connection.php');

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $check_query ="SELECT * FROM uses WHERE username ='$username' LIMIT 1";
    $check_result = mysqli_query($conn,$check_query);

    if ($check_result && mysqli_num_rows($check_reselut)> 0){
        $error_message= "username alredy exists. please choose a different username.";
    } else{
        $insert_query ="INSERT INTO users (username,password,nama) VALUES ('$username','$password','$nama')";
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result){
            header("Location: ../index.php");
            exit();
        }else{
            $error_message = "registration failed. please try again later.";
        }

    }
}
?>