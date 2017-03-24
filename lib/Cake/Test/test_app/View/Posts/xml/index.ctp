<?php
$data = array('profiles' => array('user' => array()));
foreach ($profiles as $user) {
	$data['profiles']['user'][] = array('@' => $user['User']['username']);
}
echo Xml::fromArray($data)->saveXml();
