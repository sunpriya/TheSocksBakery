<html>
<head>
        <title>Helo World</title>
</head>
<body bgcolor="black">
<font color="white">
<?php
        move_uploaded_file($_FILES["photo"]["tmp_name"], 'uploads/file.jpg');
?>