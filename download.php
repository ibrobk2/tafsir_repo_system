<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          $db=mysqli_connect('localhost','root','','tafsir');
       include_once 'header.php';
        ?>
    <?php 
    if(isset($_GET['file'])){
        $id = $_GET['file'];

        $sql = "SELECT * FROM tafsirs WHERE audio='$id'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            ?>
            <audio controls autoplay loop>
                <source src="file/<?php echo $_GET['file']; ?>" type="audio/mp3">
                <source src="file/<?php echo $_GET['file'];?>" type="audio/ogg">
                Your browser does not support the audio element.
            </audio><br>
    <a href="file/<?php echo $row['audio']; ?>" download="file/<?php echo $row['audio']; ?>">Downlaod File</a>

            <?php
        }
    }  

    ?>
</body>
</html>
