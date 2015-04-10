<?php

// access URL and request method
$url = 'https://api.idxbroker.com/clients/savedlinks';
$data = array(
    'linkName'=>'polygon_test123456', // the link's url
    'pageTitle'=>'test123456', // the title tag
    'linkTitle'=>'polygon_test1234456', 'queryString'=>array('pgon'=>'44.69770131016885+-123.41671952046453,44.16225789428327+-124.16104325093329,43.56024232423529+-123.38376053608953,43.80257093351484+-122.01596268452703,44.51193134659297+-122.25766190327704,44.69770131016885+-123.41671952046453','radius'=>'', 'layerType'=>'polygon','clat'=>'44.135244','clng'=>'-123.064591','zoom'=>9,'idxID'=>'YOURMLS','pt'=>1,'srt'=>'prd')

);
$data = http_build_query($data); // encode and & delineate
$method = 'PUT';

// headers (required and optional)
$headers = array(
    'Content-Type: application/x-www-form-urlencoded', // required
    'accesskey: YOUAPIKEY', // required - replace with your own
    'outputtype: json', // optional - overrides the preferences in our API control page
    'apiversion: 1.2.0'
);

// set up cURL
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

if ($method != 'GET')
    curl_setopt($handle, CURLOPT_CUSTOMREQUEST, $method);

// send the data
curl_setopt($handle, CURLOPT_POSTFIELDS, $data);

// exec the cURL request and returned information. Store the returned HTTP code in $code for later reference
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if ($code >= 200 || $code < 300)
    $response = json_decode(response,true);
else
    $error = $code;

    echo $code;

    ?>
