<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">


        </style>
    </head>
    <body>
        <?php
		define('file_path','/tafsir/file/');
        include_once 'Header.php';
        ?>
       
        <?php
        $db=mysqli_connect('localhost','root','','tafsir');

        if (mysqli_connect_errno()) {
            echo '<p class="error"><strong>Can\'t connect to database</strong></p>';
            exit();
        }

        //retrieve patients data
        //$sqlimage="SELECT picture FROM aprtmt";
        //$imageresult1=mysql_query($sqlimage);

        $query = "select * from tafsirs";
        $result = mysqli_query($db, $query);
        if (!$result) {
            echo '<p class="error"><strong>Can\'t connect to database, student table</strong></p>';
            exit();
        }


      /*  $user_image_location=IMG_PATH.$row['picture'];
        if ($row['picture']=='noimage'){
        ?>
        <p id="userimage"><img src='userspictures/noimage.png' alt="<?php echo $row['ptype']; ?>" height="100" width="100"/></p>
        <?php }
    else{
        ?>
        <p id="userimage"><img src="<?php echo $row['image']; ?>" alt="user image" height="100" width="100" id="password"/>
            <?php
    }*/
    //while($row = mysqli_fetch_array($result)){
			//echo $row['picture'];





        while ($row = mysqli_fetch_array($result)) {



        echo "<table>";
       
      echo "<a href =download.php?file=".$row['audio'].">";
       echo  $row['audio'];
echo "</a>";
       
echo "<tr>";
        echo "<td>Tafsir Title</td>"; echo "<td>" . $row['TafsirT'] . "</td>";
        echo "</tr>";
        echo "<td>Author Name</td>"; echo "<td>" . $row['AuthorN'] . "</td>";
        echo "</tr>";
        echo "<td>Teaching</td>"; echo "<td>" . $row['teaching'] . "</td>";
        echo "</tr>";
        echo "<td>Description</td>"; echo "<td>" . $row['descpt'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>

        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
