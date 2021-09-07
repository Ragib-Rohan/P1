<?php

include "dbh.inc.php";

if(isset($_POST['submit'])){
 
    $postTitle=$_POST['postname'];
    $paragraph=$_POST['paragraph'];
    $page=$_POST['design'];
    $date=$_POST['date'];

    $fileI= $_FILES['fileI'];                     //!image file
    $fileP= $_FILES['fileP'];                     //!PDF File

    $fileNameI=$fileI["name"];
    $fileNameP=$fileP["name"];

    $fileTypeI=$fileI["type"];
    $fileTypeP=$fileP["type"];

    $fileTempNameI=$fileI["tmp_name"];
    $fileTempNameP=$fileP["tmp_name"];

    $fileErrorI=$fileI["error"];
    $fileErrorP=$fileP["error"];

    $fileSizeI=$fileI["size"];
    $fileSizeP=$fileP["size"];


    $fileExtI=explode(".",$fileNameI);
    $fileExtP=explode(".",$fileNameP);

    $fileActualExtI=strtolower(end($fileExtI));
    $fileActualExtP=strtolower(end($fileExtP));

    $allowedI=array("jpg","jpeg","png");
    $allowedP=array("pdf");

   

    if(in_array($fileActualExtI,$allowedI) && in_array($fileActualExtP,$allowedP)){
        if($fileErrorI==0 && $fileErrorP==0){
            if($fileSizeI<2000000 && $fileSizeP<20000000000){
                $imageFullName=".".uniqid("",true).".".$fileActualExtI;
                $pdfFullName=".".uniqid("",true).".".$fileActualExtP;

                $fileDestinationI="img/gallery/".$imageFullName;
                $fileDestinationP="pdf/gallery/".$pdfFullName;

                include_once "dbh.inc.php";

                if(empty($postTitle)||empty($paragraph)){
                    header("Location:../PostingPanel.php");
                    exit();
                }else{
                    if($page == "newsfeed"){                               //!News Feed
                            $sql="SELECT * FROM newsfeed";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo"SQL Statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result=mysqli_stmt_get_result($stmt);
                            $rowCount=mysqli_num_rows($result);
                            $setPostOrder=$rowCount+1;

                            $sql="INSERT INTO newsfeed(titlePost,post,imgFullNameGallery,pdfFullNameGallery,orderPost,Pdate)VALUES(?,?,?,?,?,?)";
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"SQL Statement Failed";
                            }else{
                                mysqli_stmt_bind_param($stmt,"ssssss",$postTitle,$paragraph,$imageFullName,$pdfFullName,$setPostOrder,$date);
                                mysqli_stmt_execute($stmt);
                                move_uploaded_file($fileTempNameI,$fileDestinationI);
                                move_uploaded_file($fileTempNameP,$fileDestinationP);
                                header("Location:../NewsFeed.php?Upload=Success");
                            }
                        }
                    }
                    elseif($page == "web"){                                //! web feed
                        $sql="SELECT * FROM webfeed";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo"SQL Statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result=mysqli_stmt_get_result($stmt);
                            $rowCount=mysqli_num_rows($result);
                            $setPostOrder=$rowCount+1;

                            $sql="INSERT INTO webfeed(titlePost,post,imgFullNameGallery,pdfFullNameGallery,orderPost,Pdate)VALUES(?,?,?,?,?,?)";
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"SQL Statement Failed";
                            }else{
                                mysqli_stmt_bind_param($stmt,"ssssss",$postTitle,$paragraph,$imageFullName,$pdfFullName,$setPostOrder,$date);
                                mysqli_stmt_execute($stmt);
                                move_uploaded_file($fileTempNameI,$fileDestinationI);
                                move_uploaded_file($fileTempNameP,$fileDestinationP);
                                header("Location:../NewsFeed.php?Upload=Success");
                            }
                        }
                    }
                    elseif($page == "app"){                             //! app feed
                        $sql="SELECT * FROM appfeed";   
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo"SQL Statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result=mysqli_stmt_get_result($stmt);
                            $rowCount=mysqli_num_rows($result);
                            $setPostOrder=$rowCount+1;

                            $sql="INSERT INTO appfeed(titlePost,post,imgFullNameGallery,pdfFullNameGallery,orderPost,Pdate)VALUES(?,?,?,?,?,?)";
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"SQL Statement Failed";
                            }else{
                                mysqli_stmt_bind_param($stmt,"ssssss",$postTitle,$paragraph,$imageFullName,$pdfFullName,$setPostOrder,$date);
                                mysqli_stmt_execute($stmt);
                                move_uploaded_file($fileTempNameI,$fileDestinationI);
                                move_uploaded_file($fileTempNameP,$fileDestinationP);
                                header("Location:../NewsFeed.php?Upload=Success");
                            }
                        }
                    }
                    elseif($page == "game"){                            //! game feed
                        $sql="SELECT * FROM gamefeed";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo"SQL Statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result=mysqli_stmt_get_result($stmt);
                            $rowCount=mysqli_num_rows($result);
                            $setPostOrder=$rowCount+1;

                            $sql="INSERT INTO gamefeed(titlePost,post,imgFullNameGallery,pdfFullNameGallery,orderPost,Pdate)VALUES(?,?,?,?,?,?)";
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"SQL Statement Failed";
                            }else{
                                mysqli_stmt_bind_param($stmt,"ssssss",$postTitle,$paragraph,$imageFullName,$pdfFullName,$setPostOrder,$date);
                                mysqli_stmt_execute($stmt);
                                move_uploaded_file($fileTempNameI,$fileDestinationI);
                                move_uploaded_file($fileTempNameP,$fileDestinationP);
                                header("Location:../NewsFeed.php?Upload=Success");
                            }
                        }
                     }
                    elseif($page == "soft"){                              //! soft feed
                        $sql="SELECT * FROM softfeed";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo"SQL Statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result=mysqli_stmt_get_result($stmt);
                            $rowCount=mysqli_num_rows($result);
                            $setPostOrder=$rowCount+1;

                            $sql="INSERT INTO softfeed(titlePost,post,imgFullNameGallery,pdfFullNameGallery,orderPost,Pdate)VALUES(?,?,?,?,?,?)";
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"SQL Statement Failed";
                            }else{
                                mysqli_stmt_bind_param($stmt,"ssssss",$postTitle,$paragraph,$imageFullName,$pdfFullName,$setPostOrder,$date);
                                mysqli_stmt_execute($stmt);
                                move_uploaded_file($fileTempNameI,$fileDestinationI);
                                move_uploaded_file($fileTempNameP,$fileDestinationP);
                                header("Location:../NewsFeed.php?Upload=Success");
                            }
                        }
                    }
                    elseif($page == "academy"){                         //! academy Feed
                        $sql="SELECT * FROM academicfeed";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo"SQL Statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result=mysqli_stmt_get_result($stmt);
                            $rowCount=mysqli_num_rows($result);
                            $setPostOrder=$rowCount+1;

                            $sql="INSERT INTO academicfeed(titlePost,post,imgFullNameGallery,pdfFullNameGallery,orderPost,Pdate)VALUES(?,?,?,?,?,?)";
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo"SQL Statement Failed";
                            }else{
                                mysqli_stmt_bind_param($stmt,"ssssss",$postTitle,$paragraph,$imageFullName,$pdfFullName,$setPostOrder,$date);
                                mysqli_stmt_execute($stmt);
                                move_uploaded_file($fileTempNameI,$fileDestinationI);
                                move_uploaded_file($fileTempNameP,$fileDestinationP);
                                header("Location:../NewsFeed.php?Upload=Success");
                            }
                        }
                    }

                }
            }else{
                    echo"File size is too big";
                    exit();
            }
        }else{
            echo"You had an error!";
            exit();
        }
    }else{
        echo"You need to upload a proper file type!";
        exit();
    }
}