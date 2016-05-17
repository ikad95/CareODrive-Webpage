<?php
ob_start();
session_start();
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);
unset($_SESSION['fb_access_token']);
session_unset();
session_destroy();
header('Location: /COD');
ob_end_flush();