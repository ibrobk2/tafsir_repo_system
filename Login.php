<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'header.php';
        $db1=mysqli_connect('localhost','root','','tafsir');
            $query1 = "select * from signup";
        $result1 = mysqli_query($db1, $query1);
        while ($row = mysqli_fetch_array($result1)) {
           if (isset ($_POST['UName'])) {
           if ($_POST['UName']==$row['Username'] && $_POST['APassword']==$row['Password'])
            header("location:tafsirDownload.php");
           }
        }
        ?>
        <h2>User Login Page</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];
                  ?>" method="post" >
        <table>
                            <tr><td>Username</td>
                                <tr><td> <input type="text" name="UName" id="UName" value="" class="ab" />
                                    </td></tr>
                                    <tr><td>Password</td>
                                        <tr><td><input type="password" name="APassword" id="APassword" value="" class="ac"/></td></tr>
                                        <tr><td><input type="submit" name="Login" id="Login" value="Login" /></td></tr>




        <tr><td> <a href="Signup.php"> Sinup For New User</a></td></tr>
        </table>
        </form>
        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
