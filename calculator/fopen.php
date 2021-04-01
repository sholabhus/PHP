<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible"content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        </head>
        <body>
        <?php
        $file_handling =fopen('fopen.txt','a+');
        fwrite($file_handling, 'This is our content fo this file');
        fwrite($file_handling, "\n");
        fwrite($file_handling, 'This is the end');
        fclose($file_handling);
       // $new_file = fopen('newfile.txt', 'w');

        ?>
        </body>
        </html>
