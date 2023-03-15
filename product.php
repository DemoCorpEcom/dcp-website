<?php
include("server.php");
$id = $_GET['id'];
echo "<h1>" . $id . "</h1>";
$sql = " SELECT * FROM `product` WHERE `id` = '$id' ";
$qry = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($qry)) {
    $name = $row['name'];
    $description = $row['description'];
    echo '<div>' . $name . '</div>';
    echo $description;
}
if (isset($_GET['redirectUrl'])) {
    $redirectUrl = $_GET['redirectUrl'];
    header("Location: " . $redirectUrl);
}
?>
<html>
<form method="GET">
    <input type="text" name="redirectUrl" value="https://www.google.com" hidden>
    <input type="submit" name="submit" value="Google">
</form>
<a href="./product.php?redirectUrl=https://www.google.com"> Click </a>

</html>