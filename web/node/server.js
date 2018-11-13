const http = require('http');
var path = require('path');
const port = 8888;

// Create Server
var myServer = http.createServer(onRequest);

// Create function to handle requests
function onRequest(request, response) {
	// If the response code is 200, return the content type as JSON?
	response.writeHead(200, {"Content-Type": "application/json"});
	// If the response code is 200, return the content type as html?
	response.writeHead(404, {"Content-Type": "text/html"});

	// Check to see what the URL is and respond accordingly
	switch(path.basename(request.url)) {
		case "home":
			response.write("<html><h1>Welcome to the Home Page.</h1></html>");
			response.end();
			break;
		case "getData":
			var myData = {
				"name": "Levi Stum",
				"class": "CS 313"
			}
			response.write(JSON.stringify(myData));
			break;
		default:
			response.write("<html><p>404 Error. Page not found.</p></html>");
			// response.writeHead(301, { "Location": "404.html"});
			break;
	}

	// End the response, send the data back to the user.
	response.end();
}

// Set port to listen to (8888)
myServer.listen(port);