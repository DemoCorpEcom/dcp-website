<?php
session_start();
include("server.php");
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>List</h1>
<ul>
    <li><a href="/dcp/product.php?id=1">Item 1</a></li>
    <li><a href="/dcp//product.php?id=2">Item 2</a></li>
    <li><a href="/dcp/product.php?id=3">Item 3</a></li>
    <p><a href="/dcp/product.php?redirectUrl=https://www.example.com"> Privacy Policy </a><p>
    <p><a href="/dcp/product.php?redirect=https://www.example.com"> Terms & Conditions</a></p>
</ul>

</html>
