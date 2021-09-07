<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostingPanel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="PostingpanelA/css.css">
</head>

<body>
    <?php
    require "navbar.php";
    ?>
    <form action="includes/gallery-upload.inc.php" id="ff" method="post" enctype="multipart/form-data">
        <input type="text" name="postname" class="tt" placeholder="Title">              <!--//!name=postname-->
        <textarea name="paragraph" id="p_tr" placeholder="Paragraph"></textarea><br>    <!--//!name=paragraph-->
        <label for="fileI" class="lablle">Image</label>
        <input type="file" name="fileI" class="upload-box"><br><br>
        <label for="fileP" class="lablle">PDF</label> 
        <input type="file" name="fileP" class="upload-box"><br>                             <!--//!name=file-->

        <label>Select Upload place</label><br>
        <div id="selection_panal">
             
            <input type="radio" name="design" value="newsfeed">
            <label for="newsfeed">News Feed</label>
            
            <input type="radio" name="design" value="web">
            <label for="web">Web Development</label>
            
            <input type="radio" name="design" value="app">
            <label for="app">App Development</label><br>

            
            <input type="radio" name="design" value="game">
            <label for="game">Game Development</label>
           
            <input type="radio" name="design" value="soft">
            <label for="soft">Software Development</label>
            
            <input type="radio" name="design" value="academy">
            <label for="academy">Accademy</label>
        </div>
        <?php
           echo "<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>"; 
        ?>
        

        <input type="submit" name="submit" value="Upload">                              <!--//!name=submit-->
    </form>




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