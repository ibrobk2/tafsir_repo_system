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
        ?>
       <?php
                                    if (isset($_POST['Register'])) {
                                        $Phone=$_POST['Phone'];
                                        $Name=$_POST['Name'];
                                        $Username=$_POST['Username'];
                                        $emailadd=$_POST['emailadd'];
                                        $Password=$_POST['Password'];

                                        $db=mysqli_connect('localhost','root','','tafsir');
                                        $query="insert into signup (Phone,Name,Username,emailadd,Password)
                    values ('".$Phone."','".$Name."','".$Username."','".$emailadd."','".$Password."')";

                                        $result1=mysqli_query($db,$query);

header("location:Login.php");
                                    }
                                    ?>
                                    <form action="<?php echo $_SERVER['PHP_SELF'];
                                          ?>" method="post" >

                                           <h3> Registration for new User</h3>
                                           <table align="center">
                                            <tr><td>
                                                <label for="Phone">Phone Number</label></td>
                                               <td> <input type="text" name="Phone" id="Phone" value="" /></td></tr>



                                            <tr><td><label for="Name">Full Name</label></td>
                                               <td> <input type="text" name="Name" id="Name" value="" /></td></tr>


                                            <tr><td><label for="Username">Username</label></td>
                                                <td> <input type="text" name="Username" id="Username" value="" /></td></tr>

                                            <tr><td>
                                                    <label for="emailadd">Email Address</label></td>
                                               <td> <input type="Email" name="emailadd" id="emailadd" value="" /></td></tr>

                                           <tr><td>
                                                <label for="Password">Password</label></td>
                                               <td> <input type="Password" name="Password" id="Password" value="" /></td></tr>

                                            <tr><td>
                                                <label for="Password">Confirm Password</label></td>
                                               <td> <input type="Password" name="Password" id="Password" value="" /></td></tr>

                                            <tr><td>
                                                <input type="Submit" name="Register" value="Register"></td></tr>

                                            </table>
                                        </div>
                                       </form>
                                    <?php
                                    include_once 'footer.php';
                                    ?>
    </body>
</html>
