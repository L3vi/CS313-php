function updateCart(item, willIncrement) {
  console.log(item);
  console.log(willIncrement);
  $.ajax({
    url: "updateCart.php",
    type: "POST",
    data: {
      id: item,
      willIncrement: willIncrement
    },
    success: function(data) {
      console.log(data);
    }
  });
};

/*
var burgerKing = 0;
var chickFilA = 0;
var mcDonalds = 0;
var wendys = 0;

var buttons = document.getElementsByClassName("btn-increment");
var i = 0;
for(i; i < buttons.length; i++) {
  buttons[i].addEventListener("click", (e) => {
    switch(e.target.id) {
      case "bk":
      burgerKing++;
      break;
      case "cf":
      chickFilA++;
      break;
      case "md":
      mcDonalds++;
      break;
      case "w":
      wendys++;
      break;
    };
    
  });
}
*/


