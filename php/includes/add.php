<?php

if (isset($_POST['add_button'])) {
    session_start();
    require '../db/connect.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $father_name = $_POST['father_name'];
    $grade = $_POST['grade'];
    $mobile_number = $_POST['mobile_number'];
    $birthday = $_POST['birthday'];


    if (empty($name) || empty($surname) || empty($father_name) || empty($grade) || empty($mobile_number) || empty($birthday)) {
        //code...
        header("Location: add.php.php?error=empty_fields&name=" . $name . "&surname=" . $surname);
        exit();
    } else if (!preg_match("/^[a-zA-z0-9]*$/", $name)) {
        header("Location: index.php?error=invalid_username&name=" . $name . "&surname=" . $surname);
        exit();
    } else {
        $sql = "INSERT INTO student (name,surname,father_name,grade,mobile_number,birthday) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=AAAAAA");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "sssiss", $name, $surname, $father_name, $grade, $mobile_number,$birthday);
            mysqli_stmt_execute($stmt);
            header("Location: AddStudent.php?success=student_added_successfully");
            echo "Add Successful";
            exit();

        }
    }

} else {
    header("location:../index.php?not_authorized");
}
