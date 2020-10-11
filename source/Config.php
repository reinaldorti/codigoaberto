<?php

/*
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Código aberto - Auth em MVC com php",
    "desc" => "Aprenda a construir uma plicação de autenticação em MVC com php do Jeito Certo",
    "domain" => "localauth.com",
    "locale" => "pt-br",
    "root" => "http://localhost/cursos/youtube/codigoaberto",
]);

/*
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}

/*
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "codigoaberto",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/*
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "reinaldorti",
    "facebook_author" => "reinaldorti",
    "facebook_appId" => "100001492978629",
    "twitter_creator" => "@reinaldorti",
    "twitter_site" => "@reinaldorti"
]);

/*
 * EMAIL CONNECT
 */
define("MAIL", [
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "",
    "mode" => "tls",
    "from_name" => "Reinaldo",
    "from_email" => "reinaldorti@gmail.com"
]);

/*
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", [
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v4.0"
]);

/*
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", [
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/google"
]);