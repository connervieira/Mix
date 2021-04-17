<?php include("./authentication.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mix - Render</title>
    </head>
    <body>
        <?php
        $command = "blender -b '/var/www/html/mix/uploads/" . $_GET["file_to_render"] . ".blend' -o '//" . $_GET["file_to_render"] . "' -f 0";

        // Run the command inside a hidden <p> tag so it's output doesn't fill the webpage after it finishes
        echo "<p hidden>";
        system(escapeshellcmd($command));
        echo "</p>";

        echo "<p>Render complete</p>";
        echo "<p><a href='uploads/" . $_GET["file_to_render"] . "0000.png'>View</a></p>";
        ?>
    </body>
</html>
