<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("https://cdn.rawgit.com/ilham513/kafe-pdf/8ea499d6/promo.php") or die("Error: Cannot create object");
print_r($xml);
?>

</body>
</html>
