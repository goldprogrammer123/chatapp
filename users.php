<?php
session_start();
if(!isset($_SESSION['unique_id'])){
header("location: login.php");
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime chat App</title>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome link -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="users">
          <header>


            <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) >0){
              $row =mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="content">
              <img src="php/../images/<?php echo $row['img'] ?>" alt=""> 
              <div class="details">
                <span><?php  echo  $row['fname'] . " " . $row['lname']?></span>
               <p><?php  echo $row['status'] ?></p> 
              </div>
            </div>
            <a href="" class="logout">logout</a>
          </header>
            <div class="search" >
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search......">
                <button><i class="fas fa-search"></i></button>
            </div>
          
              <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="./images/pic.jpg" alt="" width="50" height="50">
                        <div class="details">
                          <span>Golden Eagle</span>
                          <p>This is the message</p>
                        </div>
                      </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                
               
                
                
               
                

            
          
                
             </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
</body>
</html>