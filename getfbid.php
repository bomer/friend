<?php

// 10203321928766804


function GetUserIDFromUsername($username) {
    // For some reason, changing the user agent does expose the user's UID
    $options  = array('http' => array('user_agent' => 'some_obscure_browser'));
    $context  = stream_context_create($options);
    $fbsite = file_get_contents('https://www.facebook.com/' . $username, false, $context);

    // ID is exposed in some piece of JS code, so we'll just extract it
    $fbIDPattern = '/\"entity_id\":\"(\d+)\"/';
    if (!preg_match($fbIDPattern, $fbsite, $matches)) {
        throw new Exception('Unofficial API is broken or user not found');
    }
    return $matches[1];
}


if($_GET['id'])
	$id=$_GET['id'];

echo GetUserIDFromUsername($id);

