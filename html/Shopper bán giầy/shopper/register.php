<!DOCTYPE html>
<?php
include 'database/config.php';
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap E-commerce Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]>
    <meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="themes/css/bootstrappage.css" rel="stylesheet"/>

    <!-- global styles -->
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
    <link href="themes/css/main.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li><a href="#">My Account</a></li>
                    <li><a href="cart.html">Your Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="register.html">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index.html" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="./products.html">Woman</a>
                        <ul>
                            <li><a href="./products.html">Lacinia nibh</a></li>
                            <li><a href="./products.html">Eget molestie</a></li>
                            <li><a href="./products.html">Varius purus</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Man</a></li>
                    <li><a href="./products.html">Sport</a>
                        <ul>
                            <li><a href="./products.html">Gifts and Tech</a></li>
                            <li><a href="./products.html">Ties and Hats</a></li>
                            <li><a href="./products.html">Cold Weather</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Hangbag</a></li>
                    <li><a href="./products.html">Best Seller</a></li>
                    <li><a href="./products.html">Top Seller</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
        <h4><span>Login or Regsiter</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span5">
                <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                <form method="post">
                    <input type="hidden" name="next" value="/">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">
                                <input name="uname" type="text" placeholder="Enter your username" id="username"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">
                                <input name="pw" type="password" placeholder="Enter your password" id="password"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <input tabindex="3" class="btn btn-inverse large" type="submit" name="ok"
                                   value="Sign into your account">
                            <hr>
                            <p class="reset">Recover your <a tabindex="4" href="#"
                                                             title="Recover your username or password">username or
                                    password</a></p>
                        </div>
                    </fieldset>
                </form>
                <?php
                if (isset($_POST['uname']) && isset($_POST['pw']) && !empty($_POST['uname']) && !empty($_POST['pw'])) {

                    $uname = $_POST['uname'];
                    $pw = md5($_POST['pw']);
                    $login_query = "SELECT * FROM user WHERE name = '$uname' AND pw = '$pw'";
                    $loginResult = mysqli_query($connect, $login_query);

                    if (isset($loginResult) && mysqli_num_rows($loginResult) > 0) {
                        while ($row = mysqli_fetch_assoc($loginResult)) {
                            $sessionUser = ['id' => $row['id'], 'uname' => $row['name'], 'email' => $row['email']];
                        }
                        $_SESSION['user'] = $sessionUser;

                    } else {
                        echo 'Tài khoản của bạn không tồn tại!';
                    }

                }

                ?>

            </div>
            <div class="span7">
                <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                <form action="#" method="post" class="form-stacked">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">
                                <input name="register_uname" type="text" placeholder="Enter your username"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email address:</label>
                            <div class="controls">
                                <input name="register_email" type="email" placeholder="Enter your email"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password:</label>
                            <div class="controls">
                                <input name="register_pw" type="password" placeholder="Enter your password"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell
                                who the arch-villain's going to be?</p>
                        </div>
                        <hr>
                        <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit"
                                                    value="Create your account"></div>
                    </fieldset>
                </form>

                <?php
                if (isset($_POST['register_uname']) && !empty($_POST['register_uname']) && isset($_POST['register_email']) && !empty($_POST['register_email']) && isset($_POST["register_pw"]) && !empty($_POST['register_pw'])) {
                    $email = $_POST['register_email'];
                    $uname = $_POST['register_uname'];
                    $pw = md5($_POST['register_pw']);

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $checkIsset = "SELECT * FROM user WHERE email = '$email' AND pw = '$pw'";
                        $result = mysqli_query($connect, $checkIsset);
                        if (mysqli_num_rows($result) > 0) {
                            echo 'Tai khoan da ton tai';
                        } else {
                            $registerAcc = "INSERT INTO user( name, email, pw) VALUES ('$uname','$email','$pw')";
                            if ($connect->query($registerAcc) == TRUE) {
                                echo 'Tao tai khoan thanh cong';
                            } else {
                                echo 'Tao tai khoan that bai' . mysqli_error($connect);
                            }
                        }
                    } else {
                        echo "Khong dung dinh dang email!";
                    }

                }
                ?>


            </div>
        </div>
    </section>
    <section id="footer-bar">
        <div class="row">
            <div class="span3">
                <h4>Navigation</h4>
                <ul class="nav">
                    <li><a href="./index.html">Homepage</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./contact.html">Contac Us</a></li>
                    <li><a href="./cart.html">Your Cart</a></li>
                    <li><a href="./register.html">Login</a></li>
                </ul>
            </div>
            <div class="span4">
                <h4>My Account</h4>
                <ul class="nav">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </div>
            <div class="span5">
                <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has been
                    the industry's standard dummy text ever since the you.</p>
                <br/>
                <span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
            </div>
        </div>
    </section>
    <section id="copyright">
        <span>Copyright 2013 bootstrappage template  All right reserved.</span>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script>
    $(document).ready(function () {
        $('#checkout').click(function (e) {
            document.location.href = "checkout.html";
        })
    });
</script>
</body>
</html>