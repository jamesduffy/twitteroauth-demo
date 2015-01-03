<?php

/**
 * @file
 * Check if consumer token is set and if so send user to get a request token.
 */

/**
 * Exit with an error message if the CONSUMER_KEY or CONSUMER_SECRET is not defined.
 */
if (!getenv('CONSUMER_KEY') || !getenv('CONSUMER_SECRET')) {
  echo 'You need a consumer key and secret to test the sample code. Get one from <a href="https://apps.twitter.com">https://apps.twitter.com</a>.';
  exit;
}

/* Build an image link to start the redirect process. */
$content = '<a href="./redirect.php"><img src="./images/sign-in-with-twitter-gray.png" alt="Sign in with Twitter"/></a>';
 
/* Include HTML to display on the page. */
include('html.inc');
