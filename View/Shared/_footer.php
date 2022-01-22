<?php 
    include_once("../../Controller/Shared/_GlobalConstants.php");
    include_once("../../Controller/Shared/NavbarConstants.php");
    include_once(GlobalConstants::$rootPath."/Controller/Shared/preventDirectCall.php");
    include_once(GlobalConstants::$rootPath."/Controller/Projects/_Projects.php");
?>
<div class="container-fluid footer-container">
    <div class="row">
        <div class="col-12 footer-top-block">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="footer-content">
                        <p class="footer-header">Mikey Designs</p>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="footer-content float-end">
                        <a href="<?php echo $navConst->resumePath?>" class="footer-general-url" target="_blank">Resume</a>
                        <a href="mailto:<?php echo $navConst->email?>" class="footer-general-url"><?php echo $navConst->email?></a>
                        <a href="tel:<?php echo $navConst->phoneNum?>" class="footer-general-url">+<?php echo $navConst->phoneNum?></a>
                        <a href="<?php echo $navConst->locationGeo?>" target="_blank" class="footer-general-url"><?php echo $navConst->locationDisplayName?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-5 footer-left-top-block">
            <div class="row">
                <div class="col-12">
                    <p class="footer-header text-center">General</p>
                    <div class="footer-seperator-line"></div>
                    <div class="footer-content text-center">
                        <a class="footer-general-url" href="<?php echo $navConst->homeUrl?>">Home</a>
                        <a class="footer-general-url" href="<?php echo $navConst->aboutUrl?>">About</a>
                    </div>         
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-7 footer-right-block">
            <p class="footer-header text-center">Projects</p>
            <div class="footer-seperator-line"></div>
            <div class="footer-content">
                <?php 
                    $i = 0;
                    foreach(Projects::$projects as &$project) {
                        $isNewRow = $i % 2 == 0;
                        $isLastProject = $i == Projects::$projectsCount - 1;

                        if ($isNewRow && $isLastProject): ?>
                            <div class="text-center">
                                <a class="footer-project-url" href="<?php echo $project->projectPageUrl?>"><?php echo $project->projectDisplayName?></a>
                            </div>
                        <?php elseif($isNewRow): ?>
                            <div class="text-center">
                                <a class="footer-project-url" href="<?php echo $project->projectPageUrl?>"><?php echo $project->projectDisplayName?></a>
                        <?php else: ?>
                                <a class="footer-project-url" href="<?php echo $project->projectPageUrl?>"><?php echo $project->projectDisplayName?></a>
                            </div>
                        <?php endif;
                        $i++;
                    }               
                ?>
            </div>        
        </div>
    </div>
</div>