<!DOCTYPE html>
<?php
  include "connection/conn.php";
?>
<?php

?>
<html>
<head>
    <title>Home page</title>
<?php
  echo '<link rel = "stylesheet" href = "Style/style.css">';
 ?>
</head>
<body>

<div class = "Wrapper">
 <div class = "topnav">
  <a class = "active" href = "index.php">BooksMania</a>
  <a class = "" href = "index.php">Home</a>
   <a href = "#">Products</a>
   <a href = "#">Contact</a>
   <a class = "" href = "login.php">Login</a>
 </div>

  <div class = "back" id = "background-image" >
  <?php
  //dynamic adding of product from database;
  $sql = mysqli_query($conn,"SELECT * FROM products ORDER BY id LIMIT 6");
  $productCount = mysqli_num_rows($sql);
    while($row = mysqli_fetch_array($sql)){
      $id = $row["id"];
      $name = $row["name"];
      $price = $row["price"];
      $image = $row["image"];

    echo '<div class = "row" align = "center">
          <div class = "harry">
           <h4>' . $name . '</h4>
           <img src = '. $image .' alt= '. $name .' id = "images1"/>
           <p class = "price">Our price: R' . $price . '</p>
           <a href="product.php?id='.$id.'">View Product Details</a>


          </div>
        </div>';
    }
    mysqli_close($conn);


   ?>


  <div>
    <footer class = "text-center" id="footer">BooksMania</foot>
  </div>


</body>
</html>
