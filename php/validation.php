<?php

if (isset($_POST['sign_in_button'])) {
    require 'db/connect.php';
    $username = $_POST['username_sign_in'];
    $password = $_POST['password_sign_in'];

    if (empty($username) || empty($password)) {
        header("Location: index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM teacher WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {  // this checks if the connection with the database is ok
            header("Location: index.php?error=sql_error");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);


            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $verify_pass = password_verify($password, $row['password']);
                if ($verify_pass == false) {
                    header("Location: index.php?error=wrong_password");
                    exit();
                } else if ($verify_pass == true) {
                    ob_start();
                    session_start();
                    $_SESSION['previous_location'] = 'homepage';
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['name'] = $row['nameid'];
                    // echo "You have Successfully connected";
                    header("Location: ../includes/Teacher.php?");
                    exit();

                } else {
                    header("Location: index.php?error=aaaaa");
                    exit();
                }

            } else {
                header("Location: index.php?error=no_user");
                exit();
            }

        }
    }
} else {
    header("Location: index.php?error_message=not_authorized");
    exit();
}
?>
