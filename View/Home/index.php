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
    </head>
    <body>
        <?php include($homeConstants->viewSharedPath."/_navbar.php"); ?>
    </body>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/coverAnimation.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/StarBackground.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/abstract/threeObjectSet.js"></script>
    <script type="text/javascript" src="/wwwroot/js/Home/coverAnimation/island/island.js"></script>
    <script type="module" src="/wwwroot/js/Home/index.js"></script>
</html>