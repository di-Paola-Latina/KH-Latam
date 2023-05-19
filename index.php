<?php

set_error_handler(function () {
	header('Location: /latam');
	die();
});

try {
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else
		$ip = $_SERVER['REMOTE_ADDR'];

	$response = file_get_contents("http://api.ipstack.com/{$ip}?access_key=590a68955fd919710f78384aecbfb3ed");
	$response = json_decode($response);
	$country = strtolower($response->country_code);

	if ($country == 'pr' || $country == 'cl' || $country == 'mx')
		header('Location: /' . $country);
	else
		header('Location: /latam');
} catch (Exception $e) {
	header('Location: /latam');
	die();
}
