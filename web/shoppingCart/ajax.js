var burgerKing = 0;
var ChickFilA = 0;
var McDonalds = 0;
var Wendys = 0;
function changeQuantity(product) {
  switch(product) {
    case "burgerKing": 
    burgerKing++;
    console.log(burgerKing);
    break;
    case "ChickFilA":
    ChickFilA++;
    console.log(ChickFilA);
    break;
    case "McDonalds":
    McDonalds++;
    console.log(McDonalds);
    break;
    case "Wendys":
    Wendys++;
    console.log(Wendys);
    break;
  };

  $.ajax({
    url: "cart.php",
    type: "POST",
    success: function() {
      alert("Success");
    }
  });
}