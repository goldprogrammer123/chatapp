<?php
   session_start();
   include_once "config.php";
 
   $email =mysqli_real_escape_string($conn, $_POST['email']);
   $password =mysqli_real_escape_string($conn, $_POST['password']);


   if(!empty($email)&& !empty($password)){
//lets check users entered email and password matched to database any table row email and password
$sql= mysqli_query($conn, "SELECT * FROM users WHERE email ='{$email}' AND password ='{$password}'");
if(mysqli_num_rows($sql) > 0){//if users credentials matches
      $row = mysqli_fetch_assoc($sql);
      $_SESSION['unique_id'] = $row['unique_id'];//using this session we used user unique_id in other php file

       echo "success";



}else{
    echo"email or password is incorrent";
}
   }else{
    echo"All input field are required";
   }


?>