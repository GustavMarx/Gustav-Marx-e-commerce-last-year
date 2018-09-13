<?php

session_start();
if (isset($_SESSION["user"])) {
    header("location: index.php");
    exit();
}
?>
<?php
// parse data if user has click on log in
if (isset($_POST["username"]) && isset($_POST["password"])) {

	$user = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]);
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]);
    // Connect to the MySQL database
    include "connection/conn.php";
    $sql = mysqli_query($conn, "SELECT id FROM login WHERE username='$user' AND password='$password' LIMIT 1");

    $existCount = mysqli_num_rows($sql);
    if ($existCount == 1) {
	     while($row = mysqli_fetch_array($sql)){
             $id = $row["id"];
		 }
		 $_SESSION["id"] = $id;
		 $_SESSION["user"] = $user;
		 $_SESSION["password"] = $password;
		 header("location: index.php");
         exit();
    } else {
		echo 'That information is incorrect, try again <a href="login.php">Click Here</a>';
		exit();
	}
}
?>

<html>
<head>

<title>User Log In </title>
<?php
  echo '<link rel = "stylesheet" href = "Style/style.css">';
 ?>
</head>

<body>
<div align="center" class = "back" id = "loginback">
  <div class = "topnav">
   <a class = "active" href = "index.php">Home</a>
    <a href = "index.php">Products</a>
    <a href = "index.php">Contact</a>
    <a href = "login.php">Login</a>
  </div>
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Please Log In </h2>
      <form id="form1" name="form1" method="post" action="index.php">
        User Name:<br />
          <input name="username" type="text" id="username" size="40" />
        <br /><br />
        Password:<br />
       <input name="password" type="password" id="password" size="40" />
       <br />
       <br />
       <br />

         <input type="submit" name="button" id="button" value="Log In" />

      </form>
      <p>&nbsp; </p>
    </div>
    <br />
  <br />
  <br />
  </div>
<div>
  <footer class = "text-center" id="footer">BooksMania</foot>
</div>
</body>
</html>
