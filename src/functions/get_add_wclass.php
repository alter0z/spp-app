<?php
  include "../connection/connection.php";

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $class = $_POST['class'];
    $name = $_POST['fullname'];
    
    if ($class == '' || $name == ''){
      echo "Form belum lengkap!!!";		
    } else {
      $save = mysqli_query($conn, "INSERT INTO wclass VALUES ('$class','$name')");
      
      if(!$save){
        echo "Simpan data gagal!!!";
      }else{
        header('location:../show/showdatawclass.php');
      }
    }
  }
?>