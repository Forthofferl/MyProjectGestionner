<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Connection</div>
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="loginEmail">Identifiant</label>
          <input class="form-control" id="loginEmail" type="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="loginPassword">Mot de passe</label>
          <input class="form-control" id="loginPassword" type="password" placeholder="Password">
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Se souvenir du mot de passe</label>
          </div>
        </div>
        <a class="btn btn-primary btn-block" href="index.php">Se connecter</a>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="<?= VIEW_PATH_BASE; ?>/register">S'inscrire</a>
        <a class="d-block small" href="<?= VIEW_PATH_BASE; ?>/resetPassword">Mot de passe oublié</a>
      </div>
    </div>
  </div>
</div>
