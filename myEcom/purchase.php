<!DOCTYPE html>
<html>
<title>purchase page</title>
<head>
  <?php
    echo '<link rel = "stylesheet" href = "Style/style.css">';
   ?>
</head>
<body>
<div class = purchaseContent >
  <div class = "topnav">
   <a class = "active" href = "index.php">Home</a>
    <a href = "index.php">Products</a>
    <a href = "index.php">Contact</a>
    <a href = "login.php">Login</a>
  </div>
  <div>
    <div align="left" style="margin-left:24px;">
      <h2>Enter your details</h2>
      <form id="form2" name="form2" method="post" action="index.php">
        Name:<br />
          <input name="Name" type="text" id="cl" size="40" />
        <br /><br />
        Surname:<br />
       <input name="Surname" type="Surname" id="cl" size="40" />
       <br><br>
       Card number:<br>
       <input name="CardNumber" type="CardNumber" id="cl" size="40" />
       <br><br>
       Address:<br>
       <input name="address" type="address" id="cl" size="40" />
       <br />
       <br />
       <br />



      </form>
       <button class= "pbtn" id = "pbtn" onclick="myFunction()">Purchase your items</button>
      <p>&nbsp; </p>
    </div>
  </div>
  <div>
    <footer class = "text-center" id="footer">BooksMania</foot>
  </div>
</div>
</body>
<script>
  function myFunction(){
   alert("your items has been purchased successfully");
   document.getElementById("form2").reset();
 }
</script>
</html>
