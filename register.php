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
        <a href="index.php"><h1 class="col-lg-6">Home</h1></a>
        <h1 class="col-lg-11">Welcome to the best website ever!</h1>
        <!-- <a href="index.php"><h1 class="col-lg-4">Logout</h1></a> -->
    </nav>
    <main>
        <section class="container">
            <div class="row">
                <form method="post" action="register.php" class="form-signin col-lg-12">
                <?php include('errors.php'); ?>
                    <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                    <label for="inputUsername" class="sr-only">Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input name="email" type="email" class="form-control" placeholder="Email address" required>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password_1" type="password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword2" class="sr-only">Confirm Password</label>
                    <input name="password_2" type="password" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn-primary" name="reg_user">Register</button>
                    <div class="progress">
                        <div id="password-bar" class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p id="password-text" ></p>
                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                </form>
            </div>
        </section>
    </main>
</body>
</html>