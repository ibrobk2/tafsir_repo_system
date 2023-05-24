<?php
if(isset($_POST['add'])) {
    define("UPLOADPATH",'file/');
    $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

    if ((($_FILES["file"]["type"] == "video/mp4")
        || ($_FILES["file"]["type"] == "audio/mp3")
        || ($_FILES["file"]["type"] == "audio/wma")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg"))

        && ($_FILES["file"]["size"] < 20000)
        && in_array($extension, $allowedExts)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
        else {
            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 10024) . " Kb<br />";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            }
            else {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    "upload/" . $_FILES["file"]["name"]);
                echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            }
        }
    }
    else {

    echo "Invalid file";

    } 
   
    }

?>
<form class='form1' action="" method='post'
      enctype='multipart/form-data'>
    <input type="hidden" name="id" value="<?php echo $pid; ?>"/>

    <b>Song</b><br /><input type=text size='60' name='asong' /><br />
    <input name='file' type="file" id="file"  /><br />
    <input type='submit' name='add' value='Add Soundclip' />
</form>
   