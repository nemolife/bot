<?php 

ini_set('error_reporting', 'E_ALL');

$BotToken = "126421916:AAGvNptpXCJJvRgYBmQayE7JW-Qcl2Wa4t8"; #"126421916:AAGvNptpXCJJvRgYBmQayE7JW-Qcl2Wa4t8";
$WebSite = "https://api.telegram.org/bot".$BotToken; //."/getUpdates";

// #echo $WebSite;
$Update = file_get_contents('php://input'); //'php://input'
// var_dump($Update);
$Update = json_decode($Update, TRUE);

$ChatID = $Update[message][chat][id];
$Date = date("d-m-Y H:m:s", $Update[message][date]);
$MText = $Update[message][text];
 
// //  echo $ChatID;
// //  echo "<br />";
// //  echo $Date;
// //  echo "<br />";
// //  echo $MText;

// // echo "<pre>";
// // print_r($Update);
// // echo "</pre>";

// #print_r($Update);

$ChatID = $Update['username'];
$Message = $Update["message"]["text"];
// #echo $ChatID;
// #echo "<br />";
// #echo $Message;

switch ($Message) {
case '/start':
	send_message($ChatID, "HEllo PHPBOT");
 	break;
	
 	default:
// // 		# code...
 	break;
}

// // echo "hi";

function send_message($ChatID, $Message){

 	$URL = $GLOBALS[WebSite]."/sendmessage?chat_id="$ChatID."&text=".urlencode($Message);
 	file_get_contents($URL);
 }

// //
//   <?php

//   echo "Hello CR4ER30";

?>
