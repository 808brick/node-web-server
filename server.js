const express = require('express');
const hbs = require('hbs');
const port = process.env.PORT || 3000;

var app = express();

//app.use(express.static(__dirname + '/../../HardWire Innovation/Forme Tech/'));
hbs.registerPartials(__dirname + '/views/partials');
app.set('view engine', 'hbs');

app.use(express.static(__dirname + '/public'));

app.get('/', (req, res) => {
  res.send('<h1>Hello Express!</h1>');
});

app.listen(port, () => {
  console.log(`Server is up on port ${port}`);
});

app.get('/about', (req, res) => {
  res.render('about.hbs',{
    pageTitle: 'About Page'
  })
})
