<?php

//made by Bart T (aka @mrcreator1 @pwn2owned)


$activation = $_POST['activation-info'];
	
$encodedrequest = new DOMDocument;
$encodedrequest->loadXML($activation);

$decodedrequest = new DOMDocument;
$decodedrequest->loadXML(base64_decode($encodedrequest->getElementsByTagName('data')->item(0)->nodeValue));
$nodes = $decodedrequest->getElementsByTagName('dict')->item(0)->getElementsByTagName('*');

for ($i = 0; $i < $nodes->length - 1; $i=$i+2) {
	switch ($nodes->item($i)->nodeValue) {
		case "ActivationRandomness": $activationRandomness = $nodes->item($i + 1)->nodeValue; break;
		case "DeviceCertRequest": $deviceCertRequestBase64 = base64_decode($nodes->item($i + 1)->nodeValue); break;
		case "DeviceClass": $deviceType = $nodes->item($i + 1)->nodeValue; break;
		case "SerialNumber": $Number = $nodes->item($i + 1)->nodeValue; break;
		case "UniqueDeviceID": $uniqueDiviceID = $nodes->item($i + 1)->nodeValue; break;
		case "InternationalMobileEquipmentIdentity": $imei = $nodes->item($i + 1)->nodeValue; break;
		case "InternationalMobileSubscriberIdentity": $imsi = $nodes->item($i + 1)->nodeValue; break;
		case "IntegratedCircuitCardIdentity": $iccid = $nodes->item($i + 1)->nodeValue; break;
		case "UniqueChipID": $ucid = $nodes->item($i + 1)->nodeValue; break;
		case "ProductType": $ProductType = $nodes->item($i + 1)->nodeValue; break;
		case "ActivationState": $activationState = $nodes->item($i + 1)->nodeValue; break;
		case "ProductVersion": $productVersion = $nodes->item($i + 1)->nodeValue; break;
		case "MobileEquipmentIdentifier": $meid = $nodes->item($i + 1)->nodeValue; break;
		case "BasebandSerialNumber": $baseSerial = $nodes->item($i + 1)->nodeValue; break;
		case "EthernetAddress": $EthernetAddress = $nodes->item($i + 1)->nodeValue; break;
		case "BluetoothAddress": $BluetoothAddress = $nodes->item($i + 1)->nodeValue; break; 
	}
}

if(!file_exists("TokensGenerated")){
	mkdir("TokensGenerated", 0777, true);
}
if(!file_exists("TokensGenerated/".$Number)){
	mkdir("TokensGenerated/".$Number, 0777, true);
}


echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">\n<plist version=\"1.0\">".$activation."\n</plist>";

$activationTokenRequest = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">\n<plist version=\"1.0\">".$activation."\n</plist>";

file_put_contents("TokensGenerated/".$Number."/".$Number."-act-req.plist", $activation);

die();
?>
