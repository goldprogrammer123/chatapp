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
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multpart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                   <div class="field input">
                    <label >First Name</label>
                    <input type="text" name="fname"  placeholder="First Name" required>
                   </div> 
                   <div class="field input ">
                    <label >Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required>
                   </div> 
                   <div class="field input">
                    <label >Email</label>
                    <input type="text" name="email" placeholder=" Enter your Email" required>
                   </div> 
                   <div class="field  input">
                    <label >password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                   </div> 
                   <div class="field image">
                    <label >Select Image</label>
                    <input type="file" name="image" required>
                   </div> 
                   <div class="field button">
                      <input type="Submit" value="Continue to Chat">
                   </div>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Log in now</a></div>
        </section>
    </div>
    <script src="javascript/pass_shown_hide.js"></script>
    <script src="javascript/signup.js"></script>
  
</body>
</html>