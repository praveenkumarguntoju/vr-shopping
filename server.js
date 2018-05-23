var express = require('express');
var app = require("express")();
var http = require('http').Server(app);
var fs = require('fs');


app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.get('/',function(req,res){
    res.sendfile('index.html');
});
http.listen(process.env.PORT || 8082,function(){
    console.log("The server started.");
})
