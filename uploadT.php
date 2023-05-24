<?php
include_once 'header.php';
?>
<?php
define("UPLOADPATH",'file/');
    
 
if(isset($_POST['submit'])){
// if (isset ($extension)){
   $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
    // $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

	//creating short variables
	$TafsirT=addslashes(trim($_POST['TafsirT']));
	$AuthorN=addslashes(trim($_POST['AuthorN']));
	$teaching=addslashes(trim($_POST['teaching']));
        $descpt=addslashes(trim($_POST['descpt']));
	$audio=addslashes(trim($_FILES['audio']['name']));


    if(! empty($TafsirT) && !empty($AuthorN) && !empty($teaching) && !empty($descpt) && !empty($audio)){
		$target=UPLOADPATH.$audio;

// if (in_array($extension, $allowedExts)){
		if(move_uploaded_file($_FILES['audio']['tmp_name'],$target)){

               
                		//include("dbconnect.php");

		//$register="INSERT INTO passengers(first_name,last_name,address,email,phone_no,password,gender,picture) values('".$firstname."','".$lastname."','".$address."','".$email."',".$phoneno.",('".$passwordOne."'),'".$gender."','".$picture."')";
$db=mysqli_connect('localhost','root','','tafsir');
            $query="insert into tafsirs (TafsirT,AuthorN,teaching,descpt,audio)
                    values ('".$TafsirT."','".$AuthorN."','".$teaching."','".$descpt."','".$audio."')";
                        $result1=mysqli_query($db,$query);


	    echo "<p class='bg'>Success</p>";



		


	}


    

    }
	else{

	  echo "<p class='warning'>Error one of the field is not fill</p>";

	}



}


?>

<html>
 <head>
<title>Arrow Transit home page</title>
<link rel = "stylesheet" type="text/css" href="reststyle.css">
</head>

 <body>


     <h2>Add New TAFSIR</h2>
  <form class="signUpForm" enctype="multipart/form-data" method="post" action="">
      <table align="center">
<tr>
		  <td>Tafsir Title:</td>
		  <td><input type="text" name="TafsirT" class="inputText"></td>
		 </tr>
		 <br/>
	     <tr>
		  <td>Name of the Author:</td>
		  <td><input type="text" name="AuthorN" class="inputText"></td>
		</tr>

	     <tr>
		  <td>Teaching:</td>
		  <td><input type="text" name="teaching" class="inputText"></td>
		</tr>
			<tr>
		  <td>Other Descriptions:</td>
                  <td><textarea cols="30" rows="10" name="descpt" class="inputText"></textarea></td>
		</tr>

		 <tr>

		  <td>Audio:</td>
		  <td><input type="file" name="audio"></td>
		</tr>
		<tr>
          <td>Submit</td>
		  <td><input type="submit" name="submit" value="Add"></td>
		</tr>
   	  </table>

	</form>
<?php
        include_once 'footer.php';
        ?>
 </body>
</html>