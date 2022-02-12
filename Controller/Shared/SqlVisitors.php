<?php 
    include_once(__DIR__ . "/_GlobalConstants.php");
    include_once(__DIR__ . "/preventDirectCall.php");
    include_once(__DIR__ . "/Config.php");
    include_once(__DIR__ . "/Logger.php");

    class Sql {
        public static $pdo = null;

        public static function __contructStatic() {
            $dsn = "mysql:host=" . Config::$dbhost . ";dbname=" . Config::$db . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                 static::$pdo = new PDO($dsn, Config::$dbuser, Config::$dbpass, $options);
            } catch (\PDOException $e) {
                 Logger::Log("Error Connecting to DB. Message: " . $e->getMessage() . " Code: " . (int)$e->getCode(), "SqlVisitors_ConstructSatic");
            }
        }

        public static function PdoConnectionSuccess()
        {
            if (static::$pdo == null) {
                return false;
            }

            return true;
        }
    }

    class SqlVisitors {
        public static function SqlInsertVisitors() {
            if (!Sql::PdoConnectionSuccess()) {
                return;
            }

            try {
                Sql::$pdo->prepare("
                    INSERT INTO Visitors (UserAgent, IpRemote, IpForwarded, RequestedPage)
                    VALUES (?, ?, ?, ?)
                    ")->execute([GlobalConstants::$userAgent, GlobalConstants::$ipRemote, GlobalConstants::$ipForwarded, GlobalConstants::$requestedPage]);
            } catch(\PDOException $e) {
                 Logger::Log("Error Inserting Visitors to DB. Message: " . $e->getMessage() . " Code: " . (int)$e->getCode(), "SqlVisitors_SqlInsertVisitors");
            }
        }
    }

    Sql::__contructStatic();
?>