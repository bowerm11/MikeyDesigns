<?php 
    include_once(__DIR__ . "/preventDirectCall.php");
    include_once(__DIR__ . "/Logger.php");

    ini_set('display_errors', false);

    function generalErrorHandler($errno, $errstr, $errfile, $errline)
    {
        if (!(error_reporting() & $errno)) {
            // This error code is not included in error_reporting, so let it fall through to the standard PHP error handler
            return false;
        }

        // $errstr may need to be escaped
        $errstr = htmlspecialchars($errstr);
        Logger::Log(
            "A general uncaught error has occured. Error Number: " . $errno . ", Error Str: " . $errstr . ", Error Line: " . $errline . ", Error File: ". $errfile,
            "generalErrorHandler"
        );     

        echo "An unknown error has occured. Please refresh.";
        die(1);
    }

    function fatalHandler() {
        $error = error_get_last();
    
        if($error !== NULL) {
            $errno   = $error["type"];
            $errstr = htmlspecialchars($error["message"]);
            $errline = $error["line"];
            $errfile = $error["file"];

            Logger::Log(
                "A fatal uncaught error has occured. Error Number: " . $errno . ", Error Str: " . $errstr . ", Error Line: " . $errline . ", Error File: ". $errfile,
                "fatalHandler"
            );     

            echo "A fatal error has occured. Please refresh.";
            die(1);
        }
    }

    register_shutdown_function("fatalHandler");
    set_error_handler("generalErrorHandler");
?>