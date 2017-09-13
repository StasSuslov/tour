<div id="text_block">
<?php
//session_start();
//session_abort();
require 'scripts/connect.php';
if(isset($_COOKIE['id']) and isset($_COOKIE['hash']) /*and isset($_SESSION['id']) and isset($_SESSION['hash'])*/)
{
    mysqli_query($link, "UPDATE users SET user_hash='' WHERE user_id='".$_COOKIE['user_id']."'");
    mysqli_close($link);
    setcookie('id', NULL);
    setcookie('hash', NULL);
//    unset($_COOKIE['id']);
//    unset($_COOKIE['hash']);
    $_SESSION['id'] = NULL;
    $_SESSION['hash'] = NULL;
//    unset($_SESSION['id']);
//    unset($_SESSION['hash']);
//    unset($_SESSION['token']);
    header("Location: index.php");
}
else
{
    echo "Logout error!";
    if(!isset($_COOKIE['id'])) echo "No cookie id";
    if(!isset($_COOKIE['hash'])) echo "No cookie hash";
    if(!isset($_SESSION['id'])) echo "No session id";
    if(!isset($_SESSION['hash'])) echo "No session hash";
}
?>
</div>