<?php 
    include_once(__DIR__ . "/_GlobalConstants.php");

    class Logger {
        public static $date;
        public static $logName;
        public static $logPath;
        public static $logFullPath;
        private static $logTsSpacing = 30;
        private static $logArchiveLenDays = 14;

        public static function __constructStatic()
        {
            static::$date = new DateTime("now", new DateTimeZone('America/New_York'));
            static::$logName = "Log_" . static::$date->format("Y-m-d") . ".txt";
            static::$logPath = GlobalConstants::$rootPath . "/Logs/";
            static::$logFullPath = static::$logPath . static::$logName;
        }

        public static function Log($message, $pageName) {
            //Make base path if dir doesnt exist
            if (!file_exists(Logger::$logPath)) {
                mkdir(Logger::$logPath, 0740, true);
            }

            //If file need to get created, do a dir scan and remove old logs
            if (!file_exists(Logger::$logFullPath)) 
            {
                static::WriteHeader();
                chmod(static::$logFullPath, 0740);
                static::CleanLogDir();
            }

            static::WriteLog(static::GetTimeStamp($pageName) . $message);
        }

        private static function WriteHeader() {
            static::WriteLog("Log File Created At: " . static::$date->format("Y-m-d") . ", " . static::$date->format("h:i:sa"));
            static::WriteLog("Timezone As Of File Creation: " . static::GetTZName());
            static::WriteLog("Website Version: " . GlobalConstants::$version);
            static::WriteLog("================================================================");
        }

        private static function GetTimeStamp($pageName) {
            $ts = "[" . $pageName . ", " . static::$date->format("h:i:sa") . "]";
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

        private static function CleanLogDir() {
            $files = array_diff(scandir(static::$logPath), array('.', '..'));
            $archiveDateTime = new DateTime("now", new DateTimeZone('America/New_York'));
            $archiveDateTime->sub(new DateInterval("P". static::$logArchiveLenDays . "D"));
            $archiveDate = $archiveDateTime->format("Y-m-d");

            foreach($files as $file) {
                $filePath = pathinfo($file);
                $fileName = $filePath["filename"];

                if(strpos($fileName, "Log_") !== false) {
                    $logDate = str_replace("Log_", "", $fileName);

                    if ($logDate <= $archiveDate) {
                        $fileToDelete = static::$logPath . $file;
                        static::WriteLog(static::GetTimeStamp("Logger") . "Deleting archive file: " . $fileToDelete);
                        unlink($fileToDelete);
                    }
                }
            }
        }

        private static function GetTZName()
        {
            $tz = static::$date->getTimezone();
            return $tz->getName();
        }

        private static function WriteLog($message) {
            file_put_contents(Logger::$logFullPath, $message . "\n", FILE_APPEND | LOCK_EX);
        }
    }

    Logger::__constructStatic();
?>