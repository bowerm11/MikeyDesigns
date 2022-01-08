<?php 
    $pageTitle = "Cacoon Hub";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/CacoonhubConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Footwear Project screen.", "Project_Footwear");
    SqlVisitors::SqlInsertVisitors();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo ProjectConstants::$indexCss?>">
    </head>
    <body>  
        <div class="project-main-container navbar-removeable-section">
            <div class="100-Vw-Vh">
                <img class="img-fill-container-cover" src="<?php echo CacoonhubConstants::$img21?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <ol class="margin-none">
                                    <li>Mission Statement</li>
                                    <li>Need vs. Want</li>
                                    <li>Client: Donald Lombardi</li>
                                    <li>Profile: Peter Provonost</li>
                                    <li>Initial Research</li>
                                    <li>Market Research</li>
                                </ol>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <ol start="7">
                                    <li>HACs vs HAIs 
                                        <ul>
                                            <li>CLABSI Study</li>
                                            <li>CVC Classifications</li>
                                            <li>Types of CVCs</li>
                                            <li>Applications</li>
                                            <li>CVC Parts</li>
                                            <li>CVC Kits</li>
                                            <li>Luer Fittings</li>
                                            <li>Product Reference </li>
                                        </ul>
                                    </li>
                                    <li>Product Overview</li>
                                    <li>Product Features</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <p class="title margin-none">Mission Statement:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p>CLABSIs are the most common healthcare-associated infection passed to pediatric patients. Medical device manufacturers can not justify the cost of developing purpose-build devices for children because the window for using the product is to small to be profitable.</p>
                                <p class="margin-none">Any device designed to prevent CLABSI needs to be simple, sanitary, universal, and mass producible with potential applications that go beyond the initial intended function.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <p class="title margin-none">Need vs Want:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Need</th>
                                            <th>Want</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A device that provides an anti-microbial barrier for a hub connector on a central line while allowing a line to be connected to feed the hub.</td>
                                            <td>A device that provides a streamlined work flow for nurses and patients in order to make care as easy as possible.</td>
                                        </tr>
                                        <tr>
                                            <td>This device must close completely.</td>
                                            <td>Low manufacturing costs (<$4.00).</td>
                                        </tr>
                                        <tr>
                                            <td>The device must protect the patient from infections no matter where the enclosure ends up.</td>
                                            <td>Universal fit for all CVCs.</td>
                                        </tr>
                                        <tr>
                                            <td>Must not be a choking hazard.</td>
                                            <td>Soft, durable material for comfort.</td>
                                        </tr>
                                        <tr>
                                            <td>Disposable.</td>
                                            <td>Additional features and applications: a tubing pincher, temporary valve.</td>
                                        </tr>
                                        <tr>
                                            <td>Materials must be GRAS for medical devices.</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section 100-min-Vw-Vh d-flex">
                    <div class="container-fluid margin-t-b-10">
                        <div class="row h-100">
                            <div class="col-sm-12 col-md-6">
                                <p class="title margin-none">Client: Donald Lombardi</p>
                                <div class="seperator-line"></div>
                                <p class="margin-t-10 sub-title">Founder and President</p>
                                <p class="sub-title margin-none">Vision:</p>
                                <p>To create a world where infants and children have the highest quality medicines and medical devices designed specifically for their needs to improve their length and quality of life.</p>
                                <p class="sub-title margin-none">Education:</p>
                                <p>Amherst College, BA, Bioplastic / MIT, MS, Life Sciences Activities and Societies.</p>
                                <p class="sub-title margin-none">Professional Career:</p>
                                <p>Founder of Chintin Company Inc. Chief Intellectual Property Officer, Children Hospital Boston. Institute for Pediatric Innovation, Founder and President. Assistant Professor of Pediatrics, Tufts University School of Medicine.</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <img class="img-fill-container-cover h-100 w-100 border-r-5" src="<?php echo CacoonhubConstants::$img7?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section 100-min-Vw-Vh d-flex">
                    <div class="container-fluid margin-t-b-10">
                        <div class="row h-100">
                            <div class="col-sm-12 col-md-6 order-1 order-md-0">
                                <img class="img-fill-container-cover h-100 w-100 border-r-5" src="<?php echo CacoonhubConstants::$img28?>">
                            </div>
                            <div class="col-sm-12 col-md-6 order-0 order-md-1">
                                <p class="title margin-none">Profile: Peter Pronovost</p>
                                <div class="seperator-line"></div>
                                <p class="margin-t-10 sub-title">Champion of Checklists in Critical Care</p>
                                <p class="sub-title margin-none">Vision:</p>
                                <p class="margin-none">Have a world that follows a simple checklist protocols for infection prevention when inserting a central venous catheter to reduce infection. That checklist being:</p>
                                <ol>
                                    <li>Wash their hands with soap.</li>
                                    <li>Clean the patient's skin with chlorhexidine antiseptic.</li>
                                    <li>Put sterile drapes over the entire patient.</li>
                                    <li>Wear a sterile mask, hat, gown, and gloves.</li>
                                    <li>Put a sterile dressing over the catheter site.</li>
                                </ol>
                                <p class="sub-title margin-none">Education:</p>
                                <p>Intensive Care Specialist, John Hopkins Hospital, Baltimore, Maryland.</p>
                                <p class="sub-title margin-none">Professional Career:</p>
                                <p>Anesthesiology and Critical Care Medicine Professor, Medical Director for the Center of Innovation in Quality Patient Care.</p>
                            </div>        
                        </div>
                    </div>
                </div>
            <div>      
        </div>
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <?php include_once(GlobalConstants::$noscriptPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="text/javascript" src="<?php echo ProjectConstants::$indexJs?>"></script>
    </body>
</html>