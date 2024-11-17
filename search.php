<html>
<style>
    body{
        display:flex;
        flex-direction:column;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
	<h2> ENTER THE KEY IN SEARCH BAR</h2>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="key" >    
		<input type="submit" style="color:blue" name="search" value="SEARCH">
	</form>
	<?php
	 $conn=mysqli_connect('localhost','root','','studentbmscw');
     if(!$conn)
     {
       die('connection failed');
     }
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$key=$_POST['key'];
		$sql="SELECT * from student where NAME LIKE '%$key%' or UUCMSNO LIKE '%$key%' or COURSE LIKE '%$key%'";
		//$sql="SELECT * from student where NAME='$key' or UUCMSNO='$key' or COURSE='$key'";
		$result=mysqli_query($conn,$sql);
		if($result->num_rows>0)
		{
			echo "<table border='3'><tr><td><b>NAME</b></td><td><b>UUCMSNO</b></td><td><b>COURSE</b></td><td><b>ADDRESS</b></td></tr>";
			while($row=$result->fetch_array())
			    {
					echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
				}
				echo "</table>";
		}
		else
			echo "Unsuccessful search";
	}	
	?>
</body>
</html>