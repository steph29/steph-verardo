const express = require("express");
const bodyParser = require("body-parser");
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static(__dirname + "public"));


app.get("/", function (req, res) {
  res.sendFile(__dirname + "/public/index.html");
});

app.get("/", function (req, res) {
  res.sendFile(__dirname + "/public/index.css");
});

app.get("/", function (req, res) {
  res.sendFile(__dirname + "/public/images/protrait-web.png");
});

app.post("/", function (req, res) {
  var lastName = req.body.lastname;
  var firstName = req.body.firstname;

  res.send("Merci " + firstName + " pour votre inscription à la newsletter: ");
});
app.listen(3000, function () {
  console.log("the server is opened on port 3000");
});
