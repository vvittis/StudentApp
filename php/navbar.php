<?php
session_start();
if (isset($_SESSION['userid'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard </title>
    <link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class=" navbar-inverse navbar-static-top">
    <div class="container-fluid">

        <!-- Header (Logo & Button) -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#topNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../includes/Teacher.php">SCHOOL</a>
        </div>


        <div class="collapse navbar-collapse" id="topNavBar">
            <!-- Left Side Items -->
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="../includes/AddStudent.php">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Add
                    </a>
                </li>
                <li>
                    <a href="../includes/EditStudent.php">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;Edit
                    </a>
                </li>

                <li>
                    <a href="../includes/DeleteStudent.php">
                        <i class="glyphicon glyphicon-trash"></i>&nbsp;Delete
                    </a>
                </li>
                <li>
                    <a href="../includes/SearchStudent.php">
                        <i class="glyphicon glyphicon-search"></i>&nbsp;Search
                    </a>
                </li>
            </ul>
            <!-- Right Side Items -->
            <!-- Dropdown profile-->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a>
                        <i class="fab fa-angellist"></i>&nbsp;

                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo $_SESSION['name'];
                            echo '&nbsp;';
                            echo $_SESSION['surname'];
                        }
                        ?>


                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="glyphicon glyphicon-off"></i>&nbsp;Logout
                    </a>
                </li>

        </div>
    </div>
</nav>
<?php
} else {
header("location: index.php?error_message=not_authorized");
} ?>
