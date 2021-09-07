<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="History/css.css">

</head>
<body>
<?php
    require "navbar.php";
    ?>

        
    <?php
    
    include_once 'includes/dbh.inc.php';

    $sql="SELECT * FROM newsfeed ORDER BY orderPost DESC";          //!News Feed
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed";
    }else{
      echo'<div class="tb-box"><h2>News Development</h2>'; 
      echo '  
      <table>
      
            <tr>
                <th>Post Number</th>
                <th>Post Title</th>
                <th>Date & Time</th>
                <th></th>
            </tr>
            <tr>';
            
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        while($row=mysqli_fetch_assoc($result)){
        echo'
                <td>'.$row["orderPost"].'</td>
                <td>'.$row["titlePost"].'</td>
                <td>'.$row["Pdate"].'</td>
                <td>
                    <form method="POST" action="includes/history.inc.php">
                    <input type="hidden" name="idP" value="'.$row['idP'].'">
                        <button type="submit" class="dlt_btn" name="commentDeleteN">Delete</button>
                    </form>
                </td>
                </tr>
             ';  
        }
        echo'
        </table>
        </div>';
    }

    $sqlW="SELECT * FROM webfeed ORDER BY orderPost DESC";          //!web feed
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sqlW)){
        echo"SQL Statement Failed";
    }else{
      echo'<div class="tb-box"><h2>Web Development</h2>'; 
      echo '  
      <table>
      
            <tr>
                <th>Post Number</th>
                <th>Post Title</th>
                <th>Date & Time</th>
                <th></th>
            </tr>
            <tr>';
            
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        while($row=mysqli_fetch_assoc($result)){
        echo'
                <td>'.$row["orderPost"].'</td>
                <td>'.$row["titlePost"].'</td>
                <td>'.$row["Pdate"].'</td>
                <td>
                    <form method="POST" action="includes/history.inc.php">
                    <input type="hidden" name="idP" value="'.$row['idP'].'">
                        <button type="submit" class="dlt_btn" name="commentDeleteW">Delete</button>
                    </form>
                </td>
                </tr>
             ';  
        }
        echo'
        </table>
        </div>';


        $sqlA="SELECT * FROM appfeed ORDER BY orderPost DESC";      //!app Feed
        $stmt=mysqli_stmt_init($conn);
    
        if(!mysqli_stmt_prepare($stmt,$sqlA)){
            echo"SQL Statement Failed";
        }else{
          echo'<div class="tb-box"><h2>App Development</h2>'; 
          echo '  
          <table>
          
                <tr>
                    <th>Post Number</th>
                    <th>Post Title</th>
                    <th>Date & Time</th>
                    <th></th>
                </tr>
                <tr>';
                
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
    
            while($row=mysqli_fetch_assoc($result)){
            echo'
                    <td>'.$row["orderPost"].'</td>
                    <td>'.$row["titlePost"].'</td>
                    <td>'.$row["Pdate"].'</td>
                    <td>
                        <form method="POST" action="includes/history.inc.php">
                        <input type="hidden" name="idP" value="'.$row['idP'].'">
                            <button type="submit" class="dlt_btn" name="commentDeleteA">Delete</button>
                        </form>
                    </td>
                    </tr>
                 ';  
            }
            echo'
            </table>
            </div>';
        }
    }

    $sqlG="SELECT * FROM gamefeed ORDER BY orderPost DESC";          //!game feed
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sqlG)){
        echo"SQL Statement Failed";
    }else{
      echo'<div class="tb-box"><h2>Game Development</h2>'; 
      echo '  
      <table>
      
            <tr>
                <th>Post Number</th>
                <th>Post Title</th>
                <th>Date & Time</th>
                <th></th>
            </tr>
            <tr>';
            
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        while($row=mysqli_fetch_assoc($result)){
        echo'
                <td>'.$row["orderPost"].'</td>
                <td>'.$row["titlePost"].'</td>
                <td>'.$row["Pdate"].'</td>
                <td>
                    <form method="POST" action="includes/history.inc.php">
                    <input type="hidden" name="idP" value="'.$row['idP'].'">
                        <button type="submit" class="dlt_btn" name="commentDeleteG">Delete</button>
                    </form>
                </td>
                </tr>
             ';  
        }
        echo'
        </table>
        </div>';
    }

    $sqlS="SELECT * FROM softfeed ORDER BY orderPost DESC";             //!Soft Feed
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sqlS)){
        echo"SQL Statement Failed";
    }else{
      echo'<div class="tb-box"><h2>Soft Development</h2>'; 
      echo '  
      <table>
      
            <tr>
                <th>Post Number</th>
                <th>Post Title</th>
                <th>Date & Time</th>
                <th></th>
            </tr>
            <tr>';
            
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        while($row=mysqli_fetch_assoc($result)){
        echo'
                <td>'.$row["orderPost"].'</td>
                <td>'.$row["titlePost"].'</td>
                <td>'.$row["Pdate"].'</td>
                <td>
                    <form method="POST" action="includes/history.inc.php">
                    <input type="hidden" name="idP" value="'.$row['idP'].'">
                        <button type="submit" class="dlt_btn" name="commentDeleteS">Delete</button>
                    </form>
                </td>
                </tr>
             ';  
        }
        echo'
        </table>
        </div>';
    }

    $sqlAC="SELECT * FROM academicfeed ORDER BY orderPost DESC";              //!Academic
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sqlAC)){
        echo"SQL Statement Failed";
    }else{
      echo'<div class="tb-box"><h2>Academic</h2>'; 
      echo '  
      <table>
      
            <tr>
                <th>Post Number</th>
                <th>Post Title</th>
                <th>Date & Time</th>
                <th></th>
            </tr>
            <tr>';
            
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        while($row=mysqli_fetch_assoc($result)){
        echo'
                <td>'.$row["orderPost"].'</td>
                <td>'.$row["titlePost"].'</td>
                <td>'.$row["Pdate"].'</td>
                <td>
                    <form method="POST" action="includes/history.inc.php">
                    <input type="hidden" name="idP" value="'.$row['idP'].'">
                        <button type="submit" class="dlt_btn" name="commentDeleteAC">Delete</button>
                    </form>
                </td>
                </tr>
             ';  
        }
        echo'
        </table>
        </div>';
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