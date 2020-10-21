<?php

if (isset($_POST['edit_button'])) {
    session_start();
    require '../db/connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $father_name = $_POST['father_name'];
    $grade = $_POST['grade'];
    $mobile_number = $_POST['mobile_number'];
    $birthday = $_POST['birthday'];

    $sql = "UPDATE student SET name='$name',surname='$surname',father_name='$father_name',grade ='$grade',mobile_number='$mobile_number',birthday='$birthday' WHERE id='$id'";
    // $result = $db->query($sql);
    // echo $result-num_rows;
    if (mysqli_query($db,$sql)) {
      header("Location: EditStudent.php?success=wow");
    }
    else {
        header("Location: EditStudent.php?error=wow");
    }

} else {
    header("location:../index.php?not_authorized");
}
