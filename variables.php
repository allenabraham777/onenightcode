<?php
    $myfile = fopen("./txt/lastCall.txt", "r") or die("Unable to open file!");
    $userLastCall = (int)fread($myfile,filesize("./txt/lastCall.txt"));
    fclose($myfile);

    $myfile = fopen("./txt/currentDate.txt", "r") or die("Unable to open file!");
    $currentDate = (int)fread($myfile,filesize("./txt/lastCall.txt"));
    fclose($myfile);    

    $frequency = 1;

    $myfile = fopen("./txt/anagha.txt", "r") or die("Unable to open file!");
    $anagha = (int)fread($myfile,filesize("./txt/anagha.txt"));
    fclose($myfile);

    $myfile = fopen("./txt/anaghan.txt", "r") or die("Unable to open file!");
    $anaghan = (int)fread($myfile,filesize("./txt/anaghan.txt"));
    fclose($myfile);
    
    $distance = $anagha < $anaghan ?$anaghan-$anagha:$anagha-$anaghan;

?>