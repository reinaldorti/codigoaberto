<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <link rel="stylesheet" href="<?= asset("/style.min.css"); ?>"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>

    <link rel="icon" type="image/png" href="<?= asset("/images/favicon.png"); ?>"/>
</head>
<body>

<main class="main_content">
    <div class="page">
        <h1>Ooops, erro <?= $error; ?></h1>
        <p>Desculpe por isso, caso o problema persista, por favor entre em contato conosco.</p>
        <p>
            <a class="btn btn-blue fa fa-reply" href="<?= $router->route("web.login"); ?>" title="<?= site("name"); ?>">
                VOLTAR!
            </a>
        </p>
    </div>
</main>

</body>
</html>
