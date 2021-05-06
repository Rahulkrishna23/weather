<?php
$city_name="";

$api_key="d5dca15986d790cf0bc49293a3102524";
$api_url="http://api.openweathermap.org/data/2.5/weather?q=.$city_name&appid=.$api_key";
 $source=file_get_contents($api_url);  
 echo "<pre>";
 echo ($api_url); 
 ?> 