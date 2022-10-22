<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TAF</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
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
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <h1 class="text-white fs-3 fw-bolder">Travail à faire</h1>
                <p class="text-white-50 mb-0">List des épreuves/List des matières</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Notre but est de créer une page web qui affiche la liste des matières, pour ce faire suivez les étapes suivantes :</h2>
                        <p class="lead">
                            2. Créez la route «matiere» qui invoque le contrôleur «MatController ».</p>
                        <p class="lead">
                            3. Créez un contrôleur «MatController» et ajoutez la fonction «index» qui retourne la vue «affMat» avec les données des matières (mentionnés au-dessus).
                        </p>
                            <p class="lead">
                                 4. Créer la vue «affMat.blade.php » qui :
                            </p>
                                 <p class="lead">
                                     a. Étend la Template déjà créé,
                                </p>
                                     <p class="lead">
                                         b. Affiche le tableau des matières.
                                    </p>
                                         <p class="lead">
                                             5. Refaire la même chose pour l’épreuve.
                                        </p>
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Soit le schéma des tables suivant:</h2>
                        <p class="lead">MATIERE (codemat, libelle, coef),</p>
                        <p class="lead">EPREUVE (numepreuve, datepreuve, lieu)</p>
                        <p class="lead">1.Créer les migrationsdes tables epreuves et matieres</p>
                        <p class="lead">2.Modifier les migrations afin d’avoir les schémas des tables adéquats.</p>
                        <p class="lead">3.Générer les tables</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
