<?php
/* For licensing terms, see /license.txt */

$ip = trim($_SERVER['REMOTE_ADDR']);
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    list($ip1, $ip2) = preg_split('/,/', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $ip = trim($ip1);
}
echo htmlentities($ip);
