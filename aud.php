<html>
<head>
    <title>Query</title>
</head>
<body>
    <h1>Student Details</h1>
    <form method="POST" action="studentDB.php">
        NAME:<input type="text" name="NAME"/></br><br>
        REGNO:<input type="varchar" name="REGNO" required/></br><br>
        COURSE:<input type="text" name="COURSE"/></br><br>
        ADDRESS:<input type="text" name="ADDRESS"/></br><br>
        <input type="submit" name="INSERT"/></br></br><br>
    </form>
    <h2>Do you want to make some changes? Fill the below form</h2>
    <form method="POST" action="studentDB.php">
        Enter your name:<input type="text" name="UUCMS" required></br><br>
        Enter your new address:<input type="text" name="Updateaddress"></br><br>
        <input type="submit" name="UPDATE" value="SubmitNewValues"/></br></br><br>
    </form>
    <h2>Do you want to unregister a student</h2>
    <form method="POST" action="studentDB.php">
        Enter your UUCMS:<input type="text" name="UUCMS"></br><br>
        <input type="submit" name="DELETE" value="DELETE"/></br></br><br>
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","studentdmt");
if(!$conn)
{
    die("Connection failed");
}
if(isset($_POST['INSERT']))
{
    $NAME=$_POST['NAME'];
    $REGNO=$_POST['REGNO'];
    $COURSE=$_POST['COURSE'];
    $ADDRESS=$_POST['ADDRESS'];
    $sql="INSERT INTO student VALUES('$NAME','$REGNO','$COURSE','$ADDRESS')";
    $result=mysqli_query($conn,$sql);
    if($result)
        echo "INSERTION QUERY SUCCESSFUL <br>";
    else
        echo "INSERTION QUERY UNSUCCESSFUL <br>";
}
if(isset($_POST['UPDATE']))
{
    $UUCMS=$_POST['UUCMS'];
    $Updateaddress=$_POST['Updateaddress'];
    $update="UPDATE student SET Address='$Updateaddress' where UUCMS='$UUCMS'";
    $result1=mysqli_query($conn,$update);
    if($result1)
        echo "UPDATION QUERY SUCCESSFUL <br>";
    else
        echo "UPDATION QUERY UNSUCCESSFUL <br>";
}
if(isset($_POST['DELETE']))
{
    $UUCMS=$_POST['UUCMS'];
    $delete="DELETE FROM student where UUCMS='$UUCMS'";
    $result=mysqli_query($conn,$delete);
    if($result)
        echo "DELETION QUERY SUCCESSFUL <br>";
    else
        echo "DELETION QUERY UNSUCCESSFUL <br>";
}
?>