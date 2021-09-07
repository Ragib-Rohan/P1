<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/15eb98ea36.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="navbarA/nav.css">

    <title>navbar</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg py-0 px-0 fixed-top" id="C2_Nav">
        <div class="container-fluid ">
            <a class="navbar-brand" href="HomePage.php"><img src="navbarA/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="HomePage.php">HOME</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#aa">ABOUT</a></li>
                    
                    
                    <?php
                    if(isset($_SESSION['userId']) || isset($_SESSION['adminId'])){
                        echo'
                        <li class="nav-item"><a class="nav-link" href="card.php">LECTURERS</a></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contents
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="WebDevelopment.php"><i class="fas fa-atlas"></i> Web
                                Development</a></a>
                            <a class="dropdown-item" href="appDevelopment.php"><i class="fas fa-mobile-alt"></i> App
                                Development</a>
                            <a class="dropdown-item" href="gameDevelopment.php"><i class="fas fa-gamepad"></i> Game
                                Development</a>
                            <a class="dropdown-item" href="softDevelopment.php"><i class="fas fa-desktop"></i> Software
                                Development</a>
                            <a class="dropdown-item" href="Academic.php"><i class="fas fa-book"></i> Academic</a>
                            <a class="dropdown-item" href="freelancing.php"><i class="fas fa-laptop-house"></i> FreeLencing</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="NewsFeed.php">News Feed</a></li>
                    ';
                    }
                    ?>
                    
                </ul>   
                                                                        <!-- //!logout button -->
                <?php
                if (isset($_SESSION['userId'])) {                       //!User Login
                    echo '
                <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropdown" id="lldropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>';
                    
                    echo " ".$_SESSION["userUid"];                          //! showing username
    
                   echo' </a>';


                 echo'
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" >  
                            <form action="includes/logout.inc.php" method="GET">
                                    <button type="submit" class="nav-btn " id="ll"  name="button_submit" value="button_submit"> <i class="fas fa-door-open"></i> Logout</button>
                            </form>
                        </a>
                    </div>
                </li>
                </ul>
                ';
               } elseif (isset($_SESSION['adminId'])) {                     //!Admin login
                echo '
            <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item dropdown" id="lldropdown">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>';
                
                echo " ".$_SESSION["adminUid"];                          //! showing username

               echo' </a>';


             echo'
                <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                <a class="dropdown-item " id="p_panel" href="PostingPanel.php"><i class="fas fa-book"></i> Posting Panel</a></a>
                <a class="dropdown-item " id="p_panel" href="history.php"><i class="fas fa-book"></i> Posting History</a></a>
                    <a class="dropdown-item" >  
                        <form action="includes/logout.inc.php" method="GET">
                                <button type="submit" class="nav-btn " id="ll"  name="button_submit" value="button_submit"> <i class="fas fa-door-open"></i> Logout</button>
                        </form>
                    </a>
                </div>
            </li>
            </ul>
            ';
           } 
               else {                                                     // !-- !!signin and login button -->
                    echo '
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item text-white"><a class="nav-link" href="Login.php"><i class="fas fa-hiking"></i> Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="Signup.php"><i class="fas fa-users"></i> Sign up</a>
                        </li>
                     </ul>';
                }

                ?>
            </div>
        </div>
    </nav>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>