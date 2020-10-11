<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <link rel="stylesheet" href="<?= asset("style.min.css"); ?>"/>

    <link rel="icon" type="image/png" href="<?= asset("images/favicon.png"); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>
</div>

<main class="main_content">
    <div class="main_content_box">
        <div class="login">
            <form class="form" action="<?= $router->route("auth.login"); ?>" method="post">
                <div class="form_social">
                    <a href="<?= $router->route("auth.facebook"); ?>" class="btn btn-facebook">
                        <i class='fa fa-facebook-square'></i> Facebook Login
                    </a>

                    <a href="<?= $router->route("auth.google"); ?>" class="btn btn-google">
                        <i class='fa fa-google-plus-square'></i> Google Login
                    </a>
                </div>

                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <label>
                    <span class="field fa fa-envelope"> E-mail:</span>
                    <input type="text" name="email" placeholder="E-mail:"/>
                </label>

                <label>
                    <span class="field fa fa-lock"> Senha:</span>
                    <input type="password" name="passwd" placeholder="Senha:"/>
                </label>

                <div class="form_actions">
                    <button class="btn btn-green fa fa-check-square-o"> Logar-se</button>
                    <a href="<?= $router->route("web.forget"); ?>" title="Recuperar Senha"> Recuperar Senha?</a>
                </div>
            </form>

            <div class="form_register_action">
                <p>Ainda não tem conta?</p>
                <a href="<?= $router->route("web.register"); ?>" class="btn btn-blue fa fa-plus"> Cadastre-se</a>
            </div>
        </div>
    </div>
</main>

<script src="<?= asset("scripts.min.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>
