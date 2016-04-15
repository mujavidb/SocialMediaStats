<?php

function googlePlusStats( $pageURL ) {
	$curlRequest = curl_init();
	curl_setopt( $curlRequest, CURLOPT_URL, "https://clients6.google.com/rpc" );
	curl_setopt( $curlRequest, CURLOPT_POST, 1 );
	curl_setopt( $curlRequest, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $pageURL . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]' );
	curl_setopt( $curlRequest, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $curlRequest, CURLOPT_HTTPHEADER, array( 'Content-type: application/json' ) );
	$curlResponse = curl_exec( $curlRequest );
	curl_close( $curlRequest );
	$arrayResponse = json_decode( $curlResponse, true );

	return var_export($arrayResponse);

	//replace return statement above with statement below to return exact count as an int
	//return intval( $arrayResponse[0]['result']['metadata']['globalCounts']['count'] );
};

$pageURL = "http://www.example.com";
$googlePlusResponse = googlePlusStats($pageURL);

echo($googlePlusResponse);

/* String representation of response

array (
  0 => 
  array (
    'id' => 'p',
    'result' => 
    array (
      'kind' => 'pos#plusones',
      'id' => 'http://www.example.com/',
      'isSetByViewer' => false,
      'metadata' => 
      array (
        'type' => 'URL',
        'globalCounts' => 
        array (
          'count' => 10476,
        ),
      ),
      'abtk' => 'AEIZW7QHuMxl4YkyDWvlmBAgb2o6pbcLZziWrlcQ6Hr60H9RG30atacTjLuNIA8Z4pG8W/eNIMiR',
    ),
  ),
)

*/


?>