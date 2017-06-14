const express = require('express');

var app = express();

app.use(express.static(__dirname + '/../../HardWire Innovation/Forme Tech/'));

app.get('/', (req, res) => {
  res.send('<h1>Hello Express!</h1>');
});

app.listen(3000);
