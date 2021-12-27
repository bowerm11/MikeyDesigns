<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once("../../Controller/Home/HomeConstants.php");
    include_once($homeConst->rootPath."/Controller/Shared/_defaultHeaders.php");
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mikey Designs</title>
        <link rel="stylesheet" href="<?php echo $homeConst->bootstrapCss?>">
        <link rel="stylesheet" href="<?php echo $homeConst->homeCss?>">
        <link rel="stylesheet" href="<?php echo $homeConst->navbarCss?>">
    </head>
    <body>
        <div id="homeContainer" class="removeable-section">
            <div id="hand-helper" class="hand-graphic">
                <img class="hand-img" src="<?php echo $homeConst->handImg?>" alt="">
            </div>
            <div id="canvas-container"></div>
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