<?php
	$DB_host = "127.0.0.1";
	$DB_user = "u991923994_fal_db";
	$DB_pass = "Hotspot_db123";
	$DB_name = "u991923994_Hotspot_db";

	try
		{
			$DB_con = new PDO("mysql:host={$DB_host}",$DB_user,$DB_pass);
			$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$dbname = "`".str_replace("`","``",$DB_name)."`";
			$DB_con->query("CREATE DATABASE $dbname");
			$DB_con->query("use $dbname");
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
	}
	
	/* Old Version, NOT creating DB if NOT Exist
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	*/
?>