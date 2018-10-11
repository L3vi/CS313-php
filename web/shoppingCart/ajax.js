var burgerKing = 0;
var chickFilA = 0;
var mcDonalds = 0;
var wendys = 0;

let adjustQuantityButtons = document.querySelectorAll(".btn-increment");
adjustQuantityButtons.forEach(button => {
  button.addEventListener("click", e => {
    alert("Hello");
  });
  console.log(button);
});

  // $.ajax({
  //   url: "cart.php",
  //   type: "POST",
  //   success: function() {
  //     alert("Success");
  //   }
  // });