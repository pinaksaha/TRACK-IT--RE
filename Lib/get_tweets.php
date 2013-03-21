<?php
	function getTweetsByLocation($location)
	{
		$q = "%23".$location.'@'.$location."&rpp=500";
		$link = "http://search.twitter.com/search.json?q=";
		$content_link =  $link.$q;
		//print $content_link;
		$tweets = file_get_contents($content_link,true);
		$tweets = json_decode($tweets,true);
		/*
		print("<pre>");
			print_r($tweets);
		print("</pre>");	
		*/
		
		
	
		for($i =0; $i < count($tweets[results]);$i++)
		{
		
			$user_name = $tweets[results][$i][from_user];
			$the_tweet = $tweets[results][$i][text];
			$img = $tweets[results][$i][profile_image_url];
			print "<a href='#' data-toggle='tooltip' data-placement='top' title='$the_tweet' data-original-title='$the_tweet'>";
			print "<img src='$img' class='img-circle'/>";
			print "</a>";
			
		}
		
	}
	
	function useSearchDisp($search,$location)
	{
		$q = $search."#".$search.'@'.$location."&rpp=500";
		$link = "http://search.twitter.com/search.json?q=";
		$content_link =  $link.$q;
		//print $content_link;
		$tweets = file_get_contents($content_link,true);
		$tweets = json_decode($tweets,true);
		/*
		print("<pre>");
			print_r($tweets);
		print("</pre>");	
		*/
		
		
	
		for($i =0; $i < count($tweets[results]);$i++)
		{
		
			$user_name = $tweets[results][$i][from_user];
			$the_tweet = $tweets[results][$i][text];
			$img = $tweets[results][$i][profile_image_url];
			print "<a href='#' data-toggle='tooltip' data-placement='top' title='$the_tweet' data-original-title='$the_tweet'>";
			print "<img src='$img' class='img-circle'/>";
			print "</a>";
			
		}
		
	}
			
			
?>