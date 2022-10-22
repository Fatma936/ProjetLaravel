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
  <body>
  <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">List des épreuves</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
								<th>
							#
						</th>
						<th>
                        numepreuve
						</th>
						<th>
                        datepreuve 
						</th>
						<th>
                        lieu
						</th>
						<th>
                        matiere_id
						</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($epreuves as $epreuve)
						  <tr class="alert" role="alert">
						<td>
							{{$loop ->index+1}}
						</td>
						<td>
							{{$epreuve->numepreuve}}
						</td>
						<td>
							{{$epreuve->datepreuve}}
						</td>
						<td>
							{{$epreuve->lieu}}
						</td>
						<td>
							{{$epreuve->matiere_id}}
						</td>
						<td>
							<a class="btn btn-sm btn-info" href="">Edit</a>
							<a class="btn btn-sm btn-info" href="">Delete</a>
						</td>
					</tr>
					
					
                    @endforeach
					<tr>
						<td>						
							<a href="ajouter_ep"><button type="button" class="btn btn-dark">ajouter</button></a>
						</td>					
					</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>    
  </body>
</html>


