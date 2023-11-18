
<html>
  <head>

  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css.map.css">
  <link rel="stylesheet" href="css/index.css">

  <style>
.navbar .megamenu{ padding: 1rem; }

/* ============ desktop view ============ */
@media all and (min-width: 992px) {

  .navbar .has-megamenu{position:static!important;}
  .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }

}	
/* ============ desktop view .end// ============ */

/* ============ mobile view ============ */
@media(max-width: 991px){
  .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
    overflow-y: auto;
      max-height: 90vh;
      margin-top:10px;
  }
}
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
	<a class="navbar-brand" href="#">Brand</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="main_nav">
		<ul class="navbar-nav">
			<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
			<li class="nav-item"><a class="nav-link" href="#"> About </a></li>
			<li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
			<li class="nav-item dropdown has-megamenu">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega menu  </a>
				<div class="dropdown-menu megamenu" role="menu">
					This is content of megamenu. <br>
				       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</div> <!-- dropdown-mega-menu.// -->
			</li>
		</ul>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
			<li class="nav-item dropdown">
				<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
			    <ul class="dropdown-menu dropdown-menu-end">
				  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
				  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			    </ul>
			</li>
		</ul>
	</div> <!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->
</nav>
<Script src="js/all.min"> </script>
<Script src="js/bootstrap.bundle.min.js"> </script>
<Script src="js/bootstrap.bundle.min.js.map.js"> </script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>