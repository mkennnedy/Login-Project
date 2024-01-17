<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login Form </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Aassets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 
    </head>
<body>

    <?php include('header.php'); ?>

    <section>
        <h1 class="section-title mt-3">Uplifting Businesses Building Community</h1>

        <div class="logincontainer">
            <form action="login_process.php" method="post">
                <div class="title">Login</div>
                <div class="input-box underline">
                    <input type="text" name="email" placeholder="Enter Your Email" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Enter Your Password" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box button">
                    <input type="submit" value="Continue">
                </div>
            </form>
            <div class="option">or Connect With Social Media</div>
            <div class="google">
                <a href="#"><i class="fab fa-google"></i>Sign in With Google</a>
            </div>
            <div class="facebook">
                <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
            </div>
        </div>
    </section>

</body>

</html>
