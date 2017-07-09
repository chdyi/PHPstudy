<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Image</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 17:34
 */

$file = $_FILES['file'];
$fileName = $file['name'];
move_uploaded_file($file['tmp_name'],$fileName);

echo "<img src='$fileName'>";
?>
</body>
</html>
