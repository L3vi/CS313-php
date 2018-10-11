var burgerKing = 0;
var chickFilA = 0;
var mcDonalds = 0;
var wendys = 0;
function changeQuantity(product) {
  switch(product) {
    case "burgerKing": 
    burgerKing++;
    console.log(burgerKing);
    break;
    case "chickFilA":
    chickFilA++;
    console.log(chickFilA);
    break;
    case "McDonalds":
    mcDonalds++;
    console.log(mcDonalds);
    break;
    case "wendys":
    wendys++;
    console.log(wendys);
    break;
  };
let adjustQuantityButtons = document.querySelectorAll(".btn-increment");
adjustQuantityButtons.map(e => {
  e.addEventListener("click", e => {
    alert("Hello");
  });
});

  // $.ajax({
  //   url: "cart.php",
  //   type: "POST",
  //   success: function() {
  //     alert("Success");
  //   }
  // });
}