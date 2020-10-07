<?php
$username_retry = "";
$email_retry = "";
if (isset($_POST["submit-signup"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $min_field_length = 5;
    $max_user_length = 16;
    if (strlen($username) < $min_field_length || strlen($username) > $max_user_length) {
        $message["class"] = "alert-warning";
        $message["text"] = "Username must be between 5 and 16 characters long.";
        $email_retry = $email;
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $message["class"] = "alert-warning";
        $message["text"] = "Username must only contain letters and numbers.";
        $email_retry = $email;
    } else if (strlen($email) < $min_field_length) {
        $message["class"] = "alert-warning";
        $message["text"] = "Email must be at least 5 characters long.";
        $username_retry = $username;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message["class"] = "alert-warning";
        $message["text"] = "That email is not valid.";
        $username_retry = $username;
    } else if (strlen($password) < $min_field_length) {
        $message["class"] = "alert-warning";
        $message["text"] = "Password must be at least 5 characters long.";
        $email_retry = $email;
        $username_retry = $username;
    } else {
        require("dbconfig.inc.php");
        $username_exists = false;
        $email_exists = false;
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, "SELECT * FROM users WHERE username = ?")) {
            $message["class"] = "alert-danger";
            $message["text"] = "There has been an error accessing the database";
        } else {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $exists = mysqli_stmt_num_rows($stmt);
            if ($exists > 0) {
                $username_exists = true;
            }
            mysqli_stmt_free_result($stmt);
        }
        if (!mysqli_stmt_prepare($stmt, "SELECT * FROM users WHERE email = ?")) {
            $message["class"] = "alert-danger";
            $message["text"] = "There has been an error accessing the database";
        } else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $exists = mysqli_stmt_num_rows($stmt);
            if ($exists > 0) {
                $email_exists = true;
            }
            mysqli_stmt_free_result($stmt);
        }
        if ($username_exists && $email_exists) {
            $message["class"] = "alert-danger";
            $message["text"] = "That email and username are already taken.";
        } else if ($username_exists && !$email_exists) {
            $message["class"] = "alert-danger";
            $message["text"] = "That username already exists.";
        } else if ($email_exists && !$username_exists) {
            $message["class"] = "alert-danger";
            $message["text"] = "That email already exists.";
        } else {
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)")) {
                $message["class"] = "alert-danger";
                $message["text"] = "There has been an error accessing the database";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashed_password);
                mysqli_stmt_execute($stmt);
                header("Location: /login.php?registersuccess=true");
            }
        }
    }
}
