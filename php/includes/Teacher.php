<?php
include "../navbar.php";
require "../db/connect.php";
if (isset($_SESSION['userid'])) { ?>
    <h1>Hi Teacher <?php echo $_SESSION['name']; ?> what a beautiful day in the School today ahh?</h1>
    <h2> You know as always you have the same 4 options</h2>
    <ul>
        <li>Add</li>
        <li>Edit</li>
        <li>Delete</li>
        <li>Search</li>
    </ul>
    <h3>... and you can find them in the toolbar above</h3>
    <p>Below you can see all your student details (i.e. name,surname,father name, grade, mobile number and
        birthday)</p>

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
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["father_name"] . "</td><td>" . $row["grade"] . "</td><td>" . $row["mobile_number"] . "</td><td>" . $row["birthday"] . "</td></tr>";
        }
    }
    echo '</tbody></table></div></body></html>';

    $db->close();
} else {
    header("location:../index.php?not_authorized");
}
