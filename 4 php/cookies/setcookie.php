<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";

    setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
?>

<html>
<body>
<?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookies named " .$cookie_name."is not set";
    }
    else{
        echo "Cookie" .$cookie_name. "is set";
        echo "Value is: " .$_COOKIE[$cookie_name]. "is set";
    }

?>
<p><strong>Note:</strong> You	might	have	to	reload	the	page	to	see	the	value	of the cookie.</p>

</body>
</html>

?>

