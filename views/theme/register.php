<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <link rel="stylesheet" href="<?= asset("/style.min.css"); ?>"/>

    <link rel="icon" type="image/png" href="<?= asset("/images/favicon.png"); ?>"/>
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
            <form class="form" action="<?= $router->route("auth.register"); ?>" method="post">

                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <div class="label_2">
                    <label>
                        <span> Nome:</span>
                        <input value="<?= $user->first_name; ?>" type="text" name="first_name" placeholder="Primeiro nome:"/>
                    </label>

                    <label>
                        <span> Sobrenome:</span>
                        <input value="<?= $user->last_name; ?>" type="text" name="last_name" placeholder="Último nome:"/>
                    </label>
                </div>

                <label>
                    <span> E-mail:</span>
                    <input value="<?= $user->email; ?>" type="text" name="email" placeholder="Informe seu e-mail:"/>
                </label>

                <label>
                    <span> Senha:</span>
                    <input type="password" name="passwd" placeholder="Informe sua senha:"/>
                </label>

                <div class="form_actions">
                    <button class="btn btn-green btn-full fa fa-plus"> Criar Conta</button>
                </div>
            </form>

            <div class="form_register_action">
                <p>Já tem conta?</p>
                <a href="<?= $router->route("web.login"); ?>" class="btn btn-blue fa fa-reply"> Voltar ao Login</a>
            </div>
        </div>
    </div>
</main>

<script src="<?= asset("/scripts.min.js"); ?>"></script>

<?= $v->section("scripts"); ?>

</body>
</html>