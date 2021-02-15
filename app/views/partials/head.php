<?php use App\Core\App; ?>
<!DOCTYPE html>
<html lang="<?= App::get("config")["site"]["language"]?>" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= App::get("config")["site"]["name"] ?></title>
	<link rel="canonical" href="<?= App::get("config")["site"]["url"] . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); ?>">
	<meta name="description" content="<?= App::get("config")["site"]["description"]; ?>">
	<meta property="og:url" content="<?= App::get("config")["site"]["url"] . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); ?>">
	<meta property="og:image" content="<?= App::get("config")["site"]["url"] . "assets/cover.png"; ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?= App::get("config")["site"]["name"] ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="<?= App::get("config")["site"]["author"]["twitter"]; ?>">
	<meta name="twitter:url" content="<?= App::get("config")["site"]["url"] . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); ?>">
	<meta name="twitter:title" content="<?= App::get("config")["site"]["name"] ?>">
	<meta name="twitter:description" content="<?= App::get("config")["site"]["description"]; ?>">
	<meta name="twitter:image" content="<?= App::get("config")["site"]["url"] . "assets/cover.png"; ?>">
	<meta name="theme-color" content="#fafafa">
	<meta name="author" content="<?= App::get("config")["site"]["author"]["name"]; ?>">
	<link rel="apple-touch-icon" href="/assets/favicon.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<link rel="icon" type="image/png" href="/assets/favicon.png">
	<meta name="msapplication-config" content="<?= asset("browserconfig.xml") ?>">
	<meta name="application-name" content="<?= App::get("config")["site"]["name"] ?>">
	<meta name="msapplication-tooltip" content="<?= App::get("config")["site"]["description"]; ?>">
	<meta name="msapplication-starturl" content="<?= App::get("config")["site"]["url"] . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); ?>?pinned=true">
	<link rel="manifest" href="<?= asset("site.webmanifest") ?>">
	<link rel="stylesheet" href="<?= asset("style.css") ?>">
</head>

<body>
	<!--[if IE]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->