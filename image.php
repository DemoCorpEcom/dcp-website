
<?php
session_start();
include("server.php");

if (isset($_GET['image_url'])){
        $url = $_GET['image_url'];
        $file = fopen($url, 'rb');
        header("Content-Type: image/jpeg");
        fpassthru($file);
    }
?>