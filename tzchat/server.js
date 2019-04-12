/*1.通过NOde.js开启服务,进入聊天室的客户端UI界面

*/
var http = require("http");
var server = http.createServer(function(req,res){
	res.end("dsdsd")
});

server.listen(3000);//
