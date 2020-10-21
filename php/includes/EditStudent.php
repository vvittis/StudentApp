<?php
include "../navbar.php";
require "../db/connect.php";
if (isset($_SESSION['userid'])) {
    echo '<link rel="stylesheet" type="text/css" href="../static/css/edit.css">';
    ?>

    <div action="../includes/edit_form.php" class="login-form">
        <h1>Edit Student</h1>

        <?php

        if(isset($_GET['success'])){?>
          <div class="alert alert-success" role="alert"> You have successfully edited a student </div>
    <?php
        }
        if(isset($_GET['error'])){?>
          <div class="alert alert-danger" role="alert"> You entered a non valid input </div>
    <?php
        }
        ?>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>FATHER NAME</th>
                <th>GRADE</th>
                <th>MOBILE PHONE</th>
                <th>BIRTHDAY</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
    <?php

    $sql = "SELECT * FROM student";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>

          <tr><form action= "../includes/edit.php" method="POST">
              <td> <input type="hidden" name="id" value="<?php  echo $row["id"]; ?>"></td>
              <td> <input type="text" name="name" value="<?php  echo $row["name"]; ?>"></td>
              <td> <input type="text" name="surname" value="<?php  echo $row["surname"]; ?>"></td>
              <td> <input type="text" name="father_name" value="<?php  echo $row["father_name"]; ?>"></td>
              <td> <input type="text" name="grade" value="<?php  echo $row["grade"]; ?>"></td>
              <td> <input type="text" name="mobile_number" value="<?php  echo $row["mobile_number"]; ?>"></td>
              <td> <input type="text" name="birthday" value="<?php  echo $row["birthday"]; ?>"></td>
              <td><button class="btn btn-success" type="submit" name="edit_button">EDIT</button> </td>
                </form>
          </tr>

          <?php
          }
    }
    echo '</div></div></tbody></table></div></body></html>';?>

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
