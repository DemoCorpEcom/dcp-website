<?php
session_start();
include("server.php");
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Items</h1>
<ul>
    <li><a href="/dcp/product.php?id=1">Item 1</a></li>
    <li><a href="/dcp//product.php?id=2">Item 2</a></li>
    <li><a href="/dcp/product.php?id=3">Item 3</a></li>
    <p><a href="/dcp/product.php?redirectUrl=https://www.google.com"> Privacy Policy </a><p>
</ul>

<img src="/dcp/image.php?image_url=https://www.w3schools.com/html/img_girl.jpg"></img>

</html>
