<?php

    $json = $_SERVER["QUERY_STRING"] ?? '';

    $files = scandir("scripts/");

    unset($files[0]);
    unset($files[1]);
    unset($files[2]);

    print_r($files);


?>