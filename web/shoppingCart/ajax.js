var burgerKing = 0;
var chickFilA = 0;
var mcDonalds = 0;
var wendys = 0;

function increment(this) {
  console.log(this);
  console.log(this.value);
  console.log(this.name);

};

  // $.ajax({
  //   url: "cart.php",
  //   type: "POST",
  //   success: function() {
  //     alert("Success");
  //   }
  // });