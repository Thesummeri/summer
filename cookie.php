<?php

 setcookie('USER_Name',"shyam",time()+36000);
 setcookie('USER_Age',"28",0);
 setcookie('Category',"BOOKS",time()+86400*5);
 ?>

 <html>
 <head>
 	<title> setting cookie with php</title>
 </head>
 <body>
 	<?php
 	echo "SET COOKIES<br><br>";
 	echo "User Name=".$_COOKIE['USER_Name']."<br>";

 	echo "User Age=".$_COOKIE['USER_Age']."<br>";
 	echo "Category=".$_COOKIE['Category']."<br>";
 	?>
 </body>
 </html>