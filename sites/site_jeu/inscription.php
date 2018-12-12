<!DOCTYPE html>
<html lang="fr">
<head>
  <title>inscription</title>
</head>
<body>
  <?php include("entete.php"); ?>
  <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal col-lg-6" action="cible_inscription.php" method="post">
            <h1>Incrivez-vous :</h1>
              <div class="form-group">
               <label for="text" class="col-lg-2 control-label">Nom:</label>
               <input type="text" class="form-control" id="text" placeholder="Nom" name="nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Prénom:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prénom" name="prenom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Mail:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="exemple@exemple.fr" name="mail">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Naissance:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="aaaa/mm/jj" name="date_naissance">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Login:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Entrez votre login" name="login">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre password" name="password">
              </div>
              <button class="btn btn-default">S'inscricre</button>
            </form>
          </div>
        </div>
</div>
<?php include("pied_page.php") ?>
</body>
</html>