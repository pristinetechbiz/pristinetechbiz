<?php

// if (! isset($_SERVER['REQUEST_URI']))
//         throw new Exception('REQUEST_URI server variable is not set');

// $requestURI = trim($_SERVER['REQUEST_URI'], '/');
// $requestURI = ltrim(preg_replace("#^".INSTALLATION_DIR."#uiUs", "", $requestURI), '/');
// $requestURI = empty($requestURI) ? 'login' : $requestURI;
// $requestURI = preg_replace('/(.*)\?.*/', '$1', $requestURI);
// $slug = $requestURI;

// if (empty($_SESSION['user_phone']) && $slug != 'login') {
//     header('Location: /admin/login');
// }
// else {

//     $page = CONTENT_PATH . $slug . '.php';
// 	unset($requestURI);
// 	return array($page, $slug);
// }

if (! isset($_SERVER['REQUEST_URI']))
	throw new Exception('REQUEST_URI server variable is not set');

$requestURI = trim($_SERVER['REQUEST_URI'], '/');

// Remove query string to check proper path (email campaigns add query parameters)
$requestURI = preg_replace('/\?.*/', '', $requestURI);

$requestURI = ltrim(ltrim($requestURI, INSTALLATION_DIR), '/');
$requestURI = empty($requestURI) ? 'home' : $requestURI;

$requestURI = preg_replace('/(.*)\?.*/', '$1', $requestURI);

$parts = explode('/', $requestURI);

// Default filepath
$slug = $parts[count($parts)-1];
$subPath = $requestURI . '.php';

$PARAMS = [];
if (count($parts) > 1 && $parts[0] == "admin") {
	$subPath = $requestURI . '.php';
}

if (count($parts) > 1 && $parts[0] == "user" ) {
	$subPath = $requestURI . '.php';
}

$page = CONTENT_PATH . $subPath;

if (! file_exists($page)) {
	header('HTTP/1.0 404 Not Found');
	$slug = '404';
	$page = CONTENT_PATH . $slug . '.php';
}
unset($requestURI);

return array($page, $slug, $parts);