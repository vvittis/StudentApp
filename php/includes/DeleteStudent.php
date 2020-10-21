<?php
include "../navbar.php";
require "../db/connect.php";
if (isset($_SESSION['userid'])) {
    echo '<link rel="stylesheet" type="text/css" href="../static/css/delete.css">';
    ?>

    <form action="../includes/DeleteStudet.php" class="login-form">
        <h1>Delete Student</h1>
        <?php

        if(isset($_GET['delete'])){?>
          <div class="alert alert-success" role="alert"> You have successfully deleted a student </div>
    <?php
        }
        ?>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
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

    if(isset($_GET['delete'])){
    $id_deleted = $_GET['delete'];
    $sql = "DELETE FROM student WHERE id=$id_deleted";
    $result = $db->query($sql);
    }
    $sql = "SELECT * FROM student";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
          <tr>
              <td> <?php  echo $row["id"]; ?></td>
              <td> <?php  echo $row["name"] ?></td>
              <td> <?php  echo $row["surname"] ?></td>
              <td> <?php  echo $row["father_name"]; ?></td>
              <td> <?php  echo $row["grade"]; ?></td>
              <td> <?php  echo $row["mobile_number"]; ?></td>
              <td> <?php  echo $row["birthday"]; ?></td>
              <td> <a href="../includes/DeleteStudent.php?delete=<?php  echo $row["id"]; ?>" class="btn btn-danger">DELETE </a></td>

          </tr>
          <?php
          }
    }
    echo '</form></tbody></table></div></body></html>';?>

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
