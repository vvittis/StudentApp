<!DOCTYPE HTML>

<html lang="en">
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../static/css/style_register.css">
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"-->
    <!--          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">-->
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
</head>
<?php
$background_url = " static/images/congruent_pentagon.png";
$home_image_url = " static/images/home_school.jpg";
?>

<style>
    body {
        background: url( <?php echo $background_url ?> );
    }

    body #fill {
        background: #D0D3DA url( <?php echo $home_image_url ?> ) center center fixed;
    }
</style>


<body>
<div class="row">
    <div id="fill" class="col-sm-12 col-md-12 col-lg-12">
        <div id="sub-heading"> A Project in <span class="element"></span></div>
    </div>
</div>
<div class="container-fluid">

    <div id="register" class="container-fluid">
        <div id="formDerci">
            <h1><strong>Welcome to SCHOOL system !</strong></h1>
            This is a project that has as pThe purpose of the exercise is to use Docker to develop a Web application.
            The application is designed and implemented as a combination of interconnected Services. Each service must
            be located in a container. For application development technologies such as HTML are used, CSS, JS (user
            interface) and PHP, MYSQL (for the cloud environment).

        </div>
        <div class="row">
            <div id="register_table" class="col-sm-5 col-md-5  col-lg-5">
                <h1><strong>Register!</strong></h1>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "empty_fields"){
                            echo'<p class="register_error" style="color: red"  >FILL IN ALL FIELDS!</p>';
                        }
                    }

                ?>

                <form action="registration.php" method="POST" autocomplete="off">
                    <br>
                    <br>

                    <label>Username:
                        <input type="text" name="username_register"   class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>

                    <label>Name:
                        <input type="text" name="name_register"   class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>

                    <label>Surname:
                        <input type="text" name="surname_register"   class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>

                    <label>Email:
                        <input type="email" name="email_register"   class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>

                    <label>Password:
                        <input type="password" name="password_register"  autocomplete="new-password" class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <label>Repeat Password:
                        <input type="password" name="repeat_password_register"  autocomplete="new-password" class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>


                    <button class="glow-on-hover" type="submit" name="register_button">REGISTER</button>


                </form>
            </div>
            <div id="sign_table" class="col-sm-5 col-md-5 col-lg-5">
                <h1><strong>Sign in!</strong></h1>
                <form action="validation.php" method="POST" autocomplete="off">
                    <br>
                    <br>
                    <br>
                    <label>Username/Email:
                        <input type="text" name="username_sign_in"   class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>
                    <label>Password:
                        <input type="password" name="password_sign_in" autocomplete="new-password" class="form-control">
                        <div class="focus-input"></div>
                    </label>
                    <br>

                    <button class="glow-on-hover" type="submit" name="sign_in_button" > SIGN IN</button>


                </form>
            </div>
        </div>

    </div>
</div>
<script src="static/js/jquery-3.3.1.min.js"></script>
<script src="static/js/typed.js"></script>
<script type="text/javascript">
    var typed = new Typed('.element', {
        strings: ["Docker.", "Apache.", "MySQL.", "HTML/CSS."],
        loop: true,
        typeSpeed: 60,
        backSpeed: 60,
        backDelay: 1000,
    });
</script>
<script type="text/javascript">
    function delay(URL) {
        setTimeout(function () {
            window.location = URL
        }, 1000);
    }
</script>
</body>

</html>
