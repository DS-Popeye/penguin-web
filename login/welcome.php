<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Welcome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <link rel="shortcut icon" href="../img/Logo, Icon/Logo.png" type="image/x-icon">
</head>
<body>
	<header class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-head">
      <a class="navbar-brand" href="#">
        <img class=" logo-nav" src="img/Logo, Icon/Logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse   d-flex  justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-item nav-link active" href="../index.html">Home </a>
          <a class="nav-item nav-link active" href="#"> Product</a>
          <a class="nav-item nav-link active" href="#">About Us</a>
          <a class="nav-item nav-link active" href="#">Contract Us</a>
          <a class="nav-item nav-link active" href="welcome.php">Account</a>
        </div>
      </div>
    </nav>

  </header>
	<div class="one" style="">
            <p class="" style="text-align: center; font-size: 3rem; font-weight: 800;">Welcome</p>
                <div style="text-align: center;">
                	<?php echo "<h1>Name: " . $_SESSION['username'] . "</h1><br>"; ?>
                	<?php echo "<h1>Email : ***********" /*.$email */."</h1><br>"; ?>
                	<br><br>
                	<div style="text-align: center;">
                		<button><a style="color:red; border: none;" href="logout.php">Logout</a></button>
                	</div>
                </div>
    </div>


</body>
</html>