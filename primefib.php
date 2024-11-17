 <html>

<head>

<title>To generate prime and Fibinacci series</title>

</head>

<body>

<h3 align="center"> Please enter the limit to generate <em> PRIME</em> numbers and <em> FIBONACCI </em>series</h3>

<form method="post" action="prime_Fib.php">

PRIME:<input type="text" name="prime" /><br><br>

FIBONACCI:<input type="text" name="fibonacci"/><br><br>

<input type="submit" value="GENERATE" />

</form>

</body>

</html>

prime_Fib.php

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$prime_limit=$_POST['prime'];

$fib_limit=$_POST['fibonacci'];

function primeNum($prime_limit)

{
echo "Prime numbers from 2 to", $prime_limit, "are", "<br>";
for($j = 2; $j <= $prime_limit; $j++)
{
for($k = 2; $k <=$j; $k++)
{
if($j % $k == 0)
break;
}
if( $k == $j)
echo $j, "<br>";
}
}
function fibSeries($fib_limit)
{
$num = 0;
$n1 = 0;
$n2 = 1;
echo "Fibonacci series for first \n", $fib_limit+2, "\nnumbers:<br>";
echo "\n";
echo $n1."\n".$n2."\n";
 while ($num < Sfib_limit)
{
$n3=$n2+$ni;
 echo $n3."\n";
  $n1 = $n2;
   $n2 = $n3;
    $num++;
}
}
primeNum($prime_limit);
fibSeries($fib_limit);
}
?>