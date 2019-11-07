<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
require_once(PARTIALS_PATH . "verify_session.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <link href="Style.css" rel="stylesheet" type="text/css">
    <!-- Required meta tags -->
	<title>Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
	 <!-- <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css"> -->
	</head>
	
	<style type="text/css">
  body {
	color: white;
    background-image: radial-gradient(circle, #32373b, #2b363d, #23343e, #183340, #083241); }
  </style>
	<body>
	<?php include(PARTIALS_PATH . "navbar.php") ?>
	
	<div class="container-fluid  text-center" style="height: 50px;">
	
		<div class="checkbox mb-5"></div><!-- espacio -->
		
		
		<label for="Cedula" >Cedula</label><div class="checkbox mb-1"></div><!-- espacio -->
		<input type="number" class="btn btn-outline-primary form-control" style="width:520px; color:black;" id="Cedula" aria-describedby="Cedula" placeholder="Ingrese Cedula">
		<small id="emailHelp" class="form-text text-muted">Unico registro con cedula +18</small>
		
		<div class="checkbox mb-5"></div><!-- espacio -->
		
		<div class="d-flex justify-content-center">
		
		
		<div class="card border-primary mb-3 " style="width:300px; color:black;">
			<h3 class="card-header">Nombre del producto</h3>
				<div class="card-body">
					
					<div class="input-group mb-3">
					
					<div class="input-group-prepend">
					<div class="input-group-text ">
					<input type="checkbox"  aria-label="Checkbox for following text input">
					</div>
					</div>
					<input type="number" class="btn btn-outline-primary form-control" style="width:100px; color:black;" id="Cantidas" aria-describedby="cantidas" placeholder="Cantidad">
					</div>
					
				</div>
				<img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
		</div>
		
		
		<div class="card border-primary mb-3 " style="width:300px; color:black;">
			<h3 class="card-header">Nombre del producto</h3>
				<div class="card-body">
					
					<div class="input-group mb-3">
					
					<div class="input-group-prepend">
					<div class="input-group-text ">
					<input type="checkbox"  aria-label="Checkbox for following text input">
					</div>
					</div>
					<input type="number" class="btn btn-outline-primary form-control" style="width:100px; color:black;" id="Cantidas" aria-describedby="cantidas" placeholder="Cantidad">
					</div>
					
				</div>
				<img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
		</div>
		
		
		<div class="card border-primary mb-3 " style="width:300px; color:black;">
			<h3 class="card-header">Nombre del producto</h3>
				<div class="card-body">
					
					<div class="input-group mb-3">
					
					<div class="input-group-prepend">
					<div class="input-group-text ">
					<input type="checkbox"  aria-label="Checkbox for following text input">
					</div>
					</div>
					<input type="number" class="btn btn-outline-primary form-control" style="width:100px; color:black;" id="Cantidas" aria-describedby="cantidas" placeholder="Cantidad">
					</div>
					
				</div>
				<img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
		</div>
		
		</div>
		
		<button type="button" class="btn btn-success">Ingresar Productos</button>
		
	</div>
	
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>