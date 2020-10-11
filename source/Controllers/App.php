<?php

namespace Source\Controllers;

use Source\Models\User;

/**
 * Class App
 * @package Source\Controllers
 */
class App extends Controller
{
    /** @var User */
    protected $user;

    /**
     * App constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if (empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);
            flash("error", "Oops! Acesso negado! Por favor, faça o login!");
            $this->router->redirect("web.login");
        }
    }

    public function home(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.home"),
            routerImage("Conta de {$this->user->first_name}")
        )->render();

        echo $this->view->render("theme/dashboard", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    public function profile(): void
    {
        $head = $this->seo->optimize(
            "Perfil |" . site("name"),
            site("perfil"),
            $this->router->route("app.profile"),
            routerImage("Profile")
        )->render();

        $user = (new User())->findById($_SESSION["user"]);

        echo $this->view->render("theme/profile", [
            "head" => $head,
            "user" => $user
        ]);
    }

    public function password(): void
    {
        $head = $this->seo->optimize(
            "Senha |" . site("name"),
            site("Senha"),
            $this->router->route("app.password"),
            routerImage("Senha")
        )->render();

        echo $this->view->render("theme/password", [
            "head" => $head,
        ]);
    }


    public function logoff(): void
    {
        unset($_SESSION["user"]);

        flash("success", "Você saiu com sucesso, volte logo {$this->user->first_name}!");
        $this->router->redirect("web.login");
    }
}