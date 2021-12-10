<?php 
    header("X-Frame-Options: SAMEORIGIN");
    header("Strict-Transport-Security: max-age=1000; includeSubDomains; preload");
    //header("Content-Security-Policy: default-src 'self'; upgrade-insecure-requests");
    header("Content-Security-Policy: default-src 'self'");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My first web pages</title>
    </head>
    <body>
        <p><?php echo date("F jS, Y");?></p>
    </body>
    <script type="text/javascript" src="./wwwroot/js/Index/coverAnimation/coverAnimation.js"></script>
    <script type="text/javascript" src="./wwwroot/js/Index/coverAnimation/abstract/threeObjectSet.js"></script>
    <script type="text/javascript" src="./wwwroot/js/Index/coverAnimation/island/island.js"></script>
    <script type="module" src="./wwwroot/js/Index/index.js"></script>
</html>