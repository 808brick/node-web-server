const express = require('express');
const port = process.env.PORT || 3000;

var app = express();

app.use(express.static(__dirname + '/../../HardWire Innovation/Forme Tech/'));

// app.get('/', (req, res) => {
//   res.send('<h1>Hello Express!</h1>');
// });

app.listen(port, () => {
  console.log(`Server is up on port ${port}`);
});
