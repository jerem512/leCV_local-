<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Base de donnée</title>
</head>
<body>
  <?php include("entete.php"); ?>
  <?php 
    session_start();
?>
<?php include("menu_co.php") ?>
</div>
  <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" action="cible.php" method="post">
            <h1>Ajoutez un jeu :</h1>
              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Nom</label>
                <input type="text" class="form-control" id="text" placeholder="Nom" name="nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Possesseur</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Possesseur" name="possesseur">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Console</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Console" name="console">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Prix</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prix en €" name="prix">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Nombre joueur max</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Nombre de joueur max" name="nbre_joueurs_max">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Commentaires</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Commentaires..." name="commentaires">
              </div>

              <br>
              
              <button class="btn btn-default">Ajouter le jeu</button>
            </form>
            <form class="form-horizontal" action="cible2.php" method="post">
            <h1>Modifiez un jeu :</h1>
              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Nom</label>
                <input type="text" class="form-control" id="text" placeholder="Nom" name="nom2">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Ancien possesseur</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Possesseur" name="ancien_possesseur">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Nouveau possesseur</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Possesseur" name="nouveau_possesseur">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Console</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Console" name="console2">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Prix de la vente</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prix en €" name="prix_vente">
              </div>
              <br>  
              <button class="btn btn-default">Modifier le jeu</button>
            </form>
          </div>
        </div>
</div>
<?php include("pied_page.php") ?>
</body>
</html>