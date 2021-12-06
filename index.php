<?php 
    header("X-Frame-Options: SAMEORIGIN");
    header("Strict-Transport-Security: max-age=1000; includeSubDomains; preload");
    header("Content-Security-Policy: script-src; upgrade-insecure-requests");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My first web page</title>
    </head>
    <body>
        <p><?php echo date("F jS, Y"); ?></p>
    </body>
</html>