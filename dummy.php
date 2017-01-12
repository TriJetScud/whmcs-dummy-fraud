<?php
# WHMCS Dummy Fraud Module - See README.md and COPYING for the legal stuff
function dummy_getConfigArray(){
	$array = array(
	'enable' => array('FriendlyName'=>'Enable', 'Type' => 'yesno', 'Description' => 'Tick to flag all orders as fraud')
	);
	return $array;
}

function dummy_doFraudCheck($params, $checkonly=false) {
	if ($params['enable']) {
		$result['error']['title'] = "Working as Intended";
		$result['error']['description'] = "This order was intentionally rejected as a fradulent order regardless of what you have entered. As an end-user you should not be seeing this message at all. If you are, please contact the owner of this WHMCS installation.";
		return $result;
	}
	else {
		return $params;
	}
}

function dummy_processResultsForDisplay($values) {
	echo 'Dummy fraud record result. Disregard';
	return array('Result name' => 'result value');
}
?>
