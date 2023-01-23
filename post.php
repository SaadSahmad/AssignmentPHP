
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php
/**
 * @todo 1. Handle form post
 * @todo 2. Validate email field
 * @todo 3. Redirect to index and process the results*/


$email = ($_POST["email"]);
if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
    echo("PLease provide a valid email");
} else {
    echo("Thank you");}

header("location: index.php");

