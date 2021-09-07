<?php
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['uidUsers'];
    $email = $_POST['email'];
    $iname = $_POST['iname'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($fname) || empty($lname) || empty($username) || empty($email) | empty($iname) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../Signup.php?error=emptyfields&uid= " . $username . "&mail=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location:../Signup.php?error=invalidmail&uid");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:../Signup.php?error=invaliedmail&uid=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location:../Signup.php?error=invalieduid&email=" . $email);
        exit();
    } elseif ($password !== $passwordRepeat) {
        header("Location:../Signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT uidUsers From users WHERE uidUsers=? AND pwdUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../Signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location:../Signup.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users(fname,lname,uidUsers,emailUsers,iname,pwdUsers) VALUES(?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:../Signup.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $username, $email, $iname, $password);
                    mysqli_stmt_execute($stmt);
                    header("Location:../Login.php?Signup=Success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location:../Signup.php?");
    exit();
}
