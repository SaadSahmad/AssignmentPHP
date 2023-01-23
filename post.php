
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php
/**
 * @todo 1. Handle form post
 * @todo 2. Validate email field
 * @todo 3. Redirect to index and process the results
 */


$email = $_POST["email"];
$emailErr = "Please provide a valid email address";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "$emailErr";
}
else {  echo "Thank you";}

/** cookie not found in the browser */
setcookie('email', '$email', 10000);


