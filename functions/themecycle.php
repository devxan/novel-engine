<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/autoimport.php';
$themes = ['default', 'dark'];

$themeIndex = array_search($_SESSION['theme'], $themes);

if ($themeIndex === count($themes) - 1) {
    $_SESSION['theme'] = $themes[0];
} else {
    $_SESSION['theme'] = $themes[$themeIndex + 1];
}

header("Location: {$_SERVER['HTTP_REFERER']}");
