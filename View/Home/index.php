<?php 
    include_once("../../Controller/Home/HomeConstants.php");
    include_once($homeConstants->controllerSharedPath."/allowDirectCall.php");
    include_once($homeConstants->viewSharedPath."/_defaultHeaders.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mikey Designs</title>
        <link rel="stylesheet" href="<?php echo $homeConstants->indexCssPath?>">
        <link rel="stylesheet" href="/wwwroot/css/src/bootstrap/bootstrap.min.css">
    </head>
    <body>
        <div id="hand-helper" class="hand-graphic">
            <img class="hand-img" src="/wwwroot/images/Home/hand-pointer.svg" alt="">
        </div>
        <?php include($homeConstants->viewSharedPath."/_navbar.php"); ?>
    </body>
    <script type="text/javascript" src="/wwwroot/js/src/jQuery/jQuery.min.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/coverAnimation.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/StarBackground.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/island/island.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Shared/AttractableBtn.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Shared/navBar.js"></script>
    <script type="module" src="/wwwroot/js/Home/index.js"></script>
</html>