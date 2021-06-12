<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Damian Larkin </title>

    <!-- Bootstrap CSS -->
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"-->

    <!--Imports-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="icon" href="icons/favicon.png">
  </head>

  <nav class="topnav navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid pt-2 px-5 pb-2">
      <a class="navbar-brand" href="index.html">Damian Larkin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.html">Home</a>
          <a class="nav-link" href="/">About Me</a>
          <a class="nav-link" href="projects.html">Projects</a>
          <a class="nav-link active" aria-current="page" href="dashboard.html">FYP Dashboard</a>
        </div>
      </div>
    </div>
  </nav>

<body class="bg-dark">

	<div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
		  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</svg>
		<strong>Be careful!</strong> This website is currently under development. Expect to find some bugs!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>
	
    <?php
        $db = new PDO('mysql:host=ld298974-002.dbaas.ovh.net;port=35762;dbname=FYP_DATABASE', 'damianL', 'JHcmTAZ6rjtpq6i');
        echo "<h1 style=\"color: white;\">DB connection successful</h1>";
    ?>

</body>

<footer class="page-footer font-small fixed-bottom">
  <div class="footer-copyright text-center py-3"> 
	<h7>Copyright © 2021 Damian Larkin</h7>
  </div>
</footer>
</html>