<?php 
    include_once(__DIR__."/preventDirectCall.php");
        
    header("X-Frame-Options: SAMEORIGIN");
    header("Access-Control-Allow-Origin: *");
    header("Strict-Transport-Security: max-age=1000; includeSubDomains; preload");
    header("Content-Security-Policy: default-src 'self' blob:; upgrade-insecure-requests");
?>