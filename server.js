var express = require('express');

var app = express();

app.set("views", __dirname + "/views");
app.set("view engine", "ejs");

app.get('/', (request, response) => {
	console.log("There's a request for you! It's located at: /");

	response.write("<h1>Hello slash!</h1>");
	response.end();
});

app.get('/tacos', (request, response) => {
	console.log("There's a request for you! It's located at: /tacos");
	// get number of tacos
	var num = getTacoNumber();
	
	response.render("tacos", {num:num});
	// response.end();
});

function getTacoNumber() {
	return 9002;
}

app.listen(9001, () => {
	console.log("Listening on a port that's over 9000.");
});