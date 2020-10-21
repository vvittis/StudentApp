<?php
include "../navbar.php";
require "../db/connect.php";
if (isset($_SESSION['userid'])) {
    echo '<link rel="stylesheet" type="text/css" href="../static/css/search.css">';
    ?>

    <form action="../includes/SearchStudent.php" method="POST" class="login-form">
        <h1>Search Student</h1>
        <div class="txtb">
            <input type="text" name="name">
            <span data-placeholder="Name" ></span>
        </div>
         <div class="txtb">
            <input type="text" name="surname">
            <span data-placeholder="Surname" ></span>
        </div>
         <button class="logbtn" type="submit" name="search_button">SEARCH</button>
<br>

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
            </tr>
            </thead>
            <tbody>


    <?php


    $sql = "SELECT * FROM student";

    if(isset($_POST['search_button'])){

      $search_name = $_POST['name'];
      $search_surname = $_POST['surname'];

      $sql .= " WHERE name = '{$search_name}' OR surname = '{$search_surname}'";

    }

    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["father_name"] . "</td><td>" . $row["grade"] . "</td><td>" . $row["mobile_number"] . "</td><td>" . $row["birthday"] . "</td></tr>";
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
