<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php
/**
 * @todo 1. Handle form post
 * @todo 2. Validate email field
 * @todo 3. Redirect to index and process the results*/

$email = $_POST ["email"];
$error = "error";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   setcookie("Valid",$email,0) ;
}
else {
    setcookie("NotValid", $error,0);

}
header("location:index.php");
