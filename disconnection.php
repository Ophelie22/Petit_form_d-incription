<?php
session_start();// activer la session
session_unset();//desactiver la session
session_destroy();
setcookie('log', '', time()-3444, '/', null, false, true);

header('location: index.php');