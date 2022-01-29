<?php 
    include_once("../../Controller/Shared/NavbarConstants.php");
    include_once(GlobalConstants::$rootPath."/Controller/Shared/preventDirectCall.php");
    include_once(GlobalConstants::$rootPath."/Controller/Projects/_Projects.php");
?>
<div id="loading-container" class="100-Vw-Vh">
    <div class="loading-elements">
        <img src="<?php echo $navConst->loadingImg?>" alt="Dog Image">
        <p class="text-center">Hello, I'm Holly and I'm loading your screen...</p>
    </div>
</div>
<div id="hamburgerClickable" class="consistent-btn hamburger-wrapper">
    <div id="hamburger-top-line" class="hamburger-line"></div>
    <div id="hamburger-bottom-line" class="hamburger-line"></div>
</div>  
<div id="homeClickable" class="consistent-btn home-wrapper" data-url="<?php echo $navConst->homeUrl?>">
    <img class="home-icon no-select" src="<?php echo $navConst->homeImg?>" alt="Home">
</div>  
<div class="nav-logo-container">
    <div class="nav-logo-wrapper">
        <img class="nav-logo-img no-select" src="<?php echo $navConst->logoImg?>" alt="Mikey Designs">
    </div>
</div>
<div id="nav-screen" class="container-fluid 100-Vw-Vh-vertical-sensitive-no-scroll" hidden>
    <div class="row stretch-to-screen margin-none">
        <div class="col-12 col-md-5 no-padding">
            <div class="row margin-none">
                <div id="nav-square-small-top-container" class="col-12" data-url="<?php echo $navConst->aboutUrl?>">  
                    <div id="nav-square-small-top" class="nav-scroll-style" title="Click Here for More Info">
                        <div>
                            <p id="about-text" class="block-title color-gray">
                                <span class="position-relative color-white animate-underline right-underline-gray">About</span>
                            </p>   
                        </div>   
                        <div id="about-info" class="about-container">
                            <p class="about-inner-header color-white">Hi, I'm Michael</p>
                            <p class="about-buzzword-line color-white">a... <span id="buzzword"></span></p><div class="cursor-blinker"></div>
                        </div> 
                        <p class="about-tidbit color-white margin-none">Click for more info...</p>
                    </div>
                </div>
                <div id="nav-square-small-bottom-container" class="col-12">
                    <div id="nav-square-small-bottom" class="nav-scroll-style">
                        <div>
                            <p id="contact-text" class="block-title color-white">
                                <span class="position-relative animate-underline left-underline-white">Let's Talk</span>
                            </p>  
                        </div> 
                        <div id="contact-info" class="contact-container">
                            <div class="square-inner-header">
                                <p class="margin-none">Michael Bower</p>
                                <p class="square-inner-header-small">Mikey Designs</p>
                            </div>
                            <div class="contact-table">
                                <div class="contact-table-line margin-t-10">
                                    <img src="<?php echo $navConst->fileImg?>" alt="Resume: " class="contact-img no-select">
                                    <a href="<?php echo $navConst->resumePath?>" class="contact-text" target="_blank">Resume</a>
                                    <div class="seperator-line"></div>
                                </div>    
                                <div class="contact-table-line margin-t-10">
                                    <img src="<?php echo $navConst->emailImg?>" alt="Email: " class="contact-img no-select">
                                    <a href="mailto:<?php echo $navConst->email?>" class="contact-text"><?php echo $navConst->email?></a>
                                    <div class="seperator-line"></div>
                                </div>    
                                <div class="contact-table-line">
                                    <img src="<?php echo $navConst->phoneImg?>" alt="Number: " class="contact-img no-select">
                                    <a href="tel:<?php echo $navConst->phoneNum?>" class="contact-text">+<?php echo $navConst->phoneNum?></a>
                                    <div class="seperator-line"></div>
                                </div> 
                                <div class="contact-table-line">
                                    <img src="<?php echo $navConst->locationImg?>" alt="Location: " class="contact-img no-select">
                                    <a href="<?php echo $navConst->locationGeo?>" target="_blank" class="contact-text"><?php echo $navConst->locationDisplayName?></a>
                                </div> 
                            </div>
                            <div class="contact-social-section">
                                <a href="https://github.com/bowerm11" target="_blank"><img src="<?php echo $navConst->gitImg?>" alt="Github" class="contact-img no-select contact-social-icon"></a>
                                <a href="https://www.linkedin.com/in/michael-bower-b6a265159/" target="_blank"><img src="<?php echo $navConst->linkedInImg?>" alt="LinkedIn" class="contact-img no-select contact-social-icon"></a>
                            </div>  
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div id="nav-square-large-right-container" class="col-12 col-md-7">  
            <div id="nav-square-large-right">
                <p id="project-text" class="block-title color-white">
                    <span class="position-relative animate-underline center-underline-white">Projects</span>
                </p>    
                <div id="projects-info" class="projects-container">
                    <div id="card-container" class="card-container nav-scroll-style">
                        <?php foreach(Projects::$projects as &$project): ?>
                            <div class="row projects-card" data-card-name="<?= $project->projectCardName; ?>" data-page-url="<?= $project->projectPageUrl; ?>">
                                <div class="col-12 card-img-container">
                                    <img src="<?= $project->projectImgUrl;?>" alt="<?= $project->projectDisplayName; ?>">
                                </div>
                                <div class="col-12">
                                    <p class="project-card-header"><?= $project->projectDisplayName; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div> 
            </div>
        </div>  
    </div>
</div>
