<!DOCTYPE <!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accueil - EmeetA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <script src="main.js"></script>
    </head>

    <body>
        <div id="container">

            <header>
                <!--<img src="images/logo.png" id="logo">-->
                <h1>Bienvenue sur eMeetA</h1>
            </header>

            <div id="interface">

                <article id="inscription">

                    <h2>S'inscrire</h2>
                        <p>
                            Prénom
                        </p>
                        <input type="text" name="name" placeholder="Prénom" />
                        <p>
                            Nom
                        </p>
                        <input type="text" name="firstName" placeholder="Nom" />
                        <p>
                            Date de naissance
                        </p>
                        <input type="text" name="birth" placeholder="jj/mm/aa" />
                        <p>
                            Localisation
                        </p>    
                            <select name="choiceCity">
                                <option value="choiceCity1">Paris</option>
                                <option value="choiceCity2">Lyon</option>
                                <option value="choiceCity2">Marseilles</option>
                                <option value="choiceCity2">Lille</option>
                                <option value="choiceCity2">Nantes</option>
                                <option value="choiceCity2">Bordeaux</option>
                            </select>
                        <p>
                            Adresse mail
                        </p>
                        <input type="text" name="mail" placeholder="Mail" />
                        <p>
                            Mot de passe
                        </p>
                        <input type="text" name="password" placeholder="Mot de passe" />
                        <p>
                            Confirmation du mot de passe
                        </p>
                        <input type="text" name="reviewPassword" placeholder="Confirmez votre mot de passe" />
                        <p>
                            Sexe
                        </p>                           
                            <select name="choiceGender">
                                <option value="choiceGender1">Homme</option>
                                <option value="choiceGender2">Femme</option>
                            </select>
                        <p>
                        <p>
                            <button type="button" class="save">S'inscrire</button>
                        </p>   
                                   
                </article>

                <article id="connexion">
                    <h2>Se connecter</h2>
                </article>

            </div>

            <footer>
                Copyright - eMeetA
            </footer>
        </div>
    </body>

</html>