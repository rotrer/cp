<?

//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('codebird.php');

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'scSouxVkIaXKf6AEdkKt9E2xK';
$CONSUMER_SECRET = '8y6Qet4q5A06dwPJLQB0B4C6z3z7HSQ3FlwZNTSm21GZZWgJmH';
$ACCESS_TOKEN = '59977813-uTpLPa7HvCLSuU8qUBAPFan1SeZa8OzFkYACsCfkJ';
$ACCESS_TOKEN_SECRET = 'Xdu5vs0BoxZfH8iISCqdde6Mmp4kNSSpLtHJPeOGlwP4h';

//Get authenticated
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
$cb = Codebird::getInstance();
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);


//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
	'screen_name' => $q,
	'q' => $q,
	'count' => $count
);

//Make the REST call
$data = (array) $cb->$api($params);

//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);

?>