<?php
/*File to View JSON data for specific or all the fields*/

session_start();
$json = file_get_contents('http://prod-joyfulhome-api.synapsys.us/location/amenitiesInLocation/CA/San%20Francisco');
$obj = json_decode($json,true);
      // Dump all data of the Object
		echo "<b>Total: ".$obj['data']['restaurant']['total']."</b><br><br>";
		
	foreach($obj['data']['restaurant']['businesses'] as $ob)
		{
			echo "<b>".$ob['name']."</b><br>";
			/* echo $ob['location']['display_address'][0]."<br>";
			echo $ob['location']['display_address'][1].", ";
			echo $ob['location']['display_address'][2]." <br>";
			
			echo "<b><i>Rating: </i>".$ob['rating']."</b><br>";
			echo $ob['rating_img_url']."<br>";
			echo $ob['review_count']."<br>";
			echo $ob['rating_img_url_small']."<br>";
			echo $ob['url']."<br>";
			echo $ob['phone']."<br>";
			echo $ob['snippet_text']."<br>";
			echo $ob['image_url']."<br>";
			echo $ob['snippet_image_url']."<br>";
			echo $ob['display_phone']."<br>";
			echo $ob['rating_img_url_large']."<br>";
			echo $ob['id']."<br>";
			echo $ob['location']['cross_streets'].", ".$ob['location']['state_code']."<br>";
			
			echo $ob['location']['neighborhoods'][0]."<br>";
			echo $ob['location']['city'].", ".$ob['location']['state_code']." ".$ob['location']['postal_code']." "."<br>";
			echo $ob['location']['state_code']." ".$ob['location']['postal_code']."<br>";
			echo $ob['location']['country_code']."<br><br><br>"; */
		}
	foreach($obj['data']['grocers']['businesses'] as $ob)
		{
			echo "<b>".$ob['name']."</b><br>";
			/* echo $ob['location']['display_address'][0]."<br>";
			echo $ob['location']['display_address'][1].", ";
			echo $ob['location']['display_address'][2]." <br>";
			
			echo "<b><i>Rating: </i>".$ob['rating']."</b><br>";
			echo $ob['rating_img_url']."<br>";
			echo $ob['review_count']."<br>";
			echo $ob['rating_img_url_small']."<br>";
			echo $ob['url']."<br>";
			echo $ob['phone']."<br>";
			echo $ob['snippet_text']."<br>";
			echo $ob['image_url']."<br>";
			echo $ob['snippet_image_url']."<br>";
			echo $ob['display_phone']."<br>";
			echo $ob['rating_img_url_large']."<br>";
			echo $ob['id']."<br>";
			echo $ob['location']['cross_streets'].", ".$ob['location']['state_code']."<br>";
			
			echo $ob['location']['neighborhoods'][0]."<br>";
			echo $ob['location']['city'].", ".$ob['location']['state_code']." ".$ob['location']['postal_code']." "."<br>";
			echo $ob['location']['state_code']." ".$ob['location']['postal_code']."<br>";
			echo $ob['location']['country_code']."<br><br><br>"; */
		}
	foreach($obj['data']['banks']['businesses'] as $ob)
		{
			echo "<b>".$ob['name']."</b><br>";
			/*echo $ob['location']['display_address'][0]."<br>";
			echo $ob['location']['display_address'][1].", ";
			echo $ob['location']['display_address'][2]." <br>";
			
			echo "<b><i>Rating: </i>".$ob['rating']."</b><br>";
			echo $ob['rating_img_url']."<br>";
			echo $ob['review_count']."<br>";
			echo $ob['rating_img_url_small']."<br>";
			echo $ob['url']."<br>";
			echo $ob['phone']."<br>";
			echo $ob['snippet_text']."<br>";
			echo $ob['image_url']."<br>";
			echo $ob['snippet_image_url']."<br>";
			echo $ob['display_phone']."<br>";
			echo $ob['rating_img_url_large']."<br>";
			echo $ob['id']."<br>";
			echo $ob['location']['cross_streets'].", ".$ob['location']['state_code']."<br>";
			
			echo $ob['location']['neighborhoods'][0]."<br>";
			echo $ob['location']['city'].", ".$ob['location']['state_code']." ".$ob['location']['postal_code']." "."<br>";
			\echo $ob['location']['state_code']." ".$ob['location']['postal_code']."<br>";
			echo $ob['location']['country_code']."<br><br><br>";*/
		}
?>
