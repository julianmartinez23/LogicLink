<!DOCTYPE html>
<html lang="es">
<head>
	<title>Categorias</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<style>
		/* main.css */

/* General styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.full-box {
    width: 100%;
    box-sizing: border-box;
}

.text-center {
    text-align: center;
}

.text-uppercase {
    text-transform: uppercase;
}

.text-titles {
    font-weight: bold;
}

/* SideBar */
.dashboard-sideBar {
    width: 260px;
    position: fixed;
    height: 100%;
    background-color: #2b3e50;
    color: #fff;
    overflow-y: auto;
    transition: all 0.5s ease;
}

.dashboard-sideBar-bg {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.dashboard-sideBar-ct {
    padding: 20px;
}

.dashboard-sideBar-title {
    padding: 20px 0;
    font-size: 24px;
}

.dashboard-sideBar-UserInfo {
    padding: 20px 0;
    border-bottom: 1px solid #444;
}

.dashboard-sideBar-UserInfo figure {
    margin: 0;
}

.dashboard-sideBar-UserInfo img {
    width: 80px;
    border-radius: 50%;
}

.dashboard-sideBar-UserInfo figcaption {
    margin-top: 10px;
    font-size: 18px;
}

.dashboard-sideBar-UserInfo ul {
    margin-top: 10px;
}

.dashboard-sideBar-UserInfo li {
    display: inline-block;
    margin: 0 5px;
}

.dashboard-sideBar-UserInfo a {
    color: #fff;
    font-size: 20px;
}

.dashboard-sideBar-Menu {
    padding: 0;
    margin: 0;
    list-style: none;
}

.dashboard-sideBar-Menu li {
    padding: 10px 0;
}

.dashboard-sideBar-Menu a {
    color: #fff;
    padding: 10px 20px;
    display: block;
    text-decoration: none;
}

.dashboard-sideBar-Menu a:hover, .dashboard-sideBar-Menu a:focus {
    background-color: #1a2734;
}

.dashboard-sideBar-Menu .btn-sideBar-SubMenu {
    cursor: pointer;
}

/* Content Page */
.dashboard-contentPage {
    margin-left: 260px;
    padding: 20px;
    background-color: #fff;
}

.dashboard-Navbar {
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    padding: 10px 20px;
}

.dashboard-Navbar .btn-menu-dashboard {
    color: #333;
    font-size: 24px;
    cursor: pointer;
}

.dashboard-Navbar .btn-search {
    color: #333;
    font-size: 24px;
    cursor: pointer;
}

.page-header {
    margin: 20px 0;
    border-bottom: 1px solid #ddd;
}

.page-header h1 {
    font-size: 32px;
}

.breadcrumb {
    background-color: #f5f5f5;
    padding: 10px 15px;
    margin: 20px 0;
    border-radius: 4px;
}

.breadcrumb a {
    text-decoration: none;
    color: #0275d8;
}

.breadcrumb .btn {
    margin-right: 5px;
}

.panel {
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.panel-info {
    border-color: #5bc0de;
}

.panel-info > .panel-heading {
    background-color: #5bc0de;
    border-color: #5bc0de;
    color: #fff;
}

.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.panel-title {
    margin: 0;
    font-size: 18px;
}

.panel-body {
    padding: 15px;
}

/* Forms */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-size: 16px;
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
    user-select: none;
}

.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}

.btn-info:hover, .btn-info:focus {
    background-color: #31b0d5;
    border-color: #269abc;
}

.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}

.btn-success:hover, .btn-success:focus {
    background-color: #449d44;
    border-color: #398439;
}

.btn-raised {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}

.btn-sm {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}

.text-right {
    text-align: right;
}

.pull-left {
    float: left;
}

.pull-right {
    float: right;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

	</style>
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="my-data.html" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="Mi cuenta">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="company.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Empresa</a>
						</li>
						<li>
							<a href="category.html"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
						</li>
						<li>
							<a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
						</li>
						<li>
							<a href="book.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo libro</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="catalog.html">
						<i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo
					</a>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Administración <small>CATEORÍAS</small></h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="category.html" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVA CATEORÍA
			  		</a>
			  	</li>
			  	<li>
			  		<a href="category-list.html" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE CATEORÍAS
			  		</a>
			  	</li>
			</ul>
		</div>

		<!-- Panel nueva categoria -->
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVA CATEORÍA</h3>
				</div>
				<div class="panel-body">
					<form>
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-assignment-o"></i> &nbsp; Información de la categoría</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Código *</label>
										  	<input pattern="[0-9]{1,7}" class="form-control" type="text" name="codigo-reg" required="" maxlength="7">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Nombre *</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="nombre-reg" required="" maxlength="30">
										</div>
				    				</div>
				    			</div>
				    		</div>
				    	</fieldset>
					    <p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
					    </p>
				    </form>
				</div>
			</div>
		</div>
		
	</section>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>