<?php
setcookie("name", "Aakash chamoli", time()+1);
setcookie("Age", "21",time()+1);
if(!isset($_COOKIE["name"])) {
    echo "No cookie found";
}
else if(!isset($_COOKIE["Age"])) {
   
echo "No cookie found";
}
else {
    echo "Cookie value= " .$_COOKIE["name"];
    echo "<br>Cookie value= " .$_COOKIE["Age"];
}

?>