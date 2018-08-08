var express = require('express');
var app = require("express")();
var http = require('http').Server(app);
var fs = require('fs');
var path = require('path');

  
  app.use(express.static(path.join(__dirname, '/public')));
app.use(express.static(__dirname + '/images'));

app.use(express.static(__dirname + '/aframefiles'));
app.use(express.static(__dirname + "/viking_helmet"));
app.use(express.static(__dirname + '/jsfiles'));
app.use(express.static(__dirname + '/styles'));
app.use(express.static(__dirname + '/phpfiles'));
app.get('/',function(req,res){
    res.sendfile('index.html');
});
http.listen(process.env.PORT || 8082,function(){
    console.log("The server started.");
})
