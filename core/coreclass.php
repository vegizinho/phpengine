<?php

class core
{
	function getPage($page)
	{
		$filename = "$page".".php";
		$path = "include"."/".$filename;
		
		if(file_exists($path))
		{
			require_once($path);
		}
		elseif(!file_exists($path))
		{
			$file404 = "include"."/"."file404.php";
			require_once($file404);
		}
		
		//chose layout depending on page name		
	}
	
	function getSidebar($page)
	{
		$filename = "sidebar-"."$page".".php";
		$path = "include"."/".$filename;
	}
	
}