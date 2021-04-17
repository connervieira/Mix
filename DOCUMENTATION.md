# Documentation

## Setup

Follow these steps to get Mix up and running:

1. Copy the `mix` folder to the root of your web server.
2. Enable `file_uploads` in your `php.ini` file.
3. Grant write permissions to the 'uploads' folder using `chmod 777 uploads/`.
4. Edit `authentication.php` to redirect users who arent signed in, or block users who shouldn't have permission to use Mix.
5. Make sure the `blender` command line tool is installed.
6. Connect to http://\<yourserver.com\>/mix/ to upload and render your projects remotely.
