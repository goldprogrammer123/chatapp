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
        <section class="form login">
            <header>Realtime Chat App with branch collaboration</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-details">
                   <div class="field input">
                    <label >Email</label>
                    <input type="text" name="email" placeholder=" Enter your Email">
                   </div> 
                   <div class="field  input">
                    <label >password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                   </div> 
                 
                   <div class="field button">
                      <input type="Submit" value="Continue to Chat">
                   </div>
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">signup   now</a></div>
        </section>
    </div>
    <script src="javascript/pass_shown_hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>