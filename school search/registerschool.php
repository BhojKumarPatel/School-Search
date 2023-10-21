<?php
$t=$_REQUEST["types"];
if ($t=="Goverment")
{ header("location:govtschoolregister.php");
}
else if ($t=="CBSE")
{ header("location:CBSEregister.php");
}
else if ($t=="ICSE")
{ header("location:ICSEregister.php");
}
else if ($t=="Others")
{  header("location:Otherregister.php");
}

?>
