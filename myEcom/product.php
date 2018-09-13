<?php
if (isset($_GET['id'])) {
	// Connect to the MySQL database
    include "connection/conn.php";
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
	// loks for id in databse if not in daatabse then  shows message.

	$sql = mysqli_query($conn,"SELECT * FROM products WHERE id='$id' LIMIT 1");
	$productCount = mysqli_num_rows($sql); // count the output amount
    if ($productCount > 0) {
		// get all the product details
		while($row = mysqli_fetch_array($sql)){
      $id = $row["id"];
      $name = $row["name"];
      $price = $row["price"];
      $image = $row["image"];

         }

	} else {
		echo "That item does not exist.";
	    exit();
	}

} else {
	echo "Data to render this page is missing.";
	exit();
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>

<title><?php echo $name; ?></title>
<?php
  echo '<link rel = "stylesheet" href = "Style/style.css">';
 ?>
 <style>
 input[type=submit] {
   background-color: green;
   border-radius: 12px;
     border: none;
     color: white;
     padding: 10px 15px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 12px;
     margin: 2px 1px;
     cursor: pointer;
}
</style>
</head>
<body>

<div align="center" id="mainWrapper">
  <div class = "topnav">
   <a class = "active" href = "index.php">Home</a>
    <a href = "index.php">Products</a>
    <a href = "index.php">Contact</a>
    <a href = "index.php">Login</a>
  </div>
</div>

  <div id="pageContent">
    <div class = "row" align = "center">
          <div class = "harry">
           <h4><?php echo $name?></h4>
           <img src = <?php echo $image?> alt= <?php echo $id ?>>
           <p class = "price" > Our price: R <?php echo $price ?> </p>
           <!--<a href = "cart.php" id = "id">add to cart</a>-->
           <form id="form1" name="form1" method="post" action="cart.php">
           <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
           <input type="submit" name="button" class="addbtn" value="Add to Shopping Cart" />
           </form>
          </div>
        </div>
  </div>
    <footer class = "text-center" id="footer">BooksMania</foot>
</div>
</body>
</html>
