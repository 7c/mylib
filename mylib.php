<?php


function hostToDomain($host) {
	$splitted = explode(".",trim($host));
	$domain=false;
	if (count($splitted)>1) {
		$domain=$splitted[count($splitted)-2].".".$splitted[count($splitted)-1];
	}
	return $domain;
}

