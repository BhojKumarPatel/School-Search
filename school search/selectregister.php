<?php
$t=$_REQUEST["type"];
if ($t=="school")
{ header("location:schooltype.php");
}
else if ($t=="student")
{ header("location:studentregistration.php");
}

?>