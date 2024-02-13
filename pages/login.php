<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="left" id="left">
        <div class="left-content">
            <div class="header">
                <h2 class="animation a1">Welcome Back</h2>
                <h4 class="animation a2">Log in to your account using email and password</h4>
            </div>

            <?php if(isset($_GET['error'])){ ?>
                <div class="error animation a8">
                    <?php echo $_GET['error'] ?>
                </div>
            <?php } ?>

            <form action="../controllers/loginControl.php" method="POST" class="form" id="formlog">
                <input type="hidden" name="action" value="login">
                <input type="email" class="form-field animation a3" placeholder="Email Address" name="email" value="jane@example.com" required>
                <input type="password" class="form-field animation a4" placeholder="Password" name="password" value="securepass" required>
                <p class="animation a5"> <a href="#" style="padding-right: 40%" id="sign-up-btn">Sign up</a> <a href="#">Forgot Password</a></p>
                <input type="submit"  value="LOGIN" class="button animation a6">
            </form>
        </div>
    </div>

    <div class="slide" id="slide" style="background-image: url('../assets/img/backgrounds/La_cueillette_du_the.jpg')")"></div>


    <div class="right" id="right">
        <div class="right-content">
            <div class="header">
                <h2 class="animation-reverse a1">CREATE AN ACCOUNT</h2>
                <h4 class="animation-reverse a2">Log in to your account using email and password</h4>
            </div>

            <form action="../controllers/loginControl.php" method="POST" class="form" id="formSign">
                <input type="hidden" name="action" value="inscription">

                <input type="text" class="form-field animation-reverse a3" placeholder="User name">
                <input type="email" class="form-field animation-reverse a4" placeholder="Email Address">
                <input type="password" class="form-field animation-reverse a5" placeholder="Password">
                <p class="animation-reverse a6"> <a href="#" style="padding-right: 40%" id="login-btn">Already have an account?</a></p>
                <button class="animation-reverse a7">SIGN UP</button>
            </form>
        </div>
    </div>




</div>

</body>
<script type="text/javascript">
    let signUpBtn = document.getElementById("sign-up-btn");
    let loginBtn = document.getElementById("login-btn");
    let leftDiv = document.getElementById("left");
    let rightDiv = document.getElementById("right");
    let slideDiv = document.getElementById("slide");

    signUpBtn.addEventListener("click", () => {
        leftDiv.querySelector(".a1").className = "animation-reverse a1";
        leftDiv.querySelector(".a2").className = "animation-reverse a2";
        leftDiv.querySelector(".a3").className = "animation-reverse a3 form-field";
        leftDiv.querySelector(".a4").className = "animation-reverse a4 form-field";
        leftDiv.querySelector(".a5").className = "animation-reverse a5";
        leftDiv.querySelector(".a6").className = "animation-reverse a6 button";
        if(leftDiv.querySelector(".a8") !== null) {
            leftDiv.querySelector(".a8").className = "animation-reverse a8 error";
        }
        leftDiv.style.visibility = "hidden";

        rightDiv.querySelector(".a1").className = "animation a1";
        rightDiv.querySelector(".a2").className = "animation a2";
        rightDiv.querySelector(".a3").className = "animation a3 form-field";
        rightDiv.querySelector(".a4").className = "animation a4 form-field";
        rightDiv.querySelector(".a5").className = "animation a5 form-field";
        rightDiv.querySelector(".a6").className = "animation a6";
        rightDiv.querySelector(".a7").className = "animation a7 button";

        rightDiv.style.visibility = "visible";
        slideDiv.style.transform = "translateX(0%)";

    })

    loginBtn.addEventListener("click", () => {
        rightDiv.querySelector(".a1").className = "animation-reverse a1";
        rightDiv.querySelector(".a2").className = "animation-reverse a2";
        rightDiv.querySelector(".a3").className = "animation-reverse a3 form-field";
        rightDiv.querySelector(".a4").className = "animation-reverse a4 form-field";
        rightDiv.querySelector(".a5").className = "animation-reverse a5 form-field";
        rightDiv.querySelector(".a6").className = "animation-reverse a6";
        rightDiv.querySelector(".a7").className = "animation-reverse a7 button";
        rightDiv.style.visibility = "hidden";

        leftDiv.querySelector(".a1").className = "animation a1";
        leftDiv.querySelector(".a2").className = "animation a2";
        leftDiv.querySelector(".a3").className = "animation a3 form-field";
        leftDiv.querySelector(".a4").className = "animation a4 form-field";
        leftDiv.querySelector(".a5").className = "animation a5";
        leftDiv.querySelector(".a6").className = "animation a6 button";
        if(leftDiv.querySelector(".a8") !== null) {
            leftDiv.querySelector(".a8").className = "animation a8 error";
        }

        leftDiv.style.visibility = "visible";

        slideDiv.style.transform = "translateX(45%)";



    } )

</script>
</html>