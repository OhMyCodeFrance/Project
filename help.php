<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Projet - Nuit de l'Info 2016</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <section id="help">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="assets/img/20_logo_bleu.png" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Action 1</a></li>
                <li><a href="#">Action 2</a></li>
                <li><a href="#">Action 3</a></li>
                <li><a href="#">Action 4</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
          <div class="col-xs-12">
            <div class="row">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="categorie" class="col-xs-4 control-label">Catégorie</label>
                  <div class="col-xs-8" id="categorie">
                    <select class="form-control">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nom" class="col-xs-4 control-label">Nom</label>
                  <div class="col-xs-8" id="nom">
                    <select class="form-control">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-xs-4 control-label">Description</label>
                  <div class="col-xs-8">
                    <textarea rows="5" cols="24" class="form-control" placeholder="Ecrire votre texte..." id="description"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="maps" class="col-xs-4 control-label">URL Maps</label>
                  <div class="col-xs-8">
                    <input type="text" id="maps" class="form-control" placeholder="Lien Google Maps...">
                  </div>
                </div>
                <div class="form-group">
                  <label for="city" class="col-xs-4 control-label">Ville</label>
                  <div class="col-xs-8">
                    <input type="text" id="maps" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-ask">envoyer</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.min.js"></script>
    </body>
    </html>