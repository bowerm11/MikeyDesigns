<?php 
    $pageTitle = "Admin Login";
    $usernameInputName = "username";
    $passwordInputName = "password";
    $loginButtonName = "login";
    $loginErrorMessage = null;
    
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Admin/AdminSession.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Admin/LoginConstants.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Admin Login screen.", "Admin_Login");
    SqlVisitors::SqlInsertVisitors();

    try {
        AttemptLogin();
    } catch (LoginException $l) {
        $loginErrorMessage = $l->GetMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" type="text/css" href="<?php echo LoginConstants::$loginCss?>">
    </head>
    <body>
        <div class="login-screen-container">
            <div class="login-window-container">
                <div class="login-window">
                    <p class="header">Login</p>
                    <?php if($loginErrorMessage != null): ?>
                        <div>
                            <p>There was a problem logging in.</p>
                            <p>Message: <?php echo $loginErrorMessage ?></p>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group text-start">
                            <label>Username</label>
                            <input type="text" name="<?php echo $usernameInputName?>" placeholder="username" class="login-input">
                        </div>    
                        <div class="form-group text-start">
                            <label>Password</label>
                            <input type="password" name="<?php echo $passwordInputName?>" placeholder="password" class="login-input">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="<?php echo $loginButtonName?>" class="login-btn" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once(GlobalConstants::$noscriptPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
    </body>
</html>

<?php 
    function AttemptLogin() {
        if(LoginSubmissionMade()) {
            CheckAuth();
            GrantAccess();
        }
    }

    function LoginSubmissionMade() {
        global $loginButtonName, $usernameInputName, $passwordInputName;

        if(isset($_POST[$loginButtonName]) && !empty($_POST[$usernameInputName]) && !empty($_POST[$passwordInputName])) {
            return true;    
        }

        return false;
    }

    function CheckAuth() {
        global $usernameInputName, $passwordInputName;

        $statement = Sql::$pdo->prepare('SELECT * FROM Admin WHERE Username = ?');
        $statement->execute([$_POST[$usernameInputName]]);

        $userRows = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (count($userRows) != 1) {
            throw new LoginException();
        }

        $userRow = $userRows[0];    
        if ($userRow['EntryAttempts'] > 3) {
            throw new LoginException("Max attempts at entering password exceeded.");
        }

        if (password_verify($_POST[$passwordInputName], $userRow['Password'])) {

        } else {
            $counterUpdateStatement = Sql::$pdo->prepare('UPDATE Admin SET EntryAttempts = ? WHERE RowId = ?');
            $counterUpdateStatement->execute([$userRow['EntryAttempts'] + 1, $userRow['RowId']]);
            throw new LoginException();
        }
    }

    function GrantAccess() {

    }

    class LoginException extends Exception {
        public function __construct(string $message = "Not authorized.", Throwable $previous = null)
        {
            parent::__construct($message, 0, $previous);
        }
    }
?>