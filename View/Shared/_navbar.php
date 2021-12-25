<?php 
    include_once("../../Controller/Shared/NavbarConstants.php");
    include_once($navConstants->controllerSharedPath."/preventDirectCall.php");
?>
<link rel="stylesheet" href="<?php echo $navConstants->navbarCss ?>">
<div id="hamburgerClickable" class="hamburger-wrapper">
    <img class="hamburger-icon" src="<?php echo $navConstants->menuIconDir ?>" alt="Menu">
</div>  
<div id="nav-screen" class="container-fluid" hidden>
    <div class="row h-100 margin-none">
        <div class="col-6 no-padding">
            <div class="row h-100 margin-none">
                <div id="nav-square-small-top-container" class="col-12">  
                    <div id="nav-square-small-top">
                        <div>
                            <p id="about-text" class="block-title color-gray">
                                <span class="position-relative color-white animate-underline right-underline-gray">About</span>
                            </p>   
                        </div>   
                        <div id="about-info" class="about-container">
                            <p class="about-inner-header color-white">Hi, I'm Michael</p>
                            <p class="about-buzzword-line color-white">a... <span id="buzzword"></span></p><div class="cursor-blinker"></div>
                        </div> 
                    </div>
                </div>
                <div id="nav-square-small-bottom-container" class="col-12">
                    <div id="nav-square-small-bottom">
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
                                    <img src="/wwwroot/images/Shared/file-lines.svg" alt="Resume: " class="contact-img">
                                    <a href="" class="contact-text">Resume</a>
                                    <div class="seperator-line"></div>
                                </div>    
                                <div class="contact-table-line margin-t-10">
                                    <img src="/wwwroot/images/Shared/envelope.svg" alt="Email: " class="contact-img">
                                    <a href="" class="contact-text">Email</a>
                                    <div class="seperator-line"></div>
                                </div>    
                                <div class="contact-table-line">
                                    <img src="/wwwroot/images/Shared/phone.svg" alt="Number: " class="contact-img">
                                    <a href="tel:1-912-312-6253" class="contact-text">+1 (912) 312-6253</a>
                                    <div class="seperator-line"></div>
                                </div> 
                                <div class="contact-table-line">
                                    <img src="/wwwroot/images/Shared/location-arrow.svg" alt="Location: " class="contact-img">
                                    <a href="https://www.google.com/maps/place/Jacksonville,+FL/@30.3452116,-81.8231902,65957m/data=!3m2!1e3!4b1!4m5!3m4!1s0x88e5b716f1ceafeb:0xc4cd7d3896fcc7e2!8m2!3d30.3321838!4d-81.655651" target="_blank" class="contact-text">Jacksonville, FL</a>
                                </div> 
                            </div>
                            <div class="contact-social-section">
                                <a href="https://github.com/bowerm11" target="_blank"><img src="/wwwroot/images/Shared/github.svg" alt="Github" class="contact-img contact-social-icon"></a>
                                <a href="https://github.com/bowerm11" target="_blank"><img src="/wwwroot/images/Shared/linkedin.svg" alt="LinkedIn" class="contact-img contact-social-icon"></a>
                            </div>  
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div id="nav-square-large-right-container" class="col-6">  
            <div id="nav-square-large-right">
                <p id="project-text" class="block-title color-white">
                    <span class="position-relative animate-underline center-underline-white">Projects</span>
                </p>     
            </div>
        </div>  
    </div>
</div>
