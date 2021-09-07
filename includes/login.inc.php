<?php
require 'dbh.inc.php';


$mailuid = $_POST['mailuid'];
$password = $_POST['pwd'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT *FROM admininfo WHERE uidAdmin='$mailuid' AND pwdAdmin='$password'";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        if (isset($_POST['login-submit'])) {
            session_start();
            $_SESSION['adminId'] = $row['idAdmin'];
            $_SESSION['adminUid'] = $row['uidAdmin'];


            header("Location:../HomePage.php?AdminLogin=Success");
            exit();
        }
    }
}


if (empty($mailuid) || empty($password)) {
    header("Location:../Login.php?Error=EmptyFields");
    exit();
}
else {
    $sql="SELECT *FROM users where uidUsers='$mailuid'OR emailUsers='$mailuid'  AND pwdUsers='$password'";
$stmt=mysqli_query($conn,$sql);

$result=$conn->query($sql);
$row=$result->fetch_assoc();

if(mysqli_num_rows($stmt)==0){
    header("Location:../Login.php?login=fail");
    exit();
}else{
    if(isset($_POST['login-submit'])){

        session_start();
        $_SESSION['userId']=$row['idUsers'];
        $_SESSION['userUid']=$row['uidUsers'];

        header("Location:../HomePage.php? User login=Success");
        exit();
    } 
  
}
}












