<?php
if(isset($_POST['submit'])){
    // if(!empty($_FILES['upload']['name'])){
        print_r($_FILES);
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST" enctype="multipart/form-data">

    <label for="">Choose a file</label>
    <input type="file" name="upload">
    <input type="submit"name="submit" value="UPLOAD">
    </form>
</body>
</html>
