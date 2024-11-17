<?php
$size= 10;
for($i=$size;$i>=1;$i--)
{
for($j=1;$j<=$size-$i;$j++)
{
echo "&nbsp;&nbsp;";
}
for($k=1;$k<=$i;$k++)
{
echo "*&nbsp;&nbsp;";
}
echo "<br />";
}
?>