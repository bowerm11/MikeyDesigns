<?php 
    include_once("../../Controller/Home/HomeConstants.php");
    include_once($homeConst->rootPath."/Controller/Shared/allowDirectCall.php");
    include_once($homeConst->rootPath."/Controller/Shared/_defaultHeaders.php");
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <title>Mikey Designs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $homeConst->bootstrapCss?>">
        <link rel="stylesheet" href="<?php echo $homeConst->homeCss?>">
        <link rel="stylesheet" href="<?php echo $homeConst->navbarCss?>">
    </head>
    <body>
        <div id="hand-helper" class="hand-graphic">
            <img class="hand-img" src="<?php echo $homeConst->handImg?>" alt="">
        </div>
        <?php include_once($homeConst->navBarPhp) ?>
    </body>
    <script type="text/javascript" src="<?php echo $homeConst->jQueryJs?>"></script>
    <script type="text/javascript" src="<?php echo $homeConst->coverAnimationJs?>"></script>
    <script type="text/javascript" src="<?php echo $homeConst->starBackgroundJs?>"></script>
    <script type="text/javascript" src="<?php echo $homeConst->islandJs?>"></script>
    <script type="text/javascript" src="<?php echo $homeConst->attractableBtnJs?>"></script>
    <script type="text/javascript" src="<?php echo $homeConst->navBarJs?>"></script>
    <script type="module" src="<?php echo $homeConst->indexJs?>"></script>
</html>