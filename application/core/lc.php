<?php 

$lang = "";

function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$info = (array)json_decode(get_data('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']));

$country_lang_code =  array(
  'pt' => 'pt' ,
  'br' => 'pt' ,
  'cv' => 'pt' , 
  'gw' => 'pt' , 
  'st' => 'pt' , 
  'mz' => 'pt' , 
  'ao' => 'pt' ,                     
  'tl' => 'pt' , 
  'au' => 'en' ,
  'bz' => 'en' ,
  'ca' => 'en' ,
  'cb' => 'en' ,
  'gb' => 'en' ,
  'in' => 'en' ,
  'ie' => 'en' ,
  'jm' => 'en' ,
  'nz' => 'en' ,
  'ph' => 'en' ,
  'za' => 'en' ,
  'tt' => 'en' ,
  'us' => 'en' ,
  'be' => 'fr' ,
  'ca' => 'fr' ,
  'fr' => 'fr' ,
  'lu' => 'fr' ,
  'ch' => 'fr' ,
  'at' => 'de' ,
  'de' => 'de' ,
  'li' => 'de' ,
  'lu' => 'de' ,
  'ch' => 'de'
  );

foreach ($country_lang_code as $key => $value) {
  if (strtolower($info["country_code"]) == strtolower($key)) {
    $lang = strtolower($value);
    break;
  }
}

if ($lng == "") {
  $lang = "en";
}

?>