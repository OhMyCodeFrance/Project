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
        <a class="navbar-brand" href="#" id="home">UrSafe</a>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>