<?php

class core
{
	function getPage($page)
	{
		$filename = "$page".".php";
		$path = "include"."/".$filename;
		
		if(file_exists($path))
		{
			include($path);
		}
		elseif(!file_exists($path))
		{
			$file404 = "include"."/"."file404.php";
			include($file404);
		}
		
		//chose layout depending on page name		
	}
	
// 	function getSidebarPage($page)
// 	{
// 		$filename = "sidebar-"."$page".".php";
// 		$path = "include"."/".$filename;
// 	}
	
// 	function getSidebar()
// 	{
// 		echo "TEST";
// 		$filename = "sidebar.php";
// 		$path = "include"."/".$filename;
// 		echo $path;
// 	}
	
	function getZone($zone)
	{
		$filename = "$zone".".php";
		$path = "include"."/".$filename;
	
		if(file_exists($path))
		{
			include($path);
		}
		elseif(!file_exists($path))
		{
			echo "This Zone can't be loaded at the moment. Please try again later.";
		}
	
		//chose layout depending on page name
	}
	
}