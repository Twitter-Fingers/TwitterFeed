<?php


echo "<p>Practice App</p>";


require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

//Unique API keys and access tokens
$consumer_key = "2iwAwSG6tzD12EtWSI7QUc8H2";
$consumer_secret = "Y6KeSGp2LzEeM8FecE4YcKnpoI2ie1n2v8mftH46uz4h4c7ig4";
$access_token = "828704970593673217-fpjQo9kpuJ7dLSMtmmbPnPxRmo1OCEo";
$access_token_secret = "SHHc9AvOBWVPGJdzyZQ5G5zOcHa6YR7wKoqyE2Lqjby5x";



$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
//$content = $connection->get("account/verify_credentials");

//$statues = $connection->post("statuses/update", ["status" => "Posted a tweet using an API :D"]);

$query = array(
  "q" => "#obama"
);
 
$results = $connection->get('search/tweets', $query);
 
foreach ($results->statuses as $result) {
  echo $result->user->screen_name . ": " . $result->text . "\n";
}

?>