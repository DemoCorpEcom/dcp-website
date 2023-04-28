<?php
if (isset($_GET['image_url'])){
        $url = $_GET['image_url'];
        $file = fopen($url, 'rb');
        fpassthru($file);
    }
?>