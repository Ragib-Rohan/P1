
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Development</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="newsfeedA/newsfeed.css">

</head>

<body class="dd">
    <?php
    require "navbar.php";
    ?>


<div class="container-fluid " id="newsfeedname" >
    <div class="row ">
        <div class="col-lg-12 mt-5  ">
                <h1 align="center">Game Development</h1>
                <hr>
        </div>

    </div>

</div>




    <?php
    
    include_once 'includes/dbh.inc.php';

    $sql="SELECT * FROM gamefeed ORDER BY orderPost DESC";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed";

    }else{
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        while($row=mysqli_fetch_assoc($result)){
            echo'
            <div class="container" id="pp">
            <div class="row ">
                <div class="col-lg-6 ">
                    <div class="col-lg-6 ml-5 pl-5">
                    <a href="includes/pdf/gallery/'.$row["pdfFullNameGallery"].'" target="_blank"  class="a_hover"><img src="includes/img/gallery/'.$row["imgFullNameGallery"].'" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <h2>'.$row["titlePost"].'</h2>
                    <img src="newsfeedA/gd.png" class="imgg" alt="">
                    <p>'.$row["post"].'</p>
                </div>
            <hr>
        </div>
    </div>';
        }
    }

?>



    <footer>
        <?php
        require "Footer.php";
        ?>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>