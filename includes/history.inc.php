<?php

include "dbh.inc.php";


if(isset($_POST['commentDeleteN'])){
    $idP=$_POST['idP'];
    $sql="DELETE FROM newsfeed WHERE idP='$idP'";
    $result=$conn->query($sql);
    header("Location:../history.php?Post Deleted");
    
}

if(isset($_POST['commentDeleteW'])){
    $idP=$_POST['idP'];
    $sql="DELETE FROM webfeed WHERE idP='$idP'";
    $result=$conn->query($sql);
    header("Location:../history.php?Post Deleted");
    
}


if(isset($_POST['commentDeleteA'])){
    $idP=$_POST['idP'];
    $sql="DELETE FROM appfeed WHERE idP='$idP'";
    $result=$conn->query($sql);
    header("Location:../history.php?Post Deleted");
    
}


if(isset($_POST['commentDeleteG'])){
    $idP=$_POST['idP'];
    $sql="DELETE FROM gamefeed WHERE idP='$idP'";
    $result=$conn->query($sql);
    header("Location:../history.php?Post Deleted");
    
}


if(isset($_POST['commentDeleteS'])){
    $idP=$_POST['idP'];
    $sql="DELETE FROM softfeed WHERE idP='$idP'";
    $result=$conn->query($sql);
    header("Location:../history.php?Post Deleted");
    
}


if(isset($_POST['commentDeleteAC'])){
    $idP=$_POST['idP'];
    $sql="DELETE FROM academicfeed WHERE idP='$idP'";
    $result=$conn->query($sql);
    header("Location:../history.php?Post Deleted");
    
}



?>