<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter matiére</title>
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">TAF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="list_ep">List des épreuves</a></li>
                        <li class="nav-item"><a class="nav-link" href="list_lib">List des matières</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="position-absolute top-50 start-50 translate-middle">      
        <form method="Post" action="/store_lib"> 
  <div class="form-group">
  @csrf
    <label for="codeInput">Code</label>
    <input type="text" class="form-control" name="code" placeholder="Entrer le code">
  </div>
  <div class="form-group">
    <label for="libelleInput">Libelle</label>
    <input type="text" class="form-control" name="libelle" placeholder="libelle">
  </div>
  <div class="form-group">
  <label for="coefInput">Coefficient</label>
    <input type="text" class="form-control" name="coefficient" placeholder="coefficient">
    </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
   </form>
   </div>
</body>
</html>