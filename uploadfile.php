<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">


        </style>
    </head>
    <body>
        <?php
		define('IMG_PATH','/tafsir/audio/');
        include_once 'Header.php';
        ?>
       <h2>Apartment Sample Tenant View</h2>
        <?php
        $db=mysqli_connect('localhost','root','','tafsir');

        if (mysqli_connect_errno()) {
            echo '<p class="error"><strong>Can\'t connect to database</strong></p>';
            exit();
        }

        //retrieve patients data
        //$sqlimage="SELECT picture FROM aprtmt";
        //$imageresult1=mysql_query($sqlimage);

        $query = "select * from aprtmt";
        $result = mysqli_query($db, $query);
        if (!$result) {
            echo '<p class="error"><strong>Can\'t connect to database, student table</strong></p>';
            exit();
        }


        $user_image_location=IMG_PATH.$row['picture'];
        if ($row['picture']=='noimage'){
        ?>
         <p id="userimage"><img src='userspictures/noimage.png' alt="<?php echo $row['ptype']; ?>" height="100" width="100"/></p>
        <?php }
    else{
         ?>
         <p id="userimage"><img src="<?php echo $row['image']; ?>" alt="user image" height="100" width="100" id="password"/>
             <?php
    }
    while($row = mysqli_fetch_array($result)){
			echo $row['picture'];





        while ($row = mysqli_fetch_array($result)) {



        echo "<table>";
        $user_image_location=IMG_PATH.$row['picture'];
		echo "<img src="."'".$user_image_location."'/>";
echo "<tr>";
        echo "<td>Property Type</td>"; echo "<td>" . $row['ptype'] . "</td>";
        echo "</tr>";
        echo "<td>Property For</td>"; echo "<td>" . $row['pfor'] . "</td>";
        echo "</tr>";
        echo "<td>Rooms</td>"; echo "<td>" . $row['rooms'] . "</td>";
        echo "</tr>";
        echo "<td>Price for Sell</td>"; echo "<td>" . $row['psell'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Area:</td>"; echo "<td>" . $row['area'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Address:</td>"; echo "<td>" . $row['address'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Other Description:</td>"; echo "<td>" . $row['descpt'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Email</td>"; echo "<td>" . $row['emailadd'] . "</td>";
        echo "</tr>";
        echo "<br>";
        echo "<td><a href=\"selectapp.php ?code=".$row['rooms']."&code1=". $row['address']." & code2=". $row['emailadd']."\">Select Estate</a></td>";
        }

        echo "</table>";
        ?>

        <?php
        include_once 'foter.php';
        ?>
    </body>
</html>

