<?php
    $input  = "D:/GoogleDrive/Doing/__psd/luutruonghailan/youtube-luutruonghailan-tamsu.psd";

    // Phần xử lý của học viên

    // echo '<pre>';
    // print_r($path_parts);
    // echo '</pre>';
    // echo $path_parts['dirname'], "\n";
    // echo $path_parts['basename'], "\n";
    // echo $path_parts['extension'], "\n";
    // echo $path_parts['filename'], "\n"; 
    
    $output = [
        'name' => pathinfo($input,PATHINFO_EXTENSION),
        'basename' => pathinfo($input,PATHINFO_BASENAME)
    ];
    echo '<pre>';
    print_r( $output);
    echo '</pre>';