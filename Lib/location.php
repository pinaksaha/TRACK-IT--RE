<?php

	function get_region_code()
	{ 
	    if (getenv(HTTP_X_FORWARDED_FOR)) {
	        $pipaddress = getenv(HTTP_X_FORWARDED_FOR);
	        $ipaddress = getenv(REMOTE_ADDR);
	        //echo "Your Proxy IPaddress is : ".$pipaddress. "(via $ipaddress)" ;
	        $url = "http://freegeoip.net/json/".$ipaddress;
	        $file = file_get_contents($url,true);
	        $file = json_decode($file,true);
	        return $file[region_code];
	    } 
	    else {
	        $ipaddress = getenv(REMOTE_ADDR);
	        $url = "http://freegeoip.net/json/".$ipaddress;
	        $file = file_get_contents($url,true);
	        $file = json_decode($file,true);
	        
	        return $file[region_code];
	    }
	 }
?>
