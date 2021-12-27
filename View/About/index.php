<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once("../../Controller/About/AboutConstants.php");
    include_once($aboutConst->rootPath."/Controller/Shared/_defaultHeaders.php");
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
        <link rel="stylesheet" href="<?php echo $aboutConst->bootstrapCss?>">
        <link rel="stylesheet" href="<?php echo $aboutConst->aboutCss?>">
        <link rel="stylesheet" href="<?php echo $aboutConst->navbarCss?>">
    </head>
    <body>
        <div id="aboutContainer" class="removeable-section">
            <p>test</p>
        </div>    
        <?php include_once($aboutConst->navBarPhp) ?>
    </body>
    <script type="text/javascript" src="<?php echo $aboutConst->jQueryJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->attractableBtnJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->navBarJs?>"></script>
    <script type="module" src="<?php echo $aboutConst->indexJs?>"></script>
</html>