<?php 

 $string = "http://api.openweathermap.org/data/2.5/weather?q=srinagar&appid=ebcf5230b3446f334fe3fa2fd2d4ce24";
 $data = json_decode(file_get_contents($string),true);

  echo "<img src='http://openweathermap.org/img/w/".$data['weather'][0]['icon'].".png'>";
 
?>