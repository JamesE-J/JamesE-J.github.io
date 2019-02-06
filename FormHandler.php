<?php
if($_POST["message"]) {
    mail("edmondsonjones.james@gmail.com", $_POST["email"], $_POST["message"], "From: me@jamesej.com");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0; URL="index.html" />
    <title></title>
</head>
<body>

</body>
</html>