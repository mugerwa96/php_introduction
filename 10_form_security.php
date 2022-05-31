<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo $name=$_POST['name'];


    $name=htmlspecialchars($_POST['name']); 
    // html specialchar prevent js from executing


    echo $name;
    ?>
<!-- // look if i past a script inside my form,it will work -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<label for="name">Name:</label>
<br>
<input type="text" name="name" id="" class="name">
<input type="submit" value="SAVE" name="submit">
</form>
    

</body>
</html>

<!-- to avoid pssing in html tags and other tags, we use HTMLSPECIALCHARS -->

