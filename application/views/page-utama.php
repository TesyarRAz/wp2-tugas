<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
	<nav class="navbar navbar-light navbar-expand">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				Perpustakaan BSI
			</a>
			<div class="collapse navbar-collapse" id="navbar">
				<div class="ms-auto d-flex">
					<a class="btn btn-outline-dark me-2" href="#">Daftar Anggota</a>
					<a class="btn btn-outline-success" href="<?= site_url('auth') ?>">Login</a>
				</div>
			</div>
		</div>
	</nav>

	<main class="container mt-5">
				<img class="img-fluid" src="https://elibrary.bsi.ac.id/assets/images/slider/20200903173956-PerpusUniv.jpeg" alt="logo">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-10">
				<form class="input-group mt-3" role="search">
					<input class="form-control" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">
						<i class="bi bi-search"></i>
					</button>
				</form>
			</div>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>