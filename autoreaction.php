<?php

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'Ethan Theunissen'; // facebook username / email 
$pass 		= ''; // facebook passwod
$r_male		= '3'; // reaction if user male , like = 4000, love = 1000, wow = 3000, haha = 2, sad = 7, angry = 0
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '5000'; // maximum reacted status
$token 		= 'EaEaEa696969';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
