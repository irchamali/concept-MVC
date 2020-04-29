<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="icon" href="<?= BASEURL; ?>/img/favicon_pmii.png" type="image/x-icon">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= BASEURL; ?>">DSS MVC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>

		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= BASEURL; ?>/alternative">Alternative</a>
			  </li>
			  <li class="nav-item">
		        <a class="nav-link" href="<?= BASEURL; ?>/criteria">Criteria</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search">
		      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</div>
	</div>
</nav>