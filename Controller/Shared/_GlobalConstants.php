<?php 
    include_once(__DIR__ . "/preventDirectCall.php");

    class GlobalConstants {
        public static $version;
        public static $rootPath;
        public static $bootstrapCss;
        public static $navbarCss;
        public static $jQueryJs;
        public static $requestedPage;
        public static $userAgent;
        public static $ipRemote;
        public static $ipForwarded;

        public static $defaultHtmlHeadersLocation;
        public static $navbarPhpLocation;
        public static $noscriptPhpLocation;
        public static $noscriptCssLocation;
        public static $footerCssLocation;
        public static $footerPhpLocation;
        public static $navbarJsLocation;

        public static function __constructStatic() {
            static::$version = "1.0.0";
            static::$rootPath = $_SERVER['DOCUMENT_ROOT'];
            static::$bootstrapCss = GlobalConstants::AppendVersion("/wwwroot/css/src/bootstrap/bootstrap.min.css");;
            static::$navbarCss = GlobalConstants::AppendVersion("/wwwroot/css/Shared/navbar.css");
            static::$jQueryJs = GlobalConstants::AppendVersion("/wwwroot/js/src/jQuery/jQuery.min.js");

            static::$requestedPage = GlobalConstants::GetRequestedPage();
            static::$userAgent = GlobalConstants::GetUserAgent();
            static::$ipRemote = GlobalConstants::GetRemoteIP();
            static::$ipForwarded = GlobalConstants::GetForwardedIP();

            static::$defaultHtmlHeadersLocation = __DIR__ . "/_defaultHtmlHeaders.php";
            static::$navbarPhpLocation = $_SERVER['DOCUMENT_ROOT'] . "/View/Shared/_navbar.php";
            static::$noscriptPhpLocation = $_SERVER['DOCUMENT_ROOT'] . "/View/Shared/_noscript.php";
            static::$noscriptCssLocation = GlobalConstants::AppendVersion("/wwwroot/css/Shared/noscript.css");
            static::$footerCssLocation = GlobalConstants::AppendVersion("/wwwroot/css/Shared/footer.css");
            static::$footerPhpLocation = $_SERVER['DOCUMENT_ROOT'] . "/View/Shared/_footer.php";
            static::$navbarJsLocation = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
        }

        public static function AppendVersion($srcPath) {
            return $srcPath . "?" . GlobalConstants::$version;
        }

        private static function GetRequestedPage()
        {
            if (array_key_exists('SCRIPT_NAME', $_SERVER)) {
                return $_SERVER['SCRIPT_NAME'];
            } else {
                return "Unknown";
            }    
        }

        private static function GetUserAgent()
        {
            if (array_key_exists('HTTP_USER_AGENT', $_SERVER)) {
                return $_SERVER['HTTP_USER_AGENT'];
            } else {
                return "Unknown";
            }    
        }

        private static function GetRemoteIP()
        {
            if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
                return $_SERVER['REMOTE_ADDR'];
            } else {
                return "Unknown";
            }    
        }

        private static function GetForwardedIP()
        {
            if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                return "Unknown";
            }
        }
    }  

    GlobalConstants::__constructStatic();
?>