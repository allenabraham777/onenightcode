<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calling</title>
</head>
<body style="text-align:center;" style="background:#438EC8">
    <br>
    <br>
    <br>
    <br>
    <img src="https://i.ya-webdesign.com/images/lady-vector.png" alt="Bae">
    <h1>Calling Bae</h1>
    <div style="background:#ff0000; padding:10px; height: 50px; width:50px; border-radius: 100px; position:relative; left:50%; transform:translate(-50%)">
        <a href="index.php">
            <img src="https://www.pngkit.com/png/full/110-1103824_19-telephone-clip-black-and-white-download-phone.png" style="width:50px;" alt="">
        </a>
    </div>
</body>
</html>

<?php
include_once 'variables.php';

if(isset($_POST))
{
    $myfile = fopen("./txt/lastCall.txt", "w") or die("Unable to open file!");
    $txt = $currentDate;
    fwrite($myfile, (string)$txt);
    fclose($myfile);   
}
?>