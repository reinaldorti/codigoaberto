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
            <form class="form" name="reset" action="<?= $router->route("auth.reset"); ?>" method="post" autocomplete="off">

                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <label>
                    <span class="field">Nova Senha:</span>
                    <input value="" type="password" name="password" placeholder="Nova senha:"/>
                </label>

                <label>
                    <span class="field">Confirmar nova senha:</span>
                    <input value="" type="password" name="password_re" placeholder="Confirmar nova senha:"/>
                </label>

                <div class="form_actions">
                    <button class="btn btn-green btn-full">Atualizar Minha Senha</button>
                </div>
            </form>

            <div class="form_register_action">
                <p>Você também pode:</p>
                <a href="<?= $router->route("web.login"); ?>" class="btn btn-blue fa fa-reply"> Voltar ao Login</a>
            </div>
        </div>
    </div>
</main>

<script src="<?= asset("/scripts.min.js"); ?>"></script>

<?= $v->section("scripts"); ?>

</body>
</html>
