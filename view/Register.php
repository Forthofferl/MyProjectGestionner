<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Créer un compte</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Prénom</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Renseignez votre prénom">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Nom</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Renseignez votre nom">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Renseignez votre e-mail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Renseignez un mot de passe">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmation mot de passe</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirmez votre mot de passe">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?= VIEW_PATH_BASE; ?>/register">S'inscrire</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= VIEW_PATH_BASE; ?>/login">Se connecter</a>
          <a class="d-block small" href="<?= VIEW_PATH_BASE; ?>/resetPassword">Mot de passe oublié?</a>
        </div>
      </div>
    </div>
  </div>