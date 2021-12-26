<?php 
    include_once($_SERVER['DOCUMENT_ROOT']."/Controller/Shared/preventDirectCall.php");
        
    header("X-Frame-Options: SAMEORIGIN");
    header("Strict-Transport-Security: max-age=1000; includeSubDomains; preload");
    //header("Content-Security-Policy: default-src 'self'; upgrade-insecure-requests");
    header("default-src * 'unsafe-inline' 'unsafe-eval'; script-src * 'unsafe-inline' 'unsafe-eval'; connect-src * 'unsafe-inline'; img-src * data: blob: 'unsafe-inline'; frame-src *; style-src * 'unsafe-inline';");
?>