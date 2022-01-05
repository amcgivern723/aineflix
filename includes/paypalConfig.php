<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        // ClientID
        'AXSIV8116s_HN0vVT2nT0yRD53mTn55XlZThcLkRSSruRcHwRNhd8pBk4ZWHCNZuavZVucgXyL-y8CI8',
        // ClientSecret     
        'EPKCxGCzZkDBLdm09nVsdPXLIUWcTcmdEzkzJYRBG50f6WxTzOIrO7oejeywJ-_YUK6k_e04gOU1Kals'      
    )
);
?>