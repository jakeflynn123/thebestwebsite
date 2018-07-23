<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	<title>The Best Website Ever</title>
</head>
<script type="text/javascript" src="js/passwordMeter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
<body class="text-center">
    <nav class="navbar navbar-dark box-shadow">
        <h1 class="col-lg-12">Welcome to the best website ever!</h1>
        <!-- <a href="index.php"><h1 class="col-lg-4">Logout</h1></a> -->
    </nav>
<div class="header">
  	<h2>Login</h2>
</div>
    <main>
        <section class="container">
            <div class="row">
                <form action="login.php" method="post" class="form-signin col-lg-12">
                    <?php include "errors.php"; ?>
                    <label for="inputUsername" class="sr-only">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                    <button type="submit" class="btn-primary" name="login_user">Login</button>
                </form>
                </div>
        </section>
    </main>
<script type="text/javascript" src="js/passwordMeter.js"></script>
</body>
</html>