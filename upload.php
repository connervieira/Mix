<?php include("./authentication.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mix - Upload</title>
    </head>
    <body>
        <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file_to_upload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Run very basic security checks. It is very important to note that these are not intended to replace an authentication system. If a malcious user is allowed to upload files, these security checks will not prevent them from compromising your server!
        if($imageFileType != "blend") {
            echo "Sorry, only BLEND files are allowed.";
            $uploadOk = 0;
        } 

        // Upload the file
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $target_file)) {
                echo "<p>The file ". htmlspecialchars(basename($_FILES["file_to_upload"]["name"])). " has been uploaded.</p>";
                echo "<a href='render.php?file_to_render=" . str_replace(".blend", "", $_FILES["file_to_upload"]["name"]) . "'>Render</a>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        ?>
    </body>
</html>
