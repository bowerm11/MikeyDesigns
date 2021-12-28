<?php 
    include_once(__DIR__ . "/_GlobalConstants.php");

    class Logger {
        public static $logName;
        public static $logPath;
        public static $logFullPath;
        private static $logTsSpacing = 30;

        public static function __constructStatic()
        {
            static::$logName = "Log_" . date("Y-m-d") . ".txt";
            static::$logPath = GlobalConstants::$rootPath . "/Logs";
            static::$logFullPath = static::$logPath . "/" . static::$logName;
        }

        public static function Log($message, $pageName) {
            if (!file_exists(Logger::$logFullPath)) 
            {
                mkdir(Logger::$logPath, 0777, true);
                static::WriteHeader();
            }

            $message = static::GetTimeStamp($pageName) . $message;
            static::WriteLog($message);
        }

        private static function WriteHeader() {
            static::WriteLog("Log File Created At: " . date("Y-m-d") . ", " . date("h:i:sa"));
            static::WriteLog("Website Version: " . GlobalConstants::$version);
            static::WriteLog("================================================================");
        }

        private static function GetTimeStamp($pageName) {
            $ts = "[" . $pageName . ", " . date("h:i:sa") . "]";
            $tsLen = strlen($ts);
            $spacingDifference = static::$logTsSpacing - $tsLen;

            if($spacingDifference <= 0) {
                return $ts;
            } else {
                for($i = 0; $i < $spacingDifference; $i++) {
                    $ts .= " ";
                }

                return $ts;
            }   
        }

        private static function WriteLog($message) {
            file_put_contents(Logger::$logFullPath, $message . "\n", FILE_APPEND | LOCK_EX);
        }
    }

    Logger::__constructStatic();
?>