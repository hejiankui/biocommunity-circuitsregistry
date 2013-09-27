<?php
session_start();
if($_SESSION['login_status']=='true'){
    echo 'YES';echo $_SESSION['login_user'];
} else {
    echo 'NO';
    
}

?>
