<?php
  include "../connection/connection.php";

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    if ($name == '' || $username == '' || $password == '' || $role == ''){
      echo "Form belum lengkap!!!";		
    } else {
      $save = mysqli_query($conn, "INSERT INTO user VALUES ('$name','$role','$username','$password')");
      
      if(!$save){
        echo "Simpan data gagal!!!";
      }else{
        header('location:../show/showdatauser.php');
      }
    }
  }
?>