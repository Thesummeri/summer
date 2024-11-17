<html>
<head>
<title> Background colour change band on week </title>
</head>
<body>
<img src="Img.jpg" style="align-items-center">
<?PHP
$days = array("Sunday", "Monday", "Tuesday", "wednuday","Thursday", "Friday", "Saturday");
$today = date ("w");
print ("<h3><b> Today is $days [$today].</b><b> have a nice day </b></h3>");
if($today==0)
{
$bgcolor= "Red";
}
else if ($today==1)
{
$bgcolor="orange";
}
else if ($today==2)
{
$bgcolor="yellow";
}
else if ($today==3)
{
$bgcolor="Green";
}
else if ($today==4)
{
$bgcolor= "Blue";
}
else if ($today==5)
{
$bgcolor= "Indigo";
}
else
{
$bgcolor=" Violet";
} 
print ("<body bgcolor=$bgcolor">);
?>
</body>
</html>