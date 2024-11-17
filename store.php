<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        Email ID:<input type="email" name="EMAIL" id="Email"required><br>
        <input type="file" name="image">
        <input type="submit" style="color:blue" name="upload">
    </form>
<?php
$conn=mysqli_connect("localhost","root","","studentdb_m");
if(!$conn)
{
    die("connetion fail");
}
if(isset($_POST['upload']))
{
    $Email=$_POST['EMAIL'];
    $Filename=basename($_FILES["image"]["name"]);
   
        $image=$_FILES['image']['tmp_name'];
        $ImageContent=addslashes(file_get_contents($image));
        $sql="INSERT INTO imagetable1 VALUES('$Email','$Filename','$ImageContent')";
        
    if(mysqli_query($conn,$sql)==true)
        echo "your image uploaded successfully";
    else
        echo "cant insert image".$conn->error;    
    $sqlq="SELECT*from imagetable1 where Email='$Email'";
    $result=mysqli_query($conn,$sqlq);
    $row=$result->fetch_array();
    echo '<img src="data:image/png;base64,'.base64_encode($row['ImageContent']).'"/>';
}
?>
</body>
</html>
