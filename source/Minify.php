<?php

/*
 * MINIFY CSS
 */
$minCSS = new \MatthiasMullie\Minify\CSS();
$cssDir = scandir(dirname(__DIR__, 1) . "/views/assets/css");
foreach ($cssDir as $cssItem) {
    $cssFile = dirname(__DIR__, 1) . "/views/assets/css/{$cssItem}";
    if (is_file($cssFile) && pathinfo($cssFile)["extension"] == "css") {
        $minCSS->add($cssFile);
    }
}
$minCSS->minify(dirname(__DIR__, 1) . "/views/assets/style.min.css");

/*
 * MINIFY JS
 */
$minJS = new \MatthiasMullie\Minify\JS();
$minJS->add(dirname(__DIR__, 1) . "/views/assets/js/jquery.js");
$jsDir = scandir(dirname(__DIR__, 1) . "/views/assets/js");
foreach ($jsDir as $jsItem) {
    $jsFile = dirname(__DIR__, 1) . "/views/assets/js/{$jsItem}";
    if (is_file($jsFile) && pathinfo($jsFile)["extension"] == "js") {
        $minJS->add($jsFile);
    }
}
$minJS->minify(dirname(__DIR__, 1) . "/views/assets/scripts.min.js");
