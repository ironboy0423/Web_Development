<?php

// code to get ip of the website visitor
function get_ip() {
  if(isset($_SERVER['HTTP_CLIENT_IP'])) {
    return $_SERVER['HTTP_CLIENT_IP'];
  }
  elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    return $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else {
    return(isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
  }
}
$ip=get_ip();

// code to use an api to get visitor data
$query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo "Current IP: " .$ip."<br/>";
  echo "ISP: ".$query['isp']."<br/>";
  echo "COUNTRY: ".$query['country']."<br/>";
  echo "COUNTRY CODE: ".$query['countryCode']."<br/>";
  echo "REGION NAME: ".$query['regionName']."<br/>";
  echo "CITY: ".$query['city']."<br/>";
  echo "ZIP: ".$query['zip']."<br/>";
  echo "TIMEZONE: ".$query['timezone']."<br/>";
  echo "AS: ".$query['as']."<br/>";
}
else {
  echo "System error!! Please connect to internet!!";
}
 ?>
