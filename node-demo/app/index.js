const http = require('http');

http.createServer((req,res) => {
	res.statusCode = 200;
	res.setHeader('Content-Type', 'text/html'); 
	res.end('Hello World !! \n'); 
}).listen(8899, () => {
	console.log('Server started...');
})
