<?php
if (isset($_GET["registersuccess"])) {
    $message["class"] = "alert-success";
    $message["text"] = "Registered succesfully.";
}
$email_retry = "";
if (isset($_POST["submit-login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $min_field_length = 5;
    if (strlen($email) < $min_field_length || strlen($password) < $min_field_length) {
        $message["class"] = "alert-warning";
        $message["text"] = "Password and email must be at least 5 characters long.";
        $email_retry = $email;
    } else {
        require("dbconfig.inc.php");
        $user_exists = true;
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, "SELECT * FROM users WHERE email = ?")) {
            $message["class"] = "alert-danger";
            $message["text"] = "There has been an error accessing the database";
        } else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $user_result = mysqli_stmt_get_result($stmt);
            $user_data = mysqli_fetch_assoc($user_result);
            if (!isset($user_data["password"])) {
                $message["class"] = "alert-danger";
                $message["text"] = "That user doesn't exist.";
            } else {
                if (!password_verify($password, $user_data["password"])) {
                    $message["class"] = "alert-danger";
                    $message["text"] = "The pasword is invalid.";
                    $email_retry = $email;
                } else {
                    $_SESSION["username"] = $user_data["username"];
                    $_SESSION["user_id"] = $user_data["user_id"];
                    header("Location: /index.php");
                }
            }
            mysqli_stmt_free_result($stmt);
        }
    }
}
