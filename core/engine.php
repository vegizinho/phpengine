<?php

if(isset($_GET["qs"]))
{
	$input = $_GET["qs"];
}
else
{
	$input = "start";
}


include "core/coreclass.php";

$web = new core;

?>