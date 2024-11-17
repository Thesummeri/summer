<?php

$num=10;
$denom=0;
try
{
	if($denom==0)
	throw new Exception("divide by zero error");
	$result=$num/$denom;
	echo "result of division:".$result."<br>";
}
	catch(Exception $e)
	{
		echo "Exception Caught,\n".$e->getMessage()."<br>";
	}
	try
	{
		$dateString='40-12-2023';
		$dateFormat='d-m-y';
		$date = date_create_from_format($dateFormat,$dateString);
		if(!$date || $date->format($dateFormmat)!==$dateString)
		{
			throw new exception("Invalid data format");
		}
		echo "date is valid".$dateString;
}
catch(Exception $e)
{
	echo "Exception  Caught,\n".$e->getMessage();
}
?>