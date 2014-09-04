<?php

if(isset($_GET["qs"]))
{
	$input = $_GET["qs"];
}
else
{
	$input = "naslovna";
}


require_once "core/coreclass.php";

$web = new core;

?>