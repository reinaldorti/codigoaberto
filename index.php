<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("Source\Controllers");

/*
 * WEB
 */
$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/cadastrar", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forget}", "Web:reset", "web.reset");
$router->get("/confirme/{token}", "Web:confirm", "web.confirm");

/*
 * AUTH
 */
$router->group(null);
$router->post("/login", "Auth:login", "auth.login");
$router->post("/register", "Auth:register", "auth.register");
$router->post("/forget", "Auth:forget", "auth.forget");
$router->post("/reset", "Auth:reset", "auth.reset");
$router->post("/profile", "Auth:profile", "auth.profile");
$router->post("/password", "Auth:password", "auth.password");

/*
 * AUTH SOCIAL
 */
$router->group(null);
$router->get("/facebook", "Auth:facebook", "auth.facebook");
$router->get("/google", "Auth:google", "auth.google");

/*
 * PROFILE
 */
$router->group("/me");
$router->get("/", "App:home", "app.home");
$router->post("/dashboard", "App:dashboard", "app.dashboard");
$router->get("/profile", "App:profile", "app.profile");
$router->get("/password", "App:password", "app.password");
$router->get("/sair", "App:logoff", "app.logoff");

/*
 * ERRORS
 */
$router->group("ops");
$router->get("/{errcode}", "Web:error", "web.error");

/*
 * ROUTER PROCESS
 */
$router->dispatch();

/*
 * ERRORS PROCESS
 */
if ($router->error()) {
    $router->redirect("web.error", ["errcode" => $router->error()]);
}

ob_flush();