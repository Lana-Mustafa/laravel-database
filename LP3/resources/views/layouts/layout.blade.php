<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


	
	@yield('style')	
</head>

<body class="d-flex flex-column h-100">
	<!--nav start-->
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">OCA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/form">Form</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/dashboard">Dashboard</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<!--nav end-->


	<!-- Main start-->

	<main >
		<div class="container">


			@yield('form')
			@yield('gridView')
			@yield('adminTable')
			@yield('userProfile')


			<!--main end-->
		</div>
	</main>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>