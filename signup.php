<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./layout/headhtml.php" ?>
</head>

<body>
    <!-- Page Preloder -->
    <?php include "./component/PagePreloder.php" ?>

    <!-- Header Section Begin -->
    <?php include "./component/header.php" ?>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Sign Up</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form action="./controller/user_controller.php" method="POST">
                            <div class="input__item">
                                <input type="text" placeholder="Email address" name="signup_email">
                                <span class="icon_mail"></span>
                            </div>
                            <!--<div class="input__item">
                                <input type="text" placeholder="Your Name">
                                <span class="icon_profile"></span>
                            </div>-->
                            <div class="input__item">
                                <input type="password" placeholder="Password" name="signup_password">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" placeholder="Pre Password" name="signup_pre_password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Register Now</button>
                        </form>
                        <h5>Already have an account? <a href="./login.php">Log In!</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Login With:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->

    <!-- Footer Section Begin -->
    <?php include "./component/footer.php" ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <?php include "./component/searchModal.php" ?>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <?php include_once "./layout/script.php" ?>
</body>

</html>