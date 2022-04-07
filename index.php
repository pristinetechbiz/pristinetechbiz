<?php

require_once 'lib/config.php';

list($page, $slug) = include LIB_PATH . 'router.php';
define('SLUG', $slug);

// Cannot write any output when logging in/out (header())

if ($slug != 'login' && $slug != 'logout' && $slug != 'admin/login' && $slug != '404' && $slug != 'user/login' && $slug != 'home' && $slug != 'withdrawal') {
    include CONTENT_PATH . 'layout/header.php';
    include $page;
    include CONTENT_PATH . 'layout/footer.php';
}
else {
    include $page;
}