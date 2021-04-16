<!DOCTYPE html>
<html>
    <body>
        <p>Please upload the file you'd like to render.</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file_to_upload">
            <input type="submit" value="Upload" name="submit">
        </form>

        <hr>

        <p>Alternatively, please enter the name of an uploaded file to render.</p>
        <form action="render.php" method="get" enctype="multipart/form-data">
            <input type="text" name="file_to_render">
            <input type="submit" value="Render" name="submit">
        </form>
    </body>
</html>
