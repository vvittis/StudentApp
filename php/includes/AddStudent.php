<?php
include "../navbar.php";
require "../db/connect.php";
if (isset($_SESSION['userid'])) {
    echo '<link rel="stylesheet" type="text/css" href="../static/css/add.css">';
    ?>

    <form action="../includes/add.php" method="post" class="login-form">
        <h1>Add Student</h1>

        <?php

        if(isset($_GET['success'])){?>
          <div class="alert alert-success" role="alert"> You have successfully added a student </div>
    <?php
        }
        ?>
        <div class="txtb">
            <input type="text" name="name">
            <span data-placeholder="Name" ></span>
        </div>
         <div class="txtb">
            <input type="text" name="surname">
            <span data-placeholder="Surname" ></span>
        </div>
         <div class="txtb">
            <input type="text" name="father_name">
            <span data-placeholder="Father Name" ></span>
        </div>
         <div class="txtb">
            <input type="text" name="grade">
            <span data-placeholder="Grade" ></span>
        </div>
         <div class="txtb">
            <input type="text" name="mobile_number">
            <span data-placeholder="Mobile Phone" ></span>
        </div>

        <div class="txtb">
            <input type="date" name="birthday">

            <span id='date' data-placeholder="Birthday" ></span>
        </div>

         <button class="logbtn" type="submit" name="add_button">ADD</button>

        <div class="bottom-text">
            Don't forget that every change counts!
        </div>
    </form>

    <script type="text/javascript">
        $(".txtb input").on("focus", function () {
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur", function () {
            if ($(this).val() == "")
                $(this).removeClass("focus");
        });

    </script>

    </body>
    </html>

    <?php
} else {
    header("location:../index.php?not_authorized");
} ?>
