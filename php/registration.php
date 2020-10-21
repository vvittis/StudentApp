<?php

if (isset($_POST['register_button'])) {
    session_start();
    require 'db/connect.php';
    $username = $_POST['username_register'];
    $name = $_POST['name_register'];
    $surname = $_POST['surname_register'];
    $email = $_POST['email_register'];
    $password = $_POST['password_register'];
    $repeat_password = $_POST['repeat_password_register'];


    if (empty($username) || empty($name) || empty($surname) || empty($email) || empty($password)) {
        //code...
        header("Location: index.php?error=empty_fields&username=" . $username . "&name=" . $name . "&surname=" . $surname . "&email=" . $email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalid_email&username=" . $username . "&name=" . $name . "&surname=" . $surname);
        exit();
    } else if (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
        header("Location: index.php?error=invalid_username&name=" . $name . "&surname=" . $surname . "&email=" . $email);
        exit();
    } else if ($password !== $repeat_password) {
        header("Location: index.php?error=password_check_denied&name=" . $name . "&surname=" . $surname . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT id FROM teacher WHERE username=?";
        $stmt = mysqli_stmt_init($db);
//        $result = $db->query("SELECT * FROM teacher WHERE username = ?");
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            // echo "username already taken";
            header("Location: index.php?error=username_already_in_db&name=" . $name . "&surname=" . $surname . "&email=" . $email);
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);

            if ($result_check > 0) {
                header("Location: index.php?error=username_already_in_db&name=" . $name . "&surname=" . $surname . "&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO teacher (nameid,surname,username,password,email) VALUES(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: index.php?error=AAAAAA&name=" . $name . "&surname=" . $surname . "&email=" . $email);
                    exit();
                } else {
                    // echo "well well well";
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $surname, $username, $hashed_password, $email);
                    mysqli_stmt_execute($stmt);
                    session_start();
                    $_SESSION['userid'] = 'new_user';
                    $_SESSION['username'] = $username;
                    $_SESSION['surname'] = $surname;
                    $_SESSION['name'] = $name;
                    header("Location: ../includes/Teacher.php?");
                    // echo "Registration Successful";
                    exit();
                }
            }
        }
    }
} else {
    // echo "WTF";
      header("Location: index.php?error_message=not_authorized");
}
?>
