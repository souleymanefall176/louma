<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>
<body>
    <section class="container">
        <div class="title">
            <h1>louma</h1>
            <p>Votre plateforme de recrutement professionnel,<br> connectant talents et opportunités<br> pour façonner l'avenir du travail</p>
        </div>
        <form class="formulaire">
          <div class="form-control">
            <input type="text" required>
            <label>Login</label>
          </div>
          <div class="form-control">
            <input type="password" required>
            <label>Password</label>
          </div>
          <input type="submit" value="Se connecter" class="btn-submit btn">
          <a class="mdp-oublie" href="">Mot de passe oublié ?</a>
          <hr>
          <a href="" id="nouveauCompte" class="btn-inscription btn">Creer un nouveau compte</a>
        </form>
    </section>
    <section class="inscription">
      <form action="">
            <i id="quitter"  class="fa-solid fa-xmark"></i>
            <h1>S'inscrire</h1>
            <h4>C'est rapide</h4>
            <hr>
            <div class="input-nom-prenom">
                <div class="form-control">
                  <input type="text" required>
                  <label>Nom</label>
                </div>
                <div class="form-control">
                  <input type="text" required>
                  <label>Prenom</label>
                </div>
            </div>
            <div class="form-control">
              <input type="email" class="num-mdp" required>
              <label>Email</label>
            </div>
            <div class="form-control">
              <input type="password" class="num-mdp" required>
              <label>Mot de passe</label>
            </div>
            <div class="texte">
                <p>En cliquant sur S’inscrire, vous acceptez nos Conditions générales, notre Politique de confidentialité et notre Politique d’utilisation des cookies. Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.</p>
            </div>
            <div class="center-btn-submit">
                <input type="submit" class="btn" value="S'inscrire" id="inscrire">
            </div>
      </form>
    </section>

    <script src="./assets/js/animation.js" type="module" defer ></script>
    <script src="./assets/js/transition.js" type="module" defer ></script>
</body>
</html>