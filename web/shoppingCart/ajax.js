function changeQuantity(product) {
  $.ajax({
    url: "cart.php",
    type: "POST",
    success: function() {
      alert("Success");
    }
  });
}