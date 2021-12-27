<?php 
    include_once(__DIR__ . "/Logger.php");

    function globalErrorHandler($errno, $errstr, $errfile, $errline)
    {
        if (!(error_reporting() & $errno)) {
            // This error code is not included in error_reporting, so let it fall
            // through to the standard PHP error handler
            return false;
        }

        // $errstr may need to be escaped
        $errstr = htmlspecialchars($errstr);
        Logger::Log("A global uncaught error has occured. Error Number: " . $errno . ", Error Str: " . $errstr . ", Error Line: " . $errline . ", Error File: ". $errfile,
            "GlobalErrorHandler");     
        echo "An unknown error has occured. Please refresh.";
        exit(1);
    }

    set_error_handler("globalErrorHandler");
?>