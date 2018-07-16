<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
      header("location: login.php");
      exit;
  }
?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	<title>The Best Website Ever</title>
</head>
<body class="text-center">
    <nav class="navbar navbar-dark box-shadow">
        <a href="index.php"><h1 class="col-lg-6">Home</h1></a>
        <h1 class="col-lg-11">Welcome to the best website ever!</h1>
        <!-- <a href="index.php"><h1 class="col-lg-4">Logout</h1></a> -->
    </nav>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

     <?php // Create connection
            include "databaseconnect.php";
            $conn = new mysqli($servername, $username, $password, $databasename);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        // Attempt select query execution
            $sql = "SELECT * from users";
            if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    echo "<table class='container'>";
                        echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>username</th>";
                            echo "<th>email</th>";
                            echo "<th>passwords</th>";
                        echo "</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                        echo "</tr>";
                    }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($link);
        ?>
</div>

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
<script type="text/javascript" src="js/passwordMeter.js"></script>
