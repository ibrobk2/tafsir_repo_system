<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel = "stylesheet" type="text/css" href="reststyle.css">
    <style type="text/css">

            form,td,tr{text-align:center}
            form{
                margin-bottom: 12px;
            }

        </style>
    </head>
    <body>
         <?php
        include_once 'Header.php';
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];
              ?>" method="post" >
              <div class ="container">
                  <br>
                  <br>
               <?php
                if (isset ($_POST['Lg'])) {
                if (isset ($_POST['password'])) {

                if (($_POST['UName'] == "Ismail") && ($_POST['password'] == "1243"))

            header("location:uploadT.php");


                }
                }
            ?>
        </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];
                  ?>" method="post" >
                   <div class="infoo">
                <a href="index.php"> Home |</a>
                <a href ="healp.php"> Help |</a>
                    <a href="about.php" > About |</a>
                        <a href="Contactus.php"> Contact Us |</a>
                            <a href ="Login.php"> Login |<a>
                                <a href="signup.php"> Register </a>
                                    </div>

                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
<div class="adminsec">
                        <h3> Admin Section </h3>

                        <table>
                            <tr><td>Username</td>
                                <td> <input type="text" name="UName" id="UName" value="" class="ab" /></td><td>Password</td><td><input type="password" name="password" id="password" value="" class="ac"/></td><td><input type="submit" name="Lg" id="Lg" value="Login" ></td></tr>

                        </table>

                    </div>


                </div>
            </form>
         <?php
        include_once 'footer.php';
        ?>
    </body>
</html>