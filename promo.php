<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("http://fetchrss.com/rss/5b85426d8a93f8f4548b4567218723325.xml") or die("Error: Cannot create object");
print_r($xml);
?>

</body>
</html>
