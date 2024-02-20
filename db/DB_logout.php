</php_
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookies(session_name(), '', time()-42000,
    $params["path"], $params ["domin"],
    $params["secure"],$params ["httponly"]
    );
}

session_destroy();

header('location: ../index.php');
exit;
?>