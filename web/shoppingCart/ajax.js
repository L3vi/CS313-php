var burgerKing = 0;
var chickFilA = 0;
var mcDonalds = 0;
var wendys = 0;

var buttons = document.getElementsByClassName("btn-increment");
var i = 0;
for(i; i < buttons.length; i++) {
  buttons[i].addEventListener("click", (e) => {
    console.log("Test");
  });
}

  // $.ajax({
  //   url: "cart.php",
  //   type: "POST",
  //   success: function() {
  //     alert("Success");
  //   }
  // });