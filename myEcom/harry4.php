<!DOCTYPE html>
<html>
<head>
<?php
    echo '<link rel = "stylesheet" href = "Style/style.css">';
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


}

</style>
</head>
<body>






<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Product Details</h2>
    </div>
    <div class="modal-body">
    <img src = "images/harry4.jpg" alt = "harry4"  id = "HP3">

          <h4>Harry Potter and The Goblet of Fire</h4>
          <p>Our price: R200.00</p>

    </div>
    <div class="modal-footer" align = "right">
      <button type = "button" class = "cart">Add to Cart</button>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>