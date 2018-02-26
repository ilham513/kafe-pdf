<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background: #555;
}

.content {
    max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;
}
</style>
</head>
<body>

<textarea id="myInput" rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>
<br/>
<button onclick="myFunction()">Copy text</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("Copy");
  alert("Copied the text: " + copyText.value);
}
</script>

</body>
</html>

