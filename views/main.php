<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Sharebord</title>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo ROOT_URL;?>">Sharebord</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL ;?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="<?php echo ROOT_URL ;?>shares">Shares</a>
          </li>
         
        </ul>
        <ul class="navbar-nav pull-right">
          <?php if (isset($_SESSION['is_logged_in'])) :?>
            <li class="nav-item">
           <a class="nav-link" href="<?php echo ROOT_URL ;?>">Welcome <?php echo $_SESSION['user_data']['name'];?>:</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="<?php echo ROOT_URL ;?>users/logout">Logout</a>
          </li>
            <?php else :?>
            <li class="nav-item">
           <a class="nav-link" href="<?php echo ROOT_URL ;?>users/login">Login</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="<?php echo ROOT_URL ;?>users/register">Register</a>
          </li>
          <?php endif; ?>
       </ul>
      </div>
    </nav>
		<div class="container">
			<?php Messages::display(); ?>
			<?php require($view); ?>
			
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>